<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrowthStage extends Model
{
    use HasFactory;
    protected $fillable = ['plant_id ','stage','date'];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}
