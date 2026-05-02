<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffDetail extends Model
{


   protected $fillable = [
    'user_id',
    'address',
    'city',
    'phone_number',
    'salary',
    'father_name',
    'father_cnic',
    'user_cnic',
    'education',
    'work_experience',
    'pincode',
    'country',
    'state',
    'last_degree_file' ,
    'father_cnic_front' ,
    'father_cnic_back',
    'user_cnic_front',
    'user_cnic_back',
    'birthday',

];

public function user()
{
    return $this->belongsTo(User::class);
}
}
