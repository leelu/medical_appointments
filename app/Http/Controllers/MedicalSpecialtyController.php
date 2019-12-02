<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medical_specialty;
class MedicalSpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medical_specialties=Medical_specialty::orderBy('name','ASC')->get();
        return view('MedicalSpecialty.index',compact('medical_specialties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('MedicalSpecialty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[ 'name'=>'required', 'description'=>'required']);
        Medical_specialty::create($request->all());
        return redirect()->route('MedicalSpecialty.index')->with('success','Registro creado satisfactoriamente');
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
        //
        $medical_specialty = Medical_specialty::find($id);
        return view('MedicalSpecialty.edit',compact('medical_specialty'));
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
        $this->validate($request,[ 'name'=>'required', 'description'=>'required']);
 
        Medical_specialty::find($id)->update($request->all());
        return redirect()->route('MedicalSpecialty.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Medical_specialty::find($id)->delete();
        return redirect()->route('MedicalSpecialty.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
