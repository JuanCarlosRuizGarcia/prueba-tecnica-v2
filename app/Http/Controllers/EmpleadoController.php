<?php

namespace App\Http\Controllers;

use App\Area;
use App\Role;
use App\Empleado;
use Illuminate\Http\Request;
use App\Http\Requests\Empleado\EmpleadoStoreRequest;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::with('area')->get();
        return view('empleados.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::pluck('nombre','id');
        $roles = Role::get();
        return view('empleados.create',compact('areas','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoStoreRequest $request)
    {
        $empleado = Empleado::create($request->validated());
        $empleado->roles()->sync($request->get('roles'));

        return redirect()->route('empleados.index')
            ->with('info','Empleado creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show',compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $areas = Area::pluck('nombre','id');
        $roles = Role::get();
        return view('empleados.edit',compact('empleado','areas','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(EmpleadoStoreRequest $request, Empleado $empleado)
    {
        $empleado->update($request->validated());
        $empleado->roles()->sync($request->get('roles'));

        return redirect()->route('empleados.index')
            ->with('info','Empleado actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return back()->with('info','Empleado borrado con exito');
    }
}
