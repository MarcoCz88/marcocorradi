<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;

class CreateProject extends Component
{
    public $titleP;
    public $bodyP;
    public $github_link;

    protected $rules = [
        'titleP' => 'required|min:6',
        'bodyP' => 'required|min:8',
    ];
    
    protected $messages = [
        'required'=>'Il campo :attribute è richiesto',
        'min'=>'Il campo :attribute è troppo corto',
    ];

    public function store() {
        Project::create([
            'titleP'=>$this->titleP,
            'bodyP'=>$this->bodyP,
            'github_link'=>$this->github_link,
        ]);
        session()->flash('message', 'Progetto inserito con successo');
        $this->cleanForm();
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
     public function cleanForm(){
        $this->titleP ='';
        $this->bodyP ='';
        $this->github_link ='';
     }

    public function render()
    {
        return view('livewire.create-project');
    }
}
