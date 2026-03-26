<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitalSign extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'glucose_level',
        'systolic',
        'diastolic',
        'heart_rate',
        'hba1c',
        'measurement_moment',
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
