<?php

namespace App\Livewire;

use App\Models\Footers;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class FooterSelector extends Component
{
    public $selectedFooters = ['quickLinks', 'columns', 'currency', 'social'];
    public $footers = [];

    public function mount()
    {
        $this->loadFooterItems();
    }

    public function updatedSelectedFooter()
    {
        $this->loadFooterItems();
    }

    public function loadFooterItems()
    {
        $this->footers = collect();

        foreach ($this->selectedFooters as $type) {
            $footerItems = Footers::where('type', $type)->orderBy('order')->get();
            $this->footers = $this->footers->merge($footerItems);
        }

        Log::info('Footer items loaded:', $this->footers->toArray());
    }

    public function render()
    {
        return view('livewire.footer-selector', [
            'footers' => $this->footers,
            'selectedFooters' => $this->selectedFooters
        ]);
    }
}
