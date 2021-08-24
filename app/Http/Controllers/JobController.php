<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        // $user = Auth::user();
        // $teamId = $user->currentTeam->id;
        // $team = Team::where('id', 3)->first();
        // $permissions = ['edit'];
        // $permission = $user->teamPermissions($team);
        // if(in_array($permission[0], $permissions))
        // {
        //     return view('jobs.index', ['jobs'=>$jobs]);
        // }
        // else
        // {
        //     return redirect('/dashboard');
        // }
        $permissions = ['edit', 'read'];
        if($this->authorized($permissions))
        {
            return view('jobs.index', ['jobs'=>$jobs]);
        }
        else
        {
            return redirect('/dashboard');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = ['edit'];
        if($this->authorized($permissions))
        {
            return view('jobs.create');
        }
        else
        {
            return redirect('/dashboard');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_desc' => 'required|max:50',
            'min_lvl' => 'required|numeric',
            'max_lvl' => 'required|numeric',
        ]);
        Job::create($request->all());
        return redirect()->route("jobs.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        $permissions = ['edit', 'read'];
        if($this->authorized($permissions))
        {
            return view("jobs.show", ["jobUitDeController"=>$job]);
        }
        else
        {
            return redirect('/dashboard');
        }        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $permissions = ['edit'];
        if($this->authorized($permissions))
        {
            return view("jobs.edit", ["jobUitDeController"=>$job]);
        }
        else
        {
            return redirect('/dashboard');
        } 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        // dd($request);
        $request->validate([
            'job_desc' => 'required|max:50',
            'min_lvl' => 'required|numeric',
            'max_lvl' => 'required|numeric',
        ]);
        $job->update($request->all());
        return redirect()->route("jobs.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        // dd($job);
        $job->delete();
        return redirect()->route("jobs.index");
    }

    public function authorized(Array $permissions)
    {
        $user = Auth::user();
        $teamId = $user->currentTeam->id;
        $team = Team::where('id', 3)->first();
        $permission = $user->teamPermissions($team);
        $owns = $user->ownsTeam($team);
        if(in_array($permission[0], $permissions) or ($owns))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
}
