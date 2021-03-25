<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\SottDeletes;


class Student extends Model
 //kalau fillable yang boleh di isi
 // kalau guarded yang tidk boleh diisi
{
    use SoftDeletes;

    protected $fillable = ['Nama', 'NRP', 'Email', 'jurusan'];
}
