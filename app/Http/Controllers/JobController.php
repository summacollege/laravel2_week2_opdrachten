<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->name == 'student2')
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
        $jobs = Job::all();
        if(Auth::user()->name == 'student2')
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
        if(Auth::user()->name == 'student2')
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
        if(Auth::user()->name == 'student2')
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
}
