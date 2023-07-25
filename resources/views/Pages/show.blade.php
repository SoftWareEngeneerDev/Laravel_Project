
@extends('layouts.app')

@section('title')
    detail
@endsection

@section('contenu')
    <h1>Le détail  du produit</h1>
    <hr>
    <h2>{{$produit->product_name}}</h2>
    <h3>${{$produit->product_price}}</h3>
    <p>{{$produit->product_description}}</p>
    <hr>
    <h4>{{$produit->created_at}}</h4>
    <a href="edit/{{$produit->id}}" class= "btn btn-default">Edit</a>
    <a href="delete/{{$produit->id}}" class= "btn btn-danger">Delete</a>
@endsection
