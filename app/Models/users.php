<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class users extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'username',
        'password',

    ];

    public function CreateUsers($data)
    {

        return  DB::table('users')->insert($data);
    }
}