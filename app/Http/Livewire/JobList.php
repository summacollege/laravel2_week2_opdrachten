<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;


class JobList extends Component
{
    public $jobs;

    public function render()
    {
        $this->jobs = Job::all();
        return view('livewire.job-list');
    }
}
