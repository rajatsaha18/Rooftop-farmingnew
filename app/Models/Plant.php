<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;
    protected $fillable = ['name','planning_date','harvest_date','current_stage','notes'];

    public function growthStages()
    {
        return $this->hasMany(GrowthStage::class);
    }

    public function careSchedules()
    {
        return $this->hasMany(PlantCareSchedule::class);
    }
}
