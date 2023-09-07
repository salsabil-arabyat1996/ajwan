<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'teacher_name',
        'description',
        'price',
        'location',
        'start',
        'end',
        'time',
        'Target_group',
        'image',
        'category_id',
        'status',
    ];
  /**
     * Get the user that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'categore_id');
    }

}
