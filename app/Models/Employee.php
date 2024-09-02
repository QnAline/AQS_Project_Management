<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employeed'; 
   protected $fillable = [
        'emp_name',
        'email_personal',
        'email_company',
        'phone_number',
        'verification_code',
    ];
    public function hod()
    {
        return $this->belongsTo(Hod::class, 'hod_id');
    }
}
