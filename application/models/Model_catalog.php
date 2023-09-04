<?php
class Model_Catalog extends CI_Model
{
    public function getAllCatalog()
    {
        $catalogItems = $this->db->get('catalog')->result_array();

        foreach ($catalogItems as &$item) {
            $item['harga'] = $this->formatToRupiah($item['harga']);
        }

        return $catalogItems;
    }

    private function formatToRupiah($amount)
    {
        return "Rp " . number_format($amount, 0, ',', '.');
    }
}
