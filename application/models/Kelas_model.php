<?php
class Kelas_model extends CI_Model
{

    function kelas_list()
    {
        $hasil = $this->db->get('tb_kelas');
        return $hasil->result();
    }

    function save_kelas()
    {
        $data = array(
            'id_kelas'  => $this->input->post('id_kelas'),
            'nama_kelas'  => $this->input->post('nama_kelas')
        );
        $result = $this->db->insert('tb_kelas', $data);
        return $result;
    }

    function update_kelas()
    {
        $kelas_id = $this->input->post('id_kelas_edit');
        $nama_kelas = $this->input->post('nama_kelas_edit');

        $this->db->set('nama_kelas', $nama_kelas);
        $this->db->where('id_kelas', $kelas_id);
        $result = $this->db->update('tb_kelas');
        return $result;
    }

    function delete_kelas()
    {
        $kelas_id = $this->input->post('id_kelas');
        $this->db->where('id_kelas', $kelas_id);
        $result = $this->db->delete('tb_kelas');
        return $result;
    }
}
