<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'paket';
    protected $primaryKey = 'id';

    public function kategori(){
        return $this->hasOne(Kategori::class,'id_kategori');
    }
}
