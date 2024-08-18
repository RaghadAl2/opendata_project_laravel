<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'describe_ar',
        'describe_en',
        'update',
        'status',
        'user_id'
        
    ];
    protected $guarded = [];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
