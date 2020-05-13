<?php
class Akademik_model extends CI_Model
{

    function akademik_list()
    {
        $hasil = $this->db->get('tb_akademik');
        return $hasil->result();
    }

    function save_akademik()
    {
        $data = array(
            'id_akademik'  => $this->input->post('id_akademik'),
            'kode_akademik'  => $this->input->post('kode_akademik'),
            'nama_akademik'  => $this->input->post('nama_akademik')
        );
        $result = $this->db->insert('tb_akademik', $data);
        return $result;
    }

    function update_akademik()
    {
        $akademik_id = $this->input->post('id_akademik_edit');
        $nama_akademik = $this->input->post('nama_akademik_edit');
        $kode_akademik = $this->input->post('kode_akademik_edit');

        $this->db->set('nama_akademik', $nama_akademik);
        $this->db->set('kode_akademik', $kode_akademik);
        $this->db->where('id_akademik', $akademik_id);
        $result = $this->db->update('tb_akademik');
        return $result;
    }

    function delete_akademik()
    {
        $akademik_id = $this->input->post('id_akademik');
        $this->db->where('id_akademik', $akademik_id);
        $result = $this->db->delete('tb_akademik');
        return $result;
    }
}
