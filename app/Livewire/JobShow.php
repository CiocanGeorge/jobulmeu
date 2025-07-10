<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Job;

class JobShow extends Component
{
    public $id;
    public $job = [
        'title' => '',
        'type' => '',
        'location' => '',
        'description' => '',
        'slug' => '',
        'expirationDate' => '',
    ];

    public function mount()
    {
        if ($this->id) {
            $this->job = Job::find($this->id);
        } else {
            return redirect()->to(route('home'));
        }
    }

    public function render()
    {
        return view('livewire.job-show')->layout('layouts.guest');
    }
}
