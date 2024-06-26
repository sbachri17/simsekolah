<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['nis','name','birth_date','jurusan_id'];

    function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }
}
