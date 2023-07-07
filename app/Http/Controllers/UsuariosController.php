<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //
    public function adding(Request $request)
    {
        $items=new Usuarios();
        $items->Nombres=$request->Nombres;
        $items->Apellidos=$request->Apellidos;
        $items->TipoIdentificacion=$request->TipoIdentificacion;
        $items->NumIdentificacion=$request->NumIdentificacion;
        $items->Telefono=$request->Telefono;
        $items->Mail=$request->Mail;
        $items->Profesion=$request->Profesion;
        $items->Rol_id=$request->Rol_id;
        $items->save();
        return response()->json('Se adiciono Usuario');
    }

    public function updating(Request $request)
    {
        $items=Usuarios::findOrFail($request->id);
        $items->Nombres=$request->Nombres;
        $items->Apellidos=$request->Apellidos;
        $items->TipoIdentificacion=$request->TipoIdentificacion;
        $items->NumIdentificacion=$request->NumIdentificacion;
        $items->Telefono=$request->Telefono;
        $items->Mail=$request->Mail;
        $items->Profesion=$request->Profesion;
        $items->Rol_id=$request->Rol_id;
        $items->update();
        return response()->json('Se actualizo Usuario');
    }

    public function deleting(Request $request)
    {
        $items=Usuarios::findOrFail($request->id)->delete();
        return response()->json('Se borro Usuario');
    }

    public function reading()
    {
        $items=Usuarios::all();
        return response()->json($items);
    }
}
