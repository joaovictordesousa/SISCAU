<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conecBanco extends Model
 {
    protected $table = 'AuxAgencias';
    protected $connection = 'pgsql';
 }