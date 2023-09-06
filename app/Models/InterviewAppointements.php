<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewAppointements extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "slot_id",
        "status",
        
    ];
    public function InterviewSlot(){
        return $this->belongsTo(InterviewSlots::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
