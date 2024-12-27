<?php

namespace App\Models;

use CodeIgniter\Model;

class SlipGajiModel extends Model
{
    // db name
    protected $DBGroup = 'sirs';

    /** table name */
    protected $table = "t_hr_slip_gaji";

    /** primaryKey Field */
    protected $primaryKey = 'id';

    /** primaryKey autoincrement */
    protected $useAutoIncrement = true;
    /** allowed Field */
    protected $allowedFields = [
        'sg_gp', 'sg_tj', 'sg_profesi', 'sg_tm', 'sg_pic', 'sg_pcr',
        'sg_makan', 'jasa_medis', 'sg_bonus_th', 'sg_bonus', 'sg_rapel',
        'sg_bpjs_ket', 'sg_bpjs_kes', 'sg_pph21', 'sg_kasbon', 'sg_prorate', 'sg_denda',
        'sg_total_kasbon', 'sg_kasbon', 'sg_terbayar', 'sg_sisa_kasbon'
    ];

    public function getData()
    {
        return $this->findAll(); // retrieve all data
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
