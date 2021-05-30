<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPartner extends Model
{
    use HasFactory;

    protected $table = 'product_partners';

    protected $fillable = [
        'partner_id'
    ];

    public $timestamps = true;
}
