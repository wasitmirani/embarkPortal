<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function storeProject(Request $request){


       $project= Project::create([
            'groom_name'=>$request->name,
            'bride_name'=>$request->b_name,
            'date'=>$request->date,
            'time'=>$request->time,
            'cameras'=>$request->cameras,
            'location'=>$request->location,
            'city'=>$request->city,
            'state'=>$request->state,
            'zip_code'=>$request->zip_code,
            'hours'=>$request->hours,
            'attendees'=>$request->attendees,
            'equipments'=>json_encode($request->equipments),
            'lenses'=>json_encode($request->lenses),
            'description'=>$request->description,
            'user_id'=>$request->user_id,
        ]);

        return response()->json($project);
    }
}
