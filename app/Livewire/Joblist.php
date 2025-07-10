<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;

class Joblist extends Component
{

    public $jobs = [];

    public function mount()
    {
        $this->jobs = Job::all();
    }

    public function render()
    {
        return view('livewire.joblist');
    }
}
