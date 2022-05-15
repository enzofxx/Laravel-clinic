<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $visits = Visit::with('doctor', 'patient', 'service')->get();
        return view('visits.index', compact('visits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $doctors = Doctor::all();
        $patients = Patient::all();
        $services = Service::all();
        return view('visits.create', compact('doctors', 'patients', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'doctor_id' => 'required',
            'patient_id' => 'required',
            'service_id' => 'required',
        ]);

        Visit::create([
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'doctor_id' => $request->input('doctor_id'),
            'patient_id' => $request->input('patient_id'),
            'service_id' => $request->input('service_id'),
        ]);

        return redirect()->route('visits.index');
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
    public function edit($id) {
        $visit = Visit::where('id', $id)->first();
        $doctors = Doctor::all();
        $patients = Patient::all();
        $services = Service::all();
        return view('visits.edit', compact('doctors', 'patients', 'services', 'visit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit){

        $visit->update([
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'doctor_id' => $request->input('doctor_id'),
            'patient_id' => $request->input('patient_id'),
            'service_id' => $request->input('service_id'),
        ]);

        return redirect()->route('visits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit){
        $visit->delete();
        return redirect()->route('visits.index');
    }
}
