<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
    }

    public function formacion()
    {
        $cursos_1 = Curso::where('categoria',1)->get();
        $cursos_2 = Curso::where('categoria',2)->get();
        $cursos_3 = Curso::where('categoria',3)->get();

        return view('front.formacion',compact('cursos_1','cursos_2','cursos_3'));
    }
    public function formulario($id)
    {
        $curso = Curso::find($id);

        return view('front.formulario',compact('curso'));
    }

    public function post_formulario(Request $request)
    {

        if($request->categoria == 1 || $request->categoria == 2 ){

            $to = $request->email;
            $subject = $request->titulo;

            $url_info= str_replace('public/', '', $request->url_info);
            $url_info = asset('storage/'.$url_info);

            $curso = ['titulo' => $request->titulo,'url_info' => $url_info];

            Mail::send('emails.email-cursos', $curso, function ($message) use ($to, $subject) {
                $message->to($to)->subject($subject);
            });

            $this->registrado($request);
            return redirect()->back()->with('status', 'Muchas gracias por su SOLICITUD. A la brevedad será contactado por ELEVAR');

        }else if($request->categoria == 3){
            $email = $this->webinars($request->titulo);

            $to = $request->email;
            $subject = $request->titulo;

            $url_info = "";

            $curso = ['titulo' => $request->titulo,'url_info' => $url_info];

            Mail::send($email, $curso, function ($message) use ($to, $subject) {
                $message->to($to)->subject($subject);
            });
            $this->registrado($request);
            return redirect()->back()->with('status', 'Muchas gracias por su SOLICITUD. A la brevedad será contactado por ELEVAR');
        }else if($request->categoria == 4){

            $to = 'lauradelissi@elevar.com.ar';
            $subject = $request->titulo;
            $curso = ['titulo' => $request->titulo,'mensaje' => $request->message];

            Mail::send('emails.cursos-privados', $curso, function ($message) use ($to, $subject) {
                $message->to($to)->subject($subject);
            });
            return redirect()->back()->with('status', 'Muchas gracias por su SOLICITUD. A la brevedad será contactado por ELEVAR');
        }

    }

    public function contacto(Request $request)
    {
        $to = 'lauradelissi@elevar.com.ar';
        $subject = $request->asunto.' - '. $request->name;
        $curso = ['titulo' => $request->asunto,'mensaje' => $request->message, 'nombre' => $request->name];

        Mail::send('emails.contacto', $curso, function ($message) use ($to, $subject) {
            $message->to($to)->subject($subject);
        });
        return redirect('/#con')->with('status', 'Muchas gracias por su SOLICITUD. A la brevedad será contactado por ELEVAR');
    }

    public function registrado($request)
    {
        $registro = new Registro;

        $registro->nombre   = $request->name;
        $registro->apellido = $request->apellido;
        $registro->pais     = $request->pais;
        $registro->curso    = $request->titulo;
        $registro->empresa  = $request->empresa;
        $registro->email    = $request->email;
        $registro->telefono = $request->phone;
        $registro->mensaje  = $request->message;

        $registro->save();

        $to = 'lauradelissi@elevar.com.ar';
        $subject = $request->name . ' ' . $request->apellido .' se ha registrado.';
        $curso = ['nombre' => $request->name . ' ' . $request->apellido,'titulo' => $request->titulo];

        Mail::send('emails.registrar-email', $curso, function ($message) use ($to, $subject) {
            $message->to($to)->subject($subject);
        });
    }
    public function webinars($titulo)
    {
        switch ($titulo) {
            case 'W-01: MATERIALES DE CONTROL DE CALIDAD INTERNOS':
               return 'emails.webinars.w01';
            break;

            case 'W-02: RECOMENDACIONES PARA DESARROLLAR EXITOSAMENTE AUDITORIAS REMOTAS':
                return 'emails.webinars.w02';
            break;
            case 'W-03: ¿CÓMO IMPLEMENTAR AUDITORIAS HORIZONTALES Y VERTICALES?':
                return 'emails.webinars.w03';
            break;

            case 'W-04: ANÁLISIS DE EFECTO MATRIZ EN CROMATOGRAFÍA':
                return 'emails.webinars.w04';
            break;

            case 'W-05: USO EFECTIVO DE SANITIZANTES EN LABORATORIOS DE MCIROBIOLOGÍA':
                return 'emails.webinars.w05';
            break;

            case 'W-06: ¿CÓMO AUDITAR UN SGC QUE POSEE POCA DOCUMENTACIÓN?':
                return 'emails.webinars.w06';
            break;

            case 'W-07: GUÍA PARA ACREDITAR LABORATORIOS DE ENSAYOS QUÍMICOS Y MICROBIOLÓGICOS':
                return 'emails.webinars.w07';
            break;

            case 'W-08: INTERPRETACIÓN Y APLICACIÓN DE INFORMES DE CALIBRACIÓN SOBRE EQUIPOS MICROBIOLÓGICOS':
                return 'emails.webinars.w08';
            break;

            case 'W-09: ¿CÓMO CONTROLAR EL VENCIMIENTO DE REACTIVOS EN EL LABORATORIO?':
                return 'emails.webinars.w09';
            break;

            default:
                return 'email.webinars.w-01';
            break;
        }
    }
    public function download($file){

        $file_path = public_path('storage/pdf/'.$file);

        return response()->download( $file_path);
    }
}
