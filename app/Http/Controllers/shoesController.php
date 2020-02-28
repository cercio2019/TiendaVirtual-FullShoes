<?php

namespace App\Http\Controllers;

use App\shoes;
use Illuminate\Http\Request;
use Session;
class shoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoes = shoes::paginate(6);
        return view('shoes.index', compact('shoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    if ($request->hasFile('imagen')) {
        $file = $request->file('imagen');
        $name = time().$file->getClientOriginalName();
        $file->move(public_path().'/calzimg/', $name);
        
        }

        $shoes = new shoes();
        $shoes->nombre = $request->input('nombre');
        $shoes->imagen = $name;
        $shoes->precio = $request->input('precio');
        $shoes->descripcion = $request->input('descripcion');
        $shoes->save();

        Session::flash('message', 'calzado registrado correctamente');
        return redirect()->route('shoes.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\shoes  $shoes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $shoes = shoes::where('id', $id)->first();
      return view('shoes.show', compact('shoes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\shoes  $shoes
     * @return \Illuminate\Http\Response
     */
    public function edit(shoes $shoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\shoes  $shoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shoes $shoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\shoes  $shoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(shoes $shoes)
    {
        //
    }
}
