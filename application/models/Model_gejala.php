<?php
class Model_gejala extends CI_Model
{
    public function getAllGejala()
    {
        $gejala = array();

        $this->db->select('id, nama_gejala');
        $this->db->from('gejala');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $gejala[$row->id] = $row->nama_gejala;
            }
        }

        return $gejala;
    }

    function deteksiKerusakan($gejala)
    {
        // Query untuk mengambil data dari tabel aturan
        $result = $this->db->get('aturan')->result();

        // Inisialisasi array $aturan
        $aturan = array();

        if (!empty($result)) {
            foreach ($result as $row) {
                $id_aturan = $row->id_aturan;
                $gejala_name = $row->kerusakan;
                $cf = $row->cf;

                // Menambahkan data ke dalam array
                if (!isset($aturan[$id_aturan])) {
                    $aturan[$id_aturan] = array();
                }
                $aturan[$id_aturan][$gejala_name] = $cf;
            }
        } else {
            echo "Tidak ada data yang ditemukan.";
        }

        $hasilCF = array();
        foreach ($gejala as $g) {
            foreach ($aturan[$g] as $kerusakan => $cf) {
                if (!isset($hasilCF[$kerusakan])) {
                    $hasilCF[$kerusakan] = 0;
                }
                $hasilCF[$kerusakan] += $cf * (1 - abs($hasilCF[$kerusakan]));
            }
        }

        return $hasilCF;
    }
}
