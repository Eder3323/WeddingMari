<?php

namespace App\Http\Livewire;

use App\Models\Invitado;
use Livewire\Component;

class Table extends Component
{
    public $invitados;
    public $count_all;
    public function mount()
    {
        $this->invitados = Invitado::all();
        $this->CountAll();
    }

    public function CountAll(){
        $this->count_all = 0;
        foreach ($this->invitados as $invitado) {
            $this->count_all += $invitado->num_personas;
        }
    }

    public function render()
    {
        return view('livewire.table')
            ->extends('layouts.app')
            ->section('content');
    }
}
