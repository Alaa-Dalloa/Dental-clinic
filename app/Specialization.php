<?php

namespace App;
use App\doctor;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{

    protected $fillable =['name' 


];
    public function Doctors(){
        return $this->hasMany(doctor::class);
        
            }
}
