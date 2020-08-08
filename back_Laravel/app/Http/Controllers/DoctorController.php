<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::get();
        echo json_encode($doctor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->nombre = $request->input('nombre');
        $doctor->ciudad = $request->input('ciudad');
        $doctor->telefono = $request->input('telefono');
        $doctor->correo = $request->input('correo');
        $doctor->idPaciente = $request->input('idPaciente');
        $doctor->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $doctor_id)
    {
        $doctor = Doctor::find($doctor_id);
        $doctor->nombre = $request->input('nombre');
        $doctor->ciudad = $request->input('ciudad');
        $doctor->telefono = $request->input('telefono');
        $doctor->correo = $request->input('correo');
        $doctor->idPaciente = $request->input('idPaciente');
        $doctor->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($doctor_id)
    {
        $doctor = Doctor::find($doctor_id);
        print_r(($doctor));
        $doctor->delete();
    }
}
