<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'activity_type',
        'duration_minutes',
        'intensity',
        'start_time',
        'end_time',
        'energy_level',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeDelUsuario($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeDeHoy($query)
    {
        return $query->whereDate('created_at', \Carbon\Carbon::today());
    }
}
