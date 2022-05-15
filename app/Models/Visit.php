<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Visit extends Model
{
    use HasFactory;

    protected $fillable = array('date', 'time', 'doctor_id', 'patient_id', 'service_id');

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
