<?php

namespace App\Http\Livewire\Quotes;

use App\Models\Quote;
use App\Models\Service;
use Livewire\Component;
use TCG\Voyager\Models\Category;

class Motion extends Component
{
    public $name;
    public $email;
    public $phone;
    public $project =[];
    public $company;
    public $source;
    public $budget;
    public $additional;
    public $currencies = ['USD','EUR','DZD'];
    public $selectedCurrency = 'USD';

    public function SwitchCurrency($currency)
    {
        $this->selectedCurrency = $currency;
    }
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'project' => 'required|array',
            'company' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:255',
            'budget' => 'required|string|max:255',
            'additional' => 'nullable|string|max:255',
        ];
    }
    public function SaveQuote()
    {
        $this->validate();
        $service = Service::where('slug','motion')->firstOrFail();
        Quote::create([
            'name' => $this->name,
            'category_id' => $service->id,
            'email' => $this->email,
            'phone' => $this->phone,
            'project' => json_encode($this->project,true),
            'company' => $this->company,
            'source' =>  $this->source,
            'budget' => $this->budget,
            'additional' => $this->additional,
            'currency' => $this->selectedCurrency,
        ]);
        $this->resetProperties();
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('saved');
    }
    private function resetProperties()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->project = [];
        $this->company = '';
        $this->source = '';
        $this->budget = '';
        $this->additional = '';
    }
    public function render()
    {
        return view('livewire.quotes.motion');
    }
}
