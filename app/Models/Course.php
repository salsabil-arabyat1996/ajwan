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
    ];
// Course.php (or your model file)
public function category()
{
    return $this->belongsTo(Category::class);
}


}
