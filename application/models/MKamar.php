<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKamar extends CI_Model
{
    function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere($id,$nilai)
    {
        $this->db->from('tbl_pasien as a, tbl_kamar as b');
        $this->db->where('a.id_pasien = `b`.`id_kamar`');
        $this->db->where($id,$nilai);
        $query= $this->db->get();
        return $query;
    }
     function list_kamar()
     {
        return $this->db->get('tbl_pasien')->result();
     }
}