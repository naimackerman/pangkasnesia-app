<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePartner extends Model
{
    use HasFactory;

    protected $table = 'service_partners';

    protected $fillable = [
        'partner_id'
    ];

    public $timestamps = true;
}
