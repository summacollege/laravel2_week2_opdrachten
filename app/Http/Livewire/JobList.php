<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;


class JobList extends Component
{
    public $searchDesc;
    public $jobs;

    public function render()
    {
        $searchDesc = '%' . $this->searchDesc . '%';
        $this->jobs = Job::where('job_desc', 'like', $searchDesc)->get();
        return view('livewire.job-list');
    }

}
