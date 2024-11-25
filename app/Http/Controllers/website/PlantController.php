<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Plant;

class PlantController extends Controller
{
    public $plant;
    public function index()
    {
        $plants = Plant::all();
        return view('website.plant.index',compact('plants'));
    }
    public function create()
    {
        return view('website.plant.create');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'          => 'required',
            'planting_date' => 'required',
        ]);

        DB::table('plants')->insert([
            'name'          => $validate['name'],
            'planting_date' => $validate['planting_date'],
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        return redirect()->route('plant.index')->with('message', 'Plant Create Successfully');
    }

    public function show($id)
    {
        $this->plant = Plant::find($id);
        return view('website.plant.show',['plant' => $this->plant]);
    }


    public function updateStage(Request $request,$id)
    {
        $this->plant = Plant::find($id);
        $validated = $request->validate([
            'stage' => 'required|string',
            'date'  => 'required|date',
        ]);


        DB::table('growth_stages')->insert([
            'plant_id'      => $this->plant->id,
            'stage'         => $validated['stage'],
            'date'          => $validated['date'],
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        DB::table('plants')->where('id',$this->plant->id)->update([
            'current_stage' => $validated['stage'],
            'updated_at'    => now(),
        ]);
        return redirect()->route('plant.show',$this->plant->id)->with('message', 'Growth Stage Update Successfully');
    }

    public function deletePlant($id)
    {
        $this->plant = Plant::find($id);
        $this->plant->delete();
        return redirect()->route('plant.index')->with('message', 'Plant Delete Successfully');
    }
    public function markAsHarvested($id)
    {
        $this->plant = Plant::find($id);
        DB::table('plants')->where('id', $this->plant->id)->update([
            'current_stage' => 'Harvested',
            'harvest_date' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('plant.show',$this->plant->id)->with('message', 'Plant marked as harvested');
    }
}
