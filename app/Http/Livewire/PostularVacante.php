<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    public $cv;
    public $vacante;
    public $user;
    protected $rules = [
      'cv' => 'required|mimes:pdf',
    ];

    use WithFileUploads;

    public function mount(Vacante $vacante)
    {
        $this->user = auth()->user()->id;
        $this->vacante = $vacante;
    }
    public function postularme()
    {
        $datos = $this->validate();
        //Almacenar cv en el disco duro
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', '', $cv);
        //Crear el candidato
        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
            'cv' => $datos['cv'],
        ]);
        //crear notificación y enviar el email

        //Mostrar al usuario un mensaje de Ok
        session()->flash('mensaje', 'Se envió correctamente tu información, mucha suerte');
        //Redireccionar al usuario
        return redirect()->back();

    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
