<?php

namespace App\Http\Livewire;
use App\Models\Tbol001_boletas;
use App\Models\Tgen002_parroquia;
use App\Models\Tgen001_predeterminado;
use Livewire\Component;

class BoletaVial extends Component
{
    public $selectedOption;
    public $parroquias ;
    public $motivos;
    public $message;
    public function mount()
    {
        $this->parroquias = Tgen002_parroquia::orderBy('nombre')->get();
        $this->motivos = Tgen001_predeterminado::where('tipo', 'motivos')->orderBy('texto')->get();
        
        $this->message = '';
    }
    public function render()
    {
        return view('livewire.boleta-vial');
    }

    
}
