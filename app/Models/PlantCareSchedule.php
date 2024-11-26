<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantCareSchedule extends Model
{
    use HasFactory;
    protected $fillable = ['plant_id ', 'type', 'next_due_date', 'frequency_in_days'];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}
