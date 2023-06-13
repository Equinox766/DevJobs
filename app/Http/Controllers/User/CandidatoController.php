<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Vacante;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function index(Vacante $vacante)
    {
        return view('candidatos.index', compact('vacante'));
    }
}
