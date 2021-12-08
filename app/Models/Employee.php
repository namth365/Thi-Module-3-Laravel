<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table = 'employees';
    public function manage(){
        return $this->belongsTo('App\Models\Manage','manage_id','id');
    }
}
