<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    //
    protected $table = 'coba';
    protected $fillable= ['nama','jurusan','Jk'];
    protected $visible= ['nama','jurusan','Jk'];
    public $timestamp = true;

}
