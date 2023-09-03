<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'location',
        'start',
        'end',
        'time',
        'Target_group',
        'status',
        'image'=>'required |image|mimes:jpeg,png,jpg,gif|max:2048',

    ];


}
