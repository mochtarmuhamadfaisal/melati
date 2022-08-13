<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    use HasFactory;
    public function matakuliah(){
        return $this->belongsTo(Matakuliah::class,'id_matakuliah','id');
    }

    public function users(){
        return $this->belongsTo(User::class,'id_user','id');
    }
}
