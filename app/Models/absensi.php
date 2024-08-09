<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class absensi extends Model
{
    use HasFactory;
    
    protected $table = 'absensi';

    protected $fillable = [
        'usersGuru_id',
        'tanggal',
        'waktu_datang',
        'waktu_pulang',
        'status',
        'poin'
    ];
    public function CreateAbsensi($data){

        return  DB::table('absensi')->insert($data);
}
}