<?php

// app/Http/Controllers/TurismoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurismoController extends Controller
{
    public function index()
    {
        return view('turismo.index'); // Puedes cambiar 'turismo.index' por el nombre de tu vista
    }

    // Otros métodos del controlador...
}
