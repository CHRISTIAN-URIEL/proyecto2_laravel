<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function AgregarInter(){
        return view ('agregar');
    }


    public function AgregarInfo(Request $request){
        $registro=new producto;
        $foto =$request->file('foto');
        $nom=time().'.'.$foto->getClientOriginalExtension();
        $destino=public_path('imagenes');
        $request->foto->move($destino,$nom);
        
        $registro->fotografia= $nom;
        $registro->nombre=$request->Nombre;
        $registro->codigo=$request->Codigo;
        $registro->precio=$request->Precio;
        $registro->cantidad=$request->Cantidad;
        $registro->descripcion=$request->Descripcion;

        $registro->save();
        
        return redirect()->route('rutaAgregarInter');
    }


    public function MostrarBD(){
        $productos =DB::table('productos')->get();
        return view ('mostrar',['productos'=>$productos]);
    }

    public function detalle($id){
        $productos = producto::find($id);
        return view('detalle',['productos'=>$productos]);
    }

    public function carrito(){
        return view('carrito');
    }
    
    public function AgregarCarrito($id){
        $productos = producto::find($id);
        $carrito =session()->get('carrito');
        if (!$carrito) {
            $carrito = [
                $id => [
                    "Nombre"=>$productos->nombre,
                    "Cantidad"=>1,
                    "Precio"=>$productos->precio
                ]
            ];
            session()->put('carrito',$carrito);
            return redirect()->back()->with('success','producto agregado al carrito');
        }
        if (isset($carrito[$id])) {
            $carrito[$id]['Cantidad']++;
            session()->put('carrito',$carrito);
            return redirect()->back()->with('success','producto agregado al carrito');
        }
        $carrito[$id]=[
            "Nombre"=>$productos->nombre,
            "Cantidad"=>1,
            "Precio"=>$productos->precio
        ];
        session()->put('carrito',$carrito);
        return redirect()->back()->with('success','Producto agregado al carrito');
    }
}
