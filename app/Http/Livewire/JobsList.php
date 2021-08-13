<?php

namespace App\Http\Livewire;

use Livewire\Component;
use app\Http\Controllers\JobController;

class JobsList extends Component
{
    public function render()
    {
        $jobs = JobController::index();
        dd($jobs);
        return view('livewire.jobs-list',['jobs'=>$jobs]);
    }
}
