<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Cursos extends Component
{
    use WithPagination;
    use WithFileUploads;


    public $searchTitle;
    public $searchStatus;

    public $alertTitle;

    public $curso;

    public $titulo;
    public $categoria;
    public $duracion;
    public $url_info;
    public $valor_ars;
    public $valor_usd;
    public $estado;
    public $temario;
    public $disertante;

    protected $listeners = ['render' => 'render'];

    public function updatingSearchTitle()
    {
        $this->resetPage();
    }
    public function updatingSearchStatus()
    {
        $this->resetPage();
    }

    public function render()
    {
        $cursos = Curso::query()
        ->when($this->searchTitle,function($query){
            $query->where('titulo','like','%'.$this->searchTitle.'%');
        })
        ->when($this->searchStatus,function($query){
            $query->where('estado',$this->searchStatus);
        })
        ->orderBy('id','desc')->paginate(10)->withPath('/admin/cursos');
        return view('livewire.cursos',compact('cursos'));
    }

    public function create()
    {
        $this->reset('titulo','categoria','duracion','url_info','valor_ars','valor_usd','estado','temario','disertante');
        $this->dispatchBrowserEvent('create');
    }

    public function save()
    {
        $this->validate([
            'titulo'    => 'required', // 1MB Max
            'url_info'  => 'max:100024',
        ]);

        $params = [
            'categoria'     => $this->categoria ?? 1,
            'titulo'        => $this->titulo,
            'duracion'      => $this->duracion,
            'valor_ars'     => $this->valor_ars,
            'valor_usd'     => $this->valor_usd,
            'estado'        => $this->estado ?? 1,
            'temario'       => $this->temario,
            'disertante'    => $this->disertante,
        ];

        if($this->url_info){
            $this->url_info->storeAs('public/pdf', $this->url_info->getClientOriginalName());
            $params['url_info'] = 'public/pdf/'.$this->url_info->getClientOriginalName();
        }

        $cursos = Curso::create($params);
        $this->dispatchBrowserEvent('close_create');
        $this->dispatchBrowserEvent('alertcreate');
        $this->alertTitle = $this->titulo;
        $this->reset('titulo','categoria','duracion','url_info','valor_ars','valor_usd','estado','temario','disertante');


    }

    public function edit(Curso $curso)
    {
        $this->curso = $curso;

        $this->titulo       = $curso->titulo;
        $this->categoria    = $curso->categoria;
        $this->duracion     = $curso->duracion;
        $this->url_info     = $curso->url_info;
        $this->valor_ars    = $curso->valor_ars;
        $this->valor_usd    = $curso->valor_usd;
        $this->estado       = $curso->estado;
        $this->temario      = $curso->temario;
        $this->disertante   = $curso->disertante;


        $this->dispatchBrowserEvent('edit');
    }
    public function delete_modal(Curso $curso)
    {
        $this->curso = $curso;
        $this->dispatchBrowserEvent('delete');
    }
    public function delete(Curso $curso)
    {
       Curso::destroy($this->curso->id);
       $this->alertTitle = $curso->titulo;
       $this->dispatchBrowserEvent('alertdelete');
       $this->dispatchBrowserEvent('close_delete');
       $this->render();
       $this->reset('curso');
    }
    public function update()
    {

        $params = [
            'categoria' => $this->categoria,
            'titulo'    => $this->titulo,
            'duracion'  => $this->duracion,
            'valor_ars' => $this->valor_ars,
            'valor_usd' => $this->valor_usd,
            'estado'    => $this->estado,
            'temario'   => $this->temario,
            'disertante'   => $this->disertante,
        ];

        if($this->url_info != $this->curso->url_info){
            $this->url_info->storeAs('public/pdf', $this->url_info->getClientOriginalName());
            $params['url_info'] = 'public/pdf/'.$this->url_info->getClientOriginalName();
        }

        Curso::where('id', $this->curso->id)
        ->update($params);

        $this->dispatchBrowserEvent('close_edit');

        $this->alertTitle = $this->titulo;
        $this->dispatchBrowserEvent('alertupdate');
        $this->reset('titulo','categoria','duracion','url_info','valor_ars','valor_usd','estado','temario','disertante');
        $this->resetPage();
    }
    public function alertcreate()
    {
        $this->dispatchBrowserEvent('alertcreate');
    }

}
