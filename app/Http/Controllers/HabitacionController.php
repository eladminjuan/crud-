<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
use Illuminate\Support\Facades\Redirect;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitacion = Habitacion::orderBy('id', 'DESC')->paginate(3);

        return view('habitacion.index', compact('habitacion'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habitacion.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habitaciones = new Habitacion;
        $habitaciones->numero = $request->get('numero');
        $habitaciones->piso = $request->get('piso');
        $habitaciones->descripcion = $request->get('descripcion');
        $habitaciones->tipoHabitacion = $request->get('tipoHabitacion');
        $habitaciones->precioDiario = $request->get('precioDiario');
        $habitaciones->estado = $request->get('estado');
        $habitaciones->save();
        return Redirect::to('habitacion');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $habitacion = Habitacion::findOrFail($id);
        return view("habitacion.edit", ["habitacion" => $habitacion]);
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
        $habitaciones = Habitacion::findOrFail($id);
        $habitaciones->numero = $request->get('numero');
        $habitaciones->piso = $request->get('piso');
        $habitaciones->descripcion = $request->get('descripcion');
        $habitaciones->tipoHabitacion = $request->get('tipoHabitacion');
        $habitaciones->precioDiario = $request->get('precioDiario');
        $habitaciones->estado = $request->get('estado');
        $habitaciones->update();
        return Redirect::to('habitacion');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitaciones = Habitacion::findOrFail($id);
        $habitaciones->delete();
        return Redirect::to('habitacion');
    }
}
