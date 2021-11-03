<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mess extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['hotel_id','student_id','mess_total_price','mess_duration','mess_advance_amount','mess_remaining_amount','mess_shift','date_time'];
}
