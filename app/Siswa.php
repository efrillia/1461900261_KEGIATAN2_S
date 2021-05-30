<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'data_siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = ['nama_siswa', 'nis', 'kelamin', 'alamat_siswa', 'telepon_siswa'];

    public function ruangan()
    {
        return $this->hasMany(Ruangan::class, 'id_siswa');
    }
}
