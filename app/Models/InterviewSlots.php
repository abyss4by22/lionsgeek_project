<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewSlots extends Model
{
    use HasFactory;
    protected $fillable = [
        "role_id",
        "event_id",
        "startDateTime",
        "endDateTime",
        "maxAttendance",
    ];
    public function event(){
        return $this->belongsTo(Event::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function appointement(){
        return $this->hasOne(InterviewAppointements::class);
    }
}
