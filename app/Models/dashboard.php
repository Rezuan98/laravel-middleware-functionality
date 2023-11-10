<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
   
    protected $table = 'admins';
    Protected $primarykey = 'id';
    public $incrementing = true;
    protected $keytype = 'int';
    public $timestamps = false;
}
