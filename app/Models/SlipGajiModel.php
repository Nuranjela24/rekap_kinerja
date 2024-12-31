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
        'sg_bukti_no', 'sg_bukti_date',
        'sg_gp', 'sg_tj', 'sg_profesi', 'sg_tm', 'sg_pic', 'sg_pcr',
        'sg_makan', 'jasa_medis', 'sg_transportasi', 'sg_bonus_th', 'sg_bonus', 'sg_rapel',
        'sg_bpjs_ket', 'sg_bpjs_kes', 'sg_pph21', 'sg_kasbon', 'sg_prorate', 'sg_denda',
        'sg_total_kasbon', 'sg_kasbon', 'sg_terbayar', 'sg_sisa_kasbon',
        'peg_code'
    ];

    public function getData()
    {
        return $this->findAll(); // retrieve all data
    }

    public function getDataByPegawai($peg_code)
    {
        // Hitung tanggal 3 bulan yang lalu
        $threeMonthsAgo = date('Y-m-d', strtotime('-3 months'));

        return $this->select('t_hr_slip_gaji.id as slip_gaji_id, t_hr_slip_gaji.*, m_pegawai.*, m_jabatan.*, MAX(t_hr_jasa_medis_detail.jm_amount) as jasa_medis')
            ->join('m_pegawai', 't_hr_slip_gaji.peg_code = m_pegawai.peg_code')
            ->join('m_jabatan', 'm_pegawai.jab_code = m_jabatan.jab_code')
            ->join('t_hr_jasa_medis_detail', 't_hr_slip_gaji.peg_code = t_hr_jasa_medis_detail.peg_code', 'left') // Gunakan left join jika data di jasa medis opsional
            ->where('t_hr_slip_gaji.peg_code', $peg_code)
            ->where('t_hr_slip_gaji.sg_bukti_date >=', $threeMonthsAgo)
            ->groupBy('t_hr_slip_gaji.id') // Hindari duplikasi data slip gaji
            ->findAll();
    }

    public function getDataById($id)
    {
        return $this->select('t_hr_slip_gaji.id as slip_gaji_id, t_hr_slip_gaji.*, m_pegawai.*, m_jabatan.*')
            ->join('m_pegawai', 't_hr_slip_gaji.peg_code = m_pegawai.peg_code')
            ->join('m_jabatan', 'm_pegawai.jab_code = m_jabatan.jab_code')
            ->where('t_hr_slip_gaji.id', $id)
            ->findAll();
    }
}
