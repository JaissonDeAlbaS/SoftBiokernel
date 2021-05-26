<?php

namespace App\Http\Controllers;

use App\Models\Admin_doctor;
use Illuminate\Http\Request;

class AdminDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ADoctores'] = Admin_doctor::paginate(1);
        return view('admin_doctores', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_doctores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosADoctor = request()->except('_token');
        Admin_doctor::insert($datosADoctor);
        return redirect('admin_doctores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin_doctor  $admin_doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Admin_doctor $admin_doctor)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin_doctor  $admin_doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ADoctor = Admin_doctor::findOrFail($id);
        return view('admin_doctores', compact('ADoctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin_doctor  $admin_doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosADoctor = request()->except(['_token', '_method']);
        Admin_doctor::where('id', '=', $id)->update($datosADoctor);

        return redirect('admin_doctores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin_doctor  $admin_doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin_doctor::destroy($id);
        return redirect('admin_doctores');
    }
}
