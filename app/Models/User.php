<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        "fullname",
        "age",
        "adress",
        "diplomas",
        "email",
        "role_id",
    ];



    public function event_registration(){
        return $this->hasMany(EventRegistration::class);
    }
    public function interview_slots(){
        return $this->hasMany(InterviewSlots::class);
    }
    public function interview_appointements(){
        return $this->hasMany(InterviewAppointements::class);
    }
    public function event_capacity_requests(){
        return $this->hasMany(EventCapacityRequest::class);
    }


    public function role() {
        return $this->hasOne(Role::class);
    }

}
