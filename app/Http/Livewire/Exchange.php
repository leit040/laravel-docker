<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Exchange extends Component
{
    public $currency;
    public $summ_first = 1;
    public $summ_second = 1;
    public $curr_first = 1;
    public $curr_second = 1;

    protected $rules = [
        'summ_first' => 'required|numeric',
        'summ_second' => 'required|numeric',
        'curr_first' => 'required',
        'curr_second' => 'required'

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        if ($propertyName == 'summ_first' || $propertyName == 'curr_second') {
            $this->summ_second = $this->summ_first / $this->curr_first * $this->curr_second;
        }
        if ($propertyName == 'summ_second' || $propertyName == 'curr_first') {
            $this->summ_first = $this->summ_second / $this->curr_second * $this->curr_first;
        }
    }

    public function mount()
    {
        $response = Http::get("http://api.exchangeratesapi.io/v1/latest?access_key=008ed579b6c4f39d8b1c77161e9bdbb1");
        $currency = $response->json();
        $this->currency = $currency['rates'];

    }

    public function render()
    {
        return view('livewire.exchange');
    }
}
