@extends('layouts.app')

@section('title')
    services
@endsection

@section('contenu')
    <h1>Welcome to détail User</h1>
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
            {{Session::put('message', null)}}
        </div>
    @endif
    @foreach($details as $detail)
        <div class="well">
            {{-- <h1>{{$produit->product_name}}</h1> --}}
            <h1><a href="inform/{{$detail->id}}">{{$detail->nom_user}}</a></h1>
        </div>
    @endforeach
    {{-- {{$produits->links()}} --}}
@endsection