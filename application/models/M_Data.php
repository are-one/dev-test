<?php 

class M_Data extends CI_Model
{
    private $table_name = 'data';

    public function get_count_data_by_kategori()
    {
        return $this->db->query('Select COUNT(data.kategori_id) as jumlah_data, data.kategori_id, kategori.kategori FROM data LEFT JOIN kategori ON kategori.id=data.kategori_id GROUP BY kategori_id')->result();
    }
}
