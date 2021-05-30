<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // use HasFactory;

    // protected $table = 'services';
    // public $timestamps = true;

    // protected $casts = [
    //     'price' => 'float'
    // ];

    // protected $fillable = [
    //     'name',
    //     'description',
    //     'price'
    // ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
