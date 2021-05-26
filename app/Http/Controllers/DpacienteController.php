<?php

namespace App\Http\Controllers;

use App\Models\Dpaciente;
use Illuminate\Http\Request;

class DpacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['Dpacientes'] = Dpaciente::paginate(1);
        return view('doctor', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosDPacientes = request()->except('_token');
        Dpaciente::insert($datosDPacientes);
        return redirect('doctor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dpaciente  $dpaciente
     * @return \Illuminate\Http\Response
     */
    public function show(dpaciente $dpaciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dpaciente  $dpaciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dpaciente = Dpaciente::findOrFail($id);
        return view('doctor', compact('dpaciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dpaciente  $dpaciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosDPacientes = request()->except(['_token', '_method']);
        Dpaciente::where('id', '=', $id)->update($datosDPacientes);
        return redirect('doctor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dpaciente  $dpaciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dpaciente::destroy($id);
        return redirect('doctor');
    }
}
