<?php

namespace App;
use App\specialization;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $fillable =['name' ,'phone','email','specialization_id'


];

    public function Specialization(){
        return $this->belongsTo (specialization::class);
        
        }  
}
