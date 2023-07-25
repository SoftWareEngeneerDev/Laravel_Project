
@extends('layouts.app')

@section('title')
    services
@endsection

@section('contenu')
    <h1>Welcome to the services page</h1>
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
            {{Session::put('message', null)}}
        </div>
    @endif
    @foreach($produits as $produit)
        <div class="well">
            {{-- <h1>{{$produit->product_name}}</h1> --}}
            <h1><a href="show/{{$produit->id}}">{{$produit->product_name}}</a></h1>
        </div>
    @endforeach
    {{-- {{$produits->links()}} --}}
@endsection

