<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $table = 'partners';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'category',
        'address',
        'email',
        'nohp',
        'username',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_partners');
    }
}
