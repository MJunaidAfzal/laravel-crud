<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hospital(){
        return $this->belongsto(Hospital::class);
    }

    public function doctor(){
        return $this->belongsto(Doctor::class);
    }
}
