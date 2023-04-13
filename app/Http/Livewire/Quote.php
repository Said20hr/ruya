<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\User;
use App\Notifications\quoteNotification;
use Livewire\Component;

class Quote extends Component
{
    public $name;
    public $email;
    public $phone;
    public $project =[];
    public $company;
    public $source;
    public $budget;
    public $additional;
    public $type;
    public $currencies = ['USD','EUR','DZD'];
    public $Projects = [];
    public $selectedCurrency = 'USD';

    public function mount($type)
    {
        $this->type = $type;
        switch ($type)
        {
            case 'dev': $this->Projects = ['Website','Web Application','Saas Project','Mobile Application']; break;
            case 'motion': $this->Projects = ['2d motion','motion explainer','Video editing']; break;
            case 'animation': $this->Projects = ['3d product','3d rendering']; break;
        }

    }

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
        $service = Service::where('slug',$this->type)->firstOrFail();
        $quote =  \App\Models\Quote::create([
            'name' => $this->name,
            'service_id' => $service->id,
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
        $users = User::where('role_id',1)->get();
        foreach ($users as $user)
        {
            $user->notify(new quoteNotification($quote));
        }
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
        return view('livewire.quote');
    }
}
