@extends('layouts.app')

@section('content')
    <div class="d-flex container">
        <div class="image">
            <h1>HostPatient</h1>
            <p>Bienvenue sur HostPatient votre gestionnaire de suivie de patient.Inscivez-vous et profitez de notre application</p>
            <img src="{{ asset('image/login-sign.png') }}" alt="">
        </div>

        <div class="form">
            <form action="{{ route('patients.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="patient_id">ID du patient:</label>
                <input type="text" class="form-control" id="patient_id" name="patient_id" required>
            </div>
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prénom">Prénom:</label>
                <input type="text" class="form-control" id="prénom" name="prénom" required>
            </div>
            <div class="form-group">
                <label for="date_de_naissance">Date de naissance:</label>
                <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" required>
            </div>
            <div class="form-group">
                <label for="sexe">Sexe:</label>
                <input type="text" class="form-control" id="sexe" name="sexe" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" class="form-control" id="adresse" name="adresse" required>
            </div>
            <div class="form-group">
                <label for="numéro_de_téléphone">Numéro de téléphone:</label>
                <input type="text" class="form-control" id="numéro_de_téléphone" name="numéro_de_téléphone" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe:</label>
                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <div class="form-group">
                <label for="antécédents_médicaux">Antécédents médicaux:</label>
                <textarea class="form-control" id="antécédents_médicaux" name="antécédents_médicaux"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Ajouter votre photo</label>
                <input class="form-control" type="file" id="formFile" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
        </div>
        
    </div>
@endsection