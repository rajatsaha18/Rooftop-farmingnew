<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Mail\PlantCareReminderMail;
use App\Models\Plant;
use App\Models\PlantCareSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PlantCareController extends Controller
{
    public function create($id)
    {
        $plant = Plant::find($id);
        return view('website.plant-care.create',compact('plant'));
    }
    public function store(Request $request,$id)
    {
        $plant = Plant::find($id);
        $careSchedule = new PlantCareSchedule();
        $careSchedule->plant_id             = $plant->id;
        $careSchedule->type                 = $request->type;
        $careSchedule->next_due_date        = $request->next_due_date;
        $careSchedule->frequency_in_days    = $request->frequency_in_days;
        $careSchedule->save();
        // dd($careSchedule );

        /*=============Mail Send Code==============*/
        if(now()->toDateString() === $careSchedule->next_due_date)
        {
            Mail::to(auth()->user()->email)->send(new PlantCareReminderMail($plant, $careSchedule->type, $careSchedule->next_due_date));
        }
        /*=============Mail Send Code==============*/

        return redirect()->route('plant.show',$plant->id)->with('message','Care Schedule set successfully');
    }
}
