<?php

class M_admin extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('admin');
    }

    public function detail_admin($id = null)
    {
        $query = $this->db->get_where('admin', array('id' => $id))->row();
        return $query;
    }

    public function delete_admin($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_admin($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
