<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasUuids;

    public $incrementing = false;
    protected $keyType = "string";
    protected $fillable =[
        'title',
        'subtitle',
        'slug',
        'content',
        'user_id'
    ];

}
