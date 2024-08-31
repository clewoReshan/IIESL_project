<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin'; 

    protected $fillable = [
        'nic',
        'full_name',
        'contact_no',
        'email',
        'password',
        'status',
        'created_at',
        'updated_at',
    ];
}
