<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskCreateForm extends Component
{
    public $title, $description;

    protected $rules = [
        'title' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $this->validate();

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        //$this->reset('title', 'description');
        session()->flash('task', 'Task creato correttamente!');
        return redirect('/tasks');
    }

    public function render()
    {
        return view('livewire.task-create-form');
    }
}
