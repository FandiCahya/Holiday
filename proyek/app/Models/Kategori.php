<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'kategori';
    protected $primaryKey = 'id';

    public function paket(){
        return $this->hasOne(Paket::class);
    }
}
