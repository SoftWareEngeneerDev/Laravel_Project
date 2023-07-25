@extends('layouts.app')

@section('title')
    User
@endsection

@section('contenu')
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
            {{Session::put('message', null)}}
        </div>

    @endif 
    <form action="{{url('/sauverUser')}}" method="POST" class="form-horizontal">
            {{csrf_field()}}
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="userName" placeholder="Nom User" class="form-control">
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="userLastName" placeholder="Prénom User" class="form-control">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="text" name="userAge" placeholder="Age User" class="form-control">
            </div>
            <div class="form-group">
                <label>Description User</label>
                <textarea name="descriptionUser" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Mail</label>
                <input type="text" name="userMail" placeholder="Mail User" class="form-control">
            </div>
            <input type="submit" value="Ajouter User" class="btn btn-primary">
        </form>
@endsection