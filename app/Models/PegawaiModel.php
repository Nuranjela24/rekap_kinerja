<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    // db name
    protected $DBGroup = 'sirs';

    /** table name */
    protected $table = "m_pegawai";

    /** primaryKey Field */
    protected $primaryKey = 'id';

    /** primaryKey autoincrement */
    protected $useAutoIncrement = true;
    /** allowed Field */
    protected $allowedFields = ['peg_code', 'peg_name', 'peg_nik', 'peg_sdate', 'jab_code'];

    public function getData()
    {
        return $this->select('m_pegawai.*, m_jabatan.*, m_posisi.*')
            ->join('m_jabatan', 'm_pegawai.jab_code = m_jabatan.jab_code')
            ->join('m_posisi', 'm_pegawai.posi_code = m_posisi.posi_code')
            ->findAll();
    }

    public function insertData($data)
    {
        return $this->insert($data); // insert data
    }

    public function updateData($id, $data)
    {
        return $this->update($id, $data); // update data
    }

    public function deleteData($id)
    {
        return $this->delete($id); // delete data by ID
    }
}
