@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              Enregistrement 
            </div>
            <div class="card-body">
            <form  method="POST" action="{{ route('user.store') }}">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom"  name ="name" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
    
                      <input type="text" class="form-control"  name="prenom" placeholder="Prénom">
                    </div>

                    <div class="form-group">
                        <select class="custom-select @error('sexe') is-invalid @enderror"  name="sexe">
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
        
                        @error('sexe')
                            <div class="invalid-feedback">
                                {{ $errors->first('sexe') }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <select class="custom-select @error('sexe') is-invalid @enderror"  name="libelle">
                            <option value="Medecin">Médecin</option>
                            <option value="Infirmier">Infirmier</option>
                        </select>
        
                        @error('libelle')
                            <div class="invalid-feedback">
                                {{ $errors->first('libelle') }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control"  name="email" placeholder="Email">
                      </div>

                    <!--div class="form-group">
                        <label for="exampleInputPassword1">Libellé</label>
                        <input type="text" class="form-control"  name="libelle">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Sexe</label>
                        <input type="email" class="form-control"  name="email">
                      </div-->

                      

                      <!--div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control"  name="password">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Confirmer votre mot de passe</label>
                        <input type="password" class="form-control"  >
                      </div-->

                      

                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                  </form>
            </div>
          </div>
        </div>
    </div>
    </div>

@endsection
