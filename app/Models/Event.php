<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "description",
        "startDateTime",
        "endDateTime",
        "maxParticipants",
    ];

    public function event_registration(){
        return $this->hasMany(EventRegistration::class);
    }
    public function interview_slots(){
        return $this->hasMany(InterviewSlots::class);
    }
    public function event_capacity_requests(){
        return $this->hasMany(EventCapacityRequest::class);
    }
}
