<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tran extends Model
{
    use HasFactory;
    protected $table="trans";
    public $timestamps=false;
}
