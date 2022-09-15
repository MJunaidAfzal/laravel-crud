<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
