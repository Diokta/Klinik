<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Apoteker extends Model
{
    protected $table = 'tb_apoteker';
    protected $allowedFields = ['id', 'nama', 'nik', 'tempatLahir', 'tanggalLahir', 'jenisKelamin', 'kewarganegaraan', 'agama', 'statusPernikahan', 'golonganDarah', 'pendidikan', 'alamat', 'kelurahan', 'kecamatan', 'kabupaten', 'provinsi', 'kodePos', 'noTelp', 'noHP', 'email'];
}
