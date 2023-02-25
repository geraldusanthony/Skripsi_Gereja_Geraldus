<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class umat extends Model
{
    use HasFactory;
    protected $table = 'umat';
    protected $primarykey = 'id';
    protected $fillable = ['nama_umat','warga','negara','nik','no_kk','tgl_lahir','jns_kelamin','ling']; 
}
