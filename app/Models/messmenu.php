<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messmenu extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['mess_id','Sunday','Monday','Tuesday','Wednesday','Trusday','Friday','Saturday'];
}
