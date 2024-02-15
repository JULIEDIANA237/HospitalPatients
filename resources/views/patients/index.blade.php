@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des patients</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Sexe</th>
                    <th>Adresse</th>
                    <th>Numéro de téléphone</th>
                    <th>Email</th>
                    <th>Antécédents médicaux</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->patient_id }}</td>
                        <td>{{ $patient->nom }}</td>
                        <td>{{ $patient->prénom }}</td>
                        <td>{{ $patient->date_de_naissance }}</td>
                        <td>{{ $patient->sexe }}</td>
                        <td>{{ $patient->adresse }}</td>
                        <td>{{ $patient->numéro_de_téléphone }}</td>
                        <td>{{ $patient->email}}</td>
                        <td>{{ $patient->antécédents_médicaux }}</td>
                        <td>
                            @if ($patient->image)
                                <img src="{{ asset('/home/juliefontsa/Bureau/images/' . $patient->image) }}" alt="Photo du patient">
                            @else
                                Aucune image disponible
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection