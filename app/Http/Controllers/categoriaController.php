<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use Illuminate\Http\Request;

class categoriaController extends Controller
{
    
    //METODO GET CATEGORIA
    public function getCategoria(){
        //devuelve todos las categorias y marca 200 de correcto
        return response()->json(categoria::all(),200);
    }
    //METODO GET CATEGORIA X ID
    public function getCategoriaxid($id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado',404]);
        }

        return response()->json($categoria::find($id),200);

    }

    //METODO POST CATEGORIA
    public function insertCategoria(Request $request){
        $categoria =categoria::create($request->all());
        return response($categoria,200);
    }


    //METODO PUT CATEGORIA
    public function updateCategoria(Request $request ,$id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado',404]);
        }
        //update del registro que se encontro
        $categoria->update($request->all());
        return response($categoria,200);

    }


    //METODO DELETE CATEGORIA
    public function deleteCategoria(Request $request ,$id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado',404]);
        }
        $categoria->delete();
        return response()->json(['Mensaje'=>'Registro eliminado',200]);

    }

}
