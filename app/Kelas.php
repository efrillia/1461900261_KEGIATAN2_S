<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'setup_kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = ['nama_kelas'];

    public function ruangan()
    {
        return $this->hasMany(Ruangan::class, 'id_kelas');
    }
}
