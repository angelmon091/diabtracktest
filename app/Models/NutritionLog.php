<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'meal_type',
        'carbs_grams',
        'consumed_at',
        'food_categories',
        'medication_taken',
        'medication_dose',
    ];

    protected $casts = [
        'food_categories' => 'array',
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
