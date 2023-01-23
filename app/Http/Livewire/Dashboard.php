<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\Registro;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $registros = Registro::count();
        $cursos_totales = Curso::count();

        $registros_totales = DB::table('registros')
        ->select('curso', DB::raw('COUNT(*) as total'), DB::raw("(COUNT(*)/{$registros} * 100) as percent"))
        ->groupBy('curso')
        ->orderBy('total', 'desc')
        ->paginate(4);

        $ultimos_registros = Registro::orderBy('id','desc')->paginate(7);

        $labels = "";
        $series = "";

        foreach($registros_totales as $key => $registro){
            $labels .= "'".$registro->curso ."',";
            $series .= intval($registro->percent).",";
        }

        $labels = substr($labels, 0, -1);
        $series = substr($series, 0, -1);

        return view('livewire.dashboard',compact('registros','ultimos_registros','registros_totales','cursos_totales','labels','series'));
    }
}
