<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Categoria;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\CategoriaFormRequest;
use DB;
class CategoriaController extends Controller
{
 
	public function __construct(){}


	public function index(Request $request)
	{
	if ($request)
	{
      $query=trim($request->get('searchText'));
      $categorias=DB::table('categoria')->where('nombre','LIKE','%'.$query.'%')->where('condicion','=','1') ->orderBy('idcategoria','desc')->paginate(7);
      return view('almacen.categoria.index',["categoria"=>$categorias,"searchText"=>$query]);
	}
	}

	
	public function create()
	{
	return view("almacen.categoria.create");

}

public function store(CategoriaFormRequest $request)
{
$categoria=new Categoria;
$categoria->nombre=$request->get('nombre');
$categoria->descripcion=$request->get('descripcion');
$categoria->condicion='1';
$categoria->save();
return redirect::to("almacen/categoria");
}
public function show($id)
{
	return view("almacen.categoria.show",["categoria"=>categoria::findOrFails($id)]);
}

public function edit($id)
{
	return view("almacen.categoria.edit",["categoria"=>categoria::findOrFails($id)]);
}

public function update(CategoriaFormRequest $request,$id)
{
$categoria=Categoria::findOrFails($id);
$categoria->nombre=$request->get('nombre');
$categoria->descripcion=$request->get('descripcion');
$categoria->update();
return redirect::to('almacen/categoria');

}

public function destroy($id)
{
$categoria=Categoria::findOrFails($id);
$categoria->condicion='0';
$categoria->update();
return Redirect::to('almacen/categoria');
}


}

