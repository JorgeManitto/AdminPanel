<?php

namespace App\Http\Livewire;

use App\Models\Registro as ModelsRegistro;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Registro extends Component
{
    use WithPagination;
    public $alertTitle;

    public $registro;
    public $searchTitle;

    public $nombre;
    public $apellido;
    public $pais;
    public $curso;
    public $empresa;
    public $email;
    public $telefono;
    public $mensaje;


    public function render()
    {
        $registros = ModelsRegistro::query()
        ->when($this->searchTitle,function($query){
            $query->where(DB::raw("CONCAT(nombre, ' ', apellido)"), 'like', '%'.$this->searchTitle.'%');
        })
        ->orderBy('id','desc')->paginate(10)->withPath('/admin/registro');


        $cursos = [
            '1' => 'Cursos online en vivo',
            '2' => 'Cursos asincrónicos',
            '3' => 'Webinars gratuitos',
            '4' => 'Cursos privados'
        ];

        return view('livewire.registro',compact('registros','cursos'));
    }
    public function show(ModelsRegistro $registro)
    {
        $this->nombre   = $registro->nombre;
        $this->apellido = $registro->apellido;
        $this->pais     = $registro->pais;
        $this->empresa  = $registro->empresa;
        $this->email    = $registro->email;
        $this->telefono = $registro->telefono;
        $this->mensaje  = $registro->mensaje;

        $cursos = [
            '1' => 'Cursos online en vivo',
            '2' => 'Cursos asincrónicos',
            '3' => 'Webinars gratuitos',
            '4' => 'Cursos privados'
        ];
        foreach ($cursos as $key => $curso) {
            if($key == $registro->curso){
                $this->curso = $curso;
            }
        }

        $this->dispatchBrowserEvent('show');
    }

    public function delete_modal(ModelsRegistro $registro)
    {
        $this->registro = $registro;
        $this->dispatchBrowserEvent('delete');
    }
    public function delete(ModelsRegistro $registro)
    {
        ModelsRegistro::destroy($this->registro->id);
       $this->alertTitle = $registro->nombre;
       $this->dispatchBrowserEvent('alertdelete');
       $this->dispatchBrowserEvent('close_delete');
       $this->render();
       $this->reset('registro');
    }
}
