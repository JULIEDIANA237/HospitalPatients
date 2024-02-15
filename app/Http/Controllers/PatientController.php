<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients. create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'patient_id' => 'required|unique:patients',
            'nom' => 'required',
            'prénom' => 'required',
            'date_de_naissance' => 'required|date',
            'sexe' => 'required',
            'adresse' => 'required',
            'numéro_de_téléphone' => 'required',
            'email' => 'required|email',
            'mot_de_passe' => 'required|min:6', // Exemple de validation pour le mot de passe
            'antécédents_médicaux' => 'nullable',
            'image' => 'nullable',
        ]);

        $validatedData['mot_de_passe'] = bcrypt($validatedData['mot_de_passe']); // Crypter le mot de passe

        $patient = Patient::create($validatedData);

        return redirect()->route('patients.index', $patient->patient_id)->with('success', 'Patient créé avec succès');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($patientId)
    {
        $patient = Patient::findOrFail($patientId);

        return view('patients.show', compact('patient'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
