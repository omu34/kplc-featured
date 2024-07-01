<?php

// namespace App\Livewire;

// use Livewire\Component;

// use App\Models\Navbar;

// class NavbarSelector extends Component
// {
//     public $selectedNavbar = 'main'; // Default selection
//     public $headers;

//     public function mount()
//     {
//         $this->loadNavbarheaders();
//     }

//     public function updatedSelectedNavbar()
//     {
//         $this->loadNavbarheaders();
//     }

//     public function loadNavbarheaders()
//     {
//         $this->headers = Navbar::where('type', $this->selectedNavbar)->orderBy('order')->get();


//     }

//     public function render()
//     {
//         return view('livewire.navbar-selector', [
//             'headers' => $this->headers,
//             'selectedNavbar' => $this->selectedNavbar
//         ]);

//     }



// }
namespace App\Livewire;

use Livewire\Component;
use App\Models\Navbar;
use Illuminate\Support\Facades\Log;

class NavbarSelector extends Component
{
    public $selectedNavbar = 'main'; // Default selection
    public $headers = [];

    public function mount()
    {
        $this->loadNavbarItems();
    }

    public function updatedSelectedNavbar()
    {
        $this->loadNavbarItems();
    }

    public function loadNavbarItems()
    {
        $this->headers = Navbar::where('type', $this->selectedNavbar)->orderBy('order')->get();

        Log::info($this->headers);
    }

    public function render()
    {
        return view('livewire.navbar-selector', [
            'headers' => $this->headers,
            'selectedNavbar' => $this->selectedNavbar
        ]);
    }
}


