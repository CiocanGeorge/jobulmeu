<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;

class CreateJob extends Component
{

    public $id;
    public $title;
    public $type;
    public $location;
    public $description;
    public $slug;
    public $expirationDate;
    public $status;

    public $jobTypes = ['Full-Time', 'Part-Time', 'Freelance', 'Internship', 'Temporary'];

    protected $queryString = ['id'];

    public function mount()
    {
        if ($this->id) {
            $job = Job::find($this->id);
            if ($job) {
                $this->title = $job->title;
                $this->type = $job->type;
                $this->location = $job->location;
                $this->description = $job->description;
                $this->slug = $job->slug;
                $this->expirationDate = $job->expirationDate;
                $this->status = $job->status;
            } else {
                session()->flash('error', 'Job nu a fost găsit.');
                return redirect('/create-job');
            }
        }
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|min:3',
            'type' => 'required',
            'location' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'expirationDate' => 'required|date|after:today',
            'status' => 'required',
        ]);

        if ($this->id) {
            // update job
            $job = Job::find($this->id);
            $job->update([
                'status' => $this->status,
                'title' => $this->title,
                'type' => $this->type,
                'location' => $this->location,
                'description' => $this->description,
                'slug' => $this->slug,
                'expirationDate' => $this->expirationDate,
            ]);
            session()->flash('message', 'Job actualizat cu succes!');
        } else {
            // creare job nou
            Job::create([
                'status' => $this->status,
                'title' => $this->title,
                'type' => $this->type,
                'location' => $this->location,
                'description' => $this->description,
                'slug' => $this->slug,
                'expirationDate' => $this->expirationDate,
            ]);
            session()->flash('message', 'Job creat cu succes!');
        }

        // Resetare form după salvare
        $this->reset([
            'title',
            'type',
            'location',
            'description',
            'slug',
            'expirationDate',
            'status',
        ]);
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.create-job')->layout('layouts.app');
    }
}
