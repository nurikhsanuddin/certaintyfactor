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
        // Buat aturan-aturan dan nilai Certainty Factor (CF) untuk setiap gejala dan kerusakan.
        $aturan = array(
            '1' => array(
                'kerusakan_lcd' => 0.8,
                'kerusakan_baterai' => -0.3,
            ),
            '2' => array(
                'kerusakan_baterai' => 0.7,
            ),
            '3' => array(
                'kerusakan_port_usb' => 0.9,
                'kerusakan_baterai' => -0.2,
            ),
            '4' => array(
                'kerusakan_tombol' => 0.8,
            ),
            '5' => array(
                'kerusakan_audio' => 0.6,
            ),
            '6' => array(
                'kerusakan_wifi' => 0.7,
            ),
            '7' => array(
                'kerusakan_lcd' => 0.7,
            ),
            '8' => array(
                'kerusakan_overheating' => 0.8,
            ),
            '9' => array(
                'kerusakan_audio' => 0.7,
            ),
            '10' => array(
                'kerusakan_software' => 0.6,
            ),
            '11' => array(
                'kerusakan_audio' => 0.5,
                'kerusakan_signal' => 0.7,
            ),
            '12' => array(
                'kerusakan_sms' => 0.6,
            ),
            '13' => array(
                'kerusakan_internet' => 0.7,
            ),
            '14' => array(
                'kerusakan_kamera' => 0.6,
            ),
            '15' => array(
                'kerusakan_audio' => 0.6,
            ),
            '16' => array(
                'kerusakan_software' => 0.7,
            ),
            '17' => array(
                'kerusakan_baterai' => 0.8,
            ),
            '18' => array(
                'kerusakan_lcd' => 0.7,
            ),
            '19' => array(
                'kerusakan_baterai' => 0.7,
            ),
            // Tambahkan aturan-aturan lainnya sesuai kebutuhan
        );

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
