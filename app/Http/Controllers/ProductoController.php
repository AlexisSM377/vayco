<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        $categorias = Categoria::all();
        $marcas = Marca::all();

        return view('producto.crear', [
            'proveedores' => $proveedores,
            'categorias' => $categorias,
            'marcas' => $marcas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //valide los atributos de mi formulario para registar nuevos productos
        //define las regalas que debe de tener cada atribito
        $validated = $request->validate([
            'nombre' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descripcion' => 'required',
            'precio' => 'required',
            'iva' => 'required',
            'neto' => 'required',
            'existencia' => 'required',
            'proveedor' => 'required',
            'categoria' => 'required',
            'marca' => 'required',
        ]);

        //creacion del nombre de la imagen subida
        $imageName = time().'.'.$request->imagen->extension();
        //guarddado de la imagen en la carpetas imagenes
        $request->imagen->move(public_path('images'), $imageName);

        //guarde el producto con la informacion del formulario
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->url_imagen = $imageName;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->iva = $request->iva;
        $producto->precio_neto = $request->neto;
        $producto->existencia = $request->existencia;
        $producto->proveedor_id = $request->proveedor;
        $producto->categoria_id = $request->categoria;
        $producto->marca_id = $request->marca;
        $producto->saveOrFail();

        //despues de guardar el prodcuto lo redireccione a la ruta home donde se muestra el prodcto que acabo de guardar
        return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        unlink("images/".$producto->url_imagen);
        $producto->delete();

        return back();
    }
}
