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
        'user_id'   
    ];
    public function data()
    {
        return $this->belongsToMany(Data::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
 
}
