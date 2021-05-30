<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'address',
        'email',
        'nohp',
        'username',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
