<?php

// app/Http/Livewire/SitioTuristico.php

// app/Http/Livewire/Turismo/SitioTuristico.php

namespace App\Http\Livewire\Turismo;

use Livewire\Component;
use App\Models\SitioTuristico as SitioTuristicoModel;

class SitioTuristico extends Component
{
    public $sitiosTuristicos;

    public function render()
    {
        $this->sitiosTuristicos = SitioTuristicoModel::all();

        return view('livewire.turismo.sitio-turistico');
    }
}

