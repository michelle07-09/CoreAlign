<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PilatesClass extends Model
{
    protected $table = 'classes';
    protected $fillable = ['name', 'type', 'start_time', 'instructor_name', 'capacity', 'enrolled', 'status'];
}
