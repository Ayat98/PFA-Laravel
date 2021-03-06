@extends('layouts.prof')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Création d'une nouvelle question </div>

                    <div class="card-body">
                       
<form action="/examens/{{ $examen->id }}/questions2" method="post">

@csrf

<div class="form-group">
    <label for="question">Enoncé de la question : </label>
    <input type="text" class="form-control" id="question" name="question[question]" aria-describedby="titreHelp" placeholder="Entrez la question">
    <!--<small id="titreHelp" class="form-text text-muted">Entrez le titre de l'examen </small>

@error('titre')
<small class="text-danger">{{ $message }}</small>
@enderror -->
</div>
 <button type="submit" class="btn btn-primary">Valider</button>
</form> 


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection