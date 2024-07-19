<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//libreria para base de datos
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    // vista de promocion

    public function Vista()
    {
        return view ('promocion');
    }

    // vista de contactos

    public function VistaContac()
    {
        return view ('contactos');
    }

    // vista de catalogo

    public function VistaCata()
    {
        return view ('catalogo');
    }

    // vista de login

    public function VistaLogin()
    {
        return view ('Login');
    }

    // vista de prueba-carrito

    public function Vista4()
    {
        return view ('Vista4');
    }
    //Base de datos
    public function mostrar1()
    {
        $hamburguesas = DB::table('hamburguesas')->get();
        return view('muestra1',['hamburguesas'=>$hamburguesas]);
    }

    public function mostrar2()
    {
       /*se refiere a la tabla de la base de datos*/
        $complementos = DB::table('complementos')->get();
        /*se refiere a la vista para la tabla*/
        return view('muestra2',['complementos'=>$complementos]);
    }

    public function clientes()
    {
        $clientes = DB::table('clientes')->get();
        return view('clientes',['clientes'=>$clientes]);
    }

    public function VistaCaru()
    {
        return view ('carusel');
    }

    public function consulta1()
    {
        $hamburguesas = DB::select('select * from hamburguesas where categoria="A LA PARRILLA"');
        return view('consulta1',['hamburguesas'=>$hamburguesas]);
    }

    public function consulta2()
    {
        $hamburguesas = DB::select('select * from hamburguesas where categoria="POLLO"');
        return view('consulta2',['hamburguesas'=>$hamburguesas]);
    }

    public function consulta3()
    {
        $complementos = DB::select('select * from complementos where categoria="BEBIDAS"');
        return view('consulta3',['complementos'=>$complementos]);
    }

    public function Logueo(Request $request){
        $email=$request->email;
        $password=$request->password;

        if($email == 'admin'){
            return redirect('Admin');
        }
        else{
            return redirect('rutaLogin');
        }
    }

    public function preguntas(){
        return view ('preguntas');
    }
}
