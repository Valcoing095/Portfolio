<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Profile extends Component
{
    public function downloadCV(){
        $filePath = public_path('files/' . "CV_Yeison.pdf");

        if (!file_exists($filePath)) {
            abort(404, 'File not found.');
        }
        return response()->download($filePath, "CV_Yeison.pdf");
    }

    public function render()
    {
        return view('livewire.profile.profile')->layout('components.layouts.app');;
    }
}
