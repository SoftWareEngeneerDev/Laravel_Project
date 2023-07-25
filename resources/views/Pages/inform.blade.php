
@extends('layouts.app')

@section('title')
    inform
@endsection

@section('contenu')
    <h1>Les informations du User</h1>
    <hr>
    <h2>{{$informs->nom_user}}</h2>
    <h3>{{$informs->prenom_user}}</h3>
    <p>{{$informs->description_user}}</p>
    <hr>
    <h4>{{$informs->created_at}}</h4>
    <a href="modif/{{$informs->id}}" class= "btn btn-default">Edit</a>
    <a href="supp/{{$informs->id}}" class= "btn btn-danger">Delete</a>
@endsection
