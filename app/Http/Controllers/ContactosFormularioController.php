<?php

namespace App\Http\Controllers;
use App\Models\contactosFormulario;
use Illuminate\Http\Request;

class ContactosFormularioController extends Controller
{
    //
    public function adding(Request $request)
    {
        $items=new ContactosFormulario();
        $items->Nombres=$request->Nombres;
        $items->Apellidos=$request->Apellidos;
        $items->Nacionalidad=$request->Nacionalidad;
        $items->Comentarios=$request->Comentarios;
        $items->save();
        return response()->json('Se adiciono Contacto');
    }
}
