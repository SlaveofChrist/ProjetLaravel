@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              Authentification
            </div>
            <div class="card-body">
            <form  method="GET" action="{{ route('home')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1"  name ="email" placeholder="Email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Mot de passe">
                    </div>
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                  </form>
            </div>
          </div>
        </div>
    </div>
    </div>

@endsection
