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
    {!!Form::open(['action'=>'PagesController@modifieruser', 'methode'=>'POST', 'class'=>
       'form-horizontal'])!!}
        {{csrf_field()}}
        {{Form::hidden('id', $user->id)}}
        <div class="form-group">
            {{Form::label('','User')}}
            {{Form::text('User_Name', $user->nom_user, ['placeholder' => 'User name', 'class' => 'form-control'])}}
        </div>
    {{-- <form action="{{url('/sauverUser')}}" method="POST" class="form-horizontal">
            {{csrf_field()}}
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="userName" placeholder="Nom User" class="form-control">
            </div> --}}

            <div class="form-group">
                {{Form::label('','Prénom')}}
                {{Form::text('User_LastName', $user->prenom_user, ['placeholder' => 'User LastName', 'class' => 'form-control'])}}
                {{-- <label>Prénom</label>
                <input type="text" name="userLastName" placeholder="Prénom User" class="form-control"> --}}
            </div>
            <div class="form-group">
                {{Form::label('','Age')}}
                {{Form::text('User_Age', $user->age_user, ['placeholder' => 'User Age', 'class' => 'form-control'])}}
                {{-- <label>Age</label>
                <input type="text" name="userAge" placeholder="Age User" class="form-control"> --}}
            </div>
            <div class="form-group">
                {{Form::label('','Description User')}}
                {{Form::textarea('User_description', $user->description_user, ['placeholder' => 'User description', 'class' => 'form-control'])}}
                {{-- <label>Description User</label>
                <textarea name="descriptionUser" cols="30" rows="10" class="form-control"></textarea> --}}
            </div>
            <div class="form-group">
                {{Form::label('','Mail')}}
                {{Form::text('User_mail', $user->mail_user, ['placeholder' => 'Product Name', 'class' => 'form-control'])}}
                {{-- <label>Mail</label>
                <input type="text" name="userMail" placeholder="Mail User" class="form-control"> --}}
            </div>
            {{Form::submit('Modifier User', ['class' => 'btn btn-primary'])}}
    {!!Form::close()!!}
@endsection
