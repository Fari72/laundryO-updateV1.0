<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forgotpassword extends Model
{
    use HasFactory;

    protected $table = 'ForgotPassword';

    public $timestamps = false;
    public $incrementing = false;

}
