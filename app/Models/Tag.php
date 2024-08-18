<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ar',
        'name_en',
        'describe_ar',
        'describe_en',
        
    ];
    public function data()
    {
        return $this->belongsToMany(Data::class);
    }

    
 
}
