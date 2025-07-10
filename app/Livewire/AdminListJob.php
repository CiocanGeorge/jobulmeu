<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination; // importă trait-ul pentru paginare
use App\Models\Job;

class AdminListJob extends Component
{
    use WithPagination; // adaugă trait-ul

    public function delete($id)
    {
        $job = Job::find($id);

        if ($job) {
            $job->delete();
            session()->flash('message', 'Job șters cu succes!');
            // Dacă vrei să rămâi pe pagina curentă după ștergere, poți folosi:
            $this->resetPage();
        } else {
            session()->flash('error', 'Job-ul nu a fost găsit.');
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        // preluăm joburile cu paginare, de exemplu 10 pe pagină
        $jobs = Job::orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.admin-list-job', [
            'jobs' => $jobs,
        ]);
    }
}
