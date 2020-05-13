<?php
class Pendidik_model extends CI_Model
{

    function pendidik_list()
    {
        $hasil = $this->db->get('tb_pendidik');
        return $hasil->result();
    }

    function save_pendidik()
    {
        $data = array(
            'NIP'  => $this->input->post('NIP'),
            'nama_pendidik'  => $this->input->post('nama_pendidik'),
            'email_pendidik'  => $this->input->post('email_pendidik'),
            'username_pendidik'  => $this->input->post('NIP'),
            'password_pendidik'  => $this->input->post('NIP'),
            'foto_pendidik'  => $this->input->post('foto_pendidik')
        );
        $result = $this->db->insert('tb_pendidik', $data);
        return $result;
    }

    function update_pendidik()
    {
        $pendidik_id = $this->input->post('id_pendidik_edit');
        $nama_pendidik = $this->input->post('nama_pendidik_edit');
        $NIP  = $this->input->post('NIP');
        $nama_pendidik  = $this->input->post('nama_pendidik');
        $email_pendidik  = $this->input->post('email_pendidik');
        $username_pendidik  = $this->input->post('username_pendidik');
        $password_pendidik  = $this->input->post('password_pendidik');
        $foto_pendidik  = $this->input->post('foto_pendidik');

        $this->db->set('NIP', $NIP);
        $this->db->set('nama_pendidik', $nama_pendidik);
        $this->db->set('email_pendidik', $email_pendidik);
        $this->db->set('username_pendidik', $username_pendidik);
        $this->db->set('password_pendidik', $password_pendidik);
        $this->db->set('foto_pendidik', $foto_pendidik);
        $this->db->where('id_pendidik', $pendidik_id);
        $result = $this->db->update('tb_pendidik');
        return $result;
    }

    function delete_pendidik()
    {
        $pendidik_id = $this->input->post('id_pendidik');
        $this->db->where('id_pendidik', $pendidik_id);
        $result = $this->db->delete('tb_pendidik');
        return $result;
    }
}
