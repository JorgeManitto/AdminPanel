<?php

namespace App\Http\Livewire;

use App\Models\Contacto as ModelsContacto;
use Livewire\Component;

class Contacto extends Component
{
    public $searchTitle;
    public $alertTitle;

    public $contacto;

    public $nombre_apellido;
    public $email;
    public $empresa;
    public $telefono;
    public $asunto;
    public $mensaje;

    public function render()
    {
        $contactos = ModelsContacto::query()
        ->when($this->searchTitle,function($query){
            $query->where('nombre_apellido','like','%'.$this->searchTitle.'%');
        })
        ->orderBy('id','desc')->paginate(10);

        return view('livewire.contacto',compact('contactos'));
    }
    public function show(ModelsContacto $registro)
    {
        $this->nombre_apellido  = $registro->nombre_apellido;
        $this->email            = $registro->email;
        $this->empresa          = $registro->empresa;
        $this->telefono         = $registro->telefono;
        $this->asunto           = $registro->asunto;
        $this->mensaje          = $registro->mensaje;

        $this->dispatchBrowserEvent('show');
    }

    public function delete_modal(ModelsContacto $contacto)
    {
        $this->contacto = $contacto;
        $this->dispatchBrowserEvent('delete');
    }
    public function delete(ModelsContacto $contacto)
    {
        ModelsContacto::destroy($this->contacto->id);
       $this->alertTitle = $contacto->nombre_apellido;
       $this->dispatchBrowserEvent('alertdelete');
       $this->dispatchBrowserEvent('close_delete');
       $this->render();
       $this->reset('contacto');
    }
}
