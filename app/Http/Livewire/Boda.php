<?php

namespace App\Http\Livewire;

use App\Models\Invitado;
use Livewire\Component;

class Boda extends Component
{
    public $message;
    public $message_succes;
    public $name;
    public $people_confirmed=1;
    public $people_asist;

   public function updatedName(){
        $this->message_succes='';
    }
    
    public function render()
    {
        return view('livewire.boda')
            ->extends('layouts.app')
        ->section('content');
    }
    public function SaveData(){
         $this->validate([
            'name'=>'required|max:100',
            'people_confirmed'=>'required'
        ]);

        Invitado::create([
            'nombre'=>$this->name,
            'num_personas'=>$this->people_confirmed,
            'comentarios'=>$this->people_asist
        ]);
        $this->reset(['name', 'people_confirmed', 'people_asist']);
        $this->message_succes='Registro Guardado !!. Gracias';
        $this->dispatchBrowserEvent('showSuccessMessage', ['message' => '¡Guardado!']);

    }
}
