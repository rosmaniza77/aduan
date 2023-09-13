<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'description']; //guna jika field sikit
    protected $guarded = [];  //guna ni lebih baik
}
