<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Photos extends Component
{
    use WithFileUploads;

    public $photos = [];


    public function updatedPhotos()
    {
        logger()->info('Updated Photos:', ['photos' => $this->photos]);

        $this->validate([
            'photos.*' => 'image|max:1024',
        ]);
    }


    public function save()
    {
        $this->validate([
            'photos.*' => 'image|max:1024',
        ]);

        foreach ($this->photos as $photo) {
            $photo->store('photos', 'public'); // Store photos in the 'public/photos' directory
        }

        $this->emit('showSuccessMessage');
    }

    public function render()
    {
        return view('livewire.photos')
            ->extends('layouts.app')
            ->section('content');
    }
}
