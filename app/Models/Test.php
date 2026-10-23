<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /** @use HasFactory<\Database\Factories\TestFactory> */
    use HasFactory;

    protected $table='';

    protected $guarded=['id'];


    const   UPLOADPATH='images/';
    const   UPLOADFIELDS=[];
    }

