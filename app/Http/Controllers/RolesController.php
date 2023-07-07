<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function adding(Request $request)
    {
        $items=new Roles();
        $items->Rol=$request->Rol;
        $items->save();
        return response()->json('Se adiciono Rol');
    }

    public function updating(Request $request)
    {
        $items=Roles::findOrFail($request->id);
        $items->Rol=$request->Rol;
        $items->update();
        return response()->json('Se actualizo Rol');
    }

    public function deleting(Request $request)
    {
        $items=Roles::findOrFail($request->id)->delete();
        return response()->json('Se borro Rol');
    }

    public function reading()
    {
        $items=Roles::all();
        return response()->json($items);
    }
}

