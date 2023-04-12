<?php

namespace App\Http\Livewire\Quotes;

use Livewire\Component;

class Dev extends Component
{
    public $name;
    public $email;
    public $phone;
    public $project;
    public $company;
    public $source;
    public $budget;
    public $additional;



    public function SaveQuote()
    {

        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        return view('livewire.quotes.dev');
    }
}
