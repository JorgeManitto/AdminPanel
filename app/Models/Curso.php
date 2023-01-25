<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoria'
        ,'titulo'
        ,'disertante'
        ,'duracion'
        ,'fecha'
        ,'url_info'
        ,'url_meet'
        ,'valor_ars'
        ,'valor_usd'
        ,'estado'
        ,'temario'
    ];

    public function cursos()
    {
        $cursos = [
            '1' => 'Cursos online en vivo',
            '2' => 'Cursos asincrónicos',
            '3' => 'Webinars gratuitos',
            '4' => 'Cursos privados'
        ];

        return $cursos;
    }
}
