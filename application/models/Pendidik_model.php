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
        $foto = base_url("assets/dist/img/avatar.png");
        $password = md5($this->input->post('NIP'));
        $username = $this->input->post('NIP');
        $data = array(
            'NIP'  => $this->input->post('NIP'),
            'nama_pendidik'  => $this->input->post('nama_pendidik'),
            'email_pendidik'  => $this->input->post('email_pendidik'),
            'username_pendidik'  => $username,
            'password_pendidik'  => $password,
            'foto_pendidik'  => $foto
        );
        $result = $this->db->insert('tb_pendidik', $data);
        return $result;
    }

    function update_pendidik()
    {
        $password = md5($this->input->post('NIP_edit'));
        $username = $this->input->post('NIP_edit');

        $pendidik_id = $this->input->post('id_pendidik_edit');
        $nama_pendidik = $this->input->post('nama_pendidik_edit');
        $NIP  = $this->input->post('NIP_edit');
        $email_pendidik  = $this->input->post('email_pendidik_edit');
        $username_pendidik  = $username;
        $password_pendidik  = $password;

        $this->db->set('NIP', $NIP);
        $this->db->set('nama_pendidik', $nama_pendidik);
        $this->db->set('email_pendidik', $email_pendidik);
        $this->db->set('username_pendidik', $username_pendidik);
        $this->db->set('password_pendidik', $password_pendidik);
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
