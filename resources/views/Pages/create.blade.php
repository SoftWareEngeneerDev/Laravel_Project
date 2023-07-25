
@extends('layouts.app')

@section('title')
    Sauver Produit
@endsection
@section('contenu')
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
            {{Session::put('message', null)}}
        </div>

    @endif
    {{--<form action="{{url('/sauverproduit')}}" method="POST" class="form-horizontal">--}}
    {!!Form::open(['action'=>'PagesController@sauverproduit', 'methode'=>'POST', 'class'=>
       'form-horizontal'])!!}
        {{csrf_field()}}
        <div class="form-group">
            {{Form::label('','Product')}}
            {{Form::text('product_Name','',['placeholder' => 'Product Name', 'class' => 'form-control'])}}

            {{--<label>Product</label>
            <input type="text" name="product_Name" placeholder="Product Name" class="form-control" required>--}}
        </div>
        <div class="form-group">
            {{Form::label('','Product Price')}}
            {{Form::text('product_Price','',['placeholder' => 'Product Price', 'class' => 'form-control'])}}

            {{--<label>Product Price</label>
            <input type="text" name="product_Price" placeholder="Product Price" class="form-control" required>--}}
        </div>
       {{-- <div class="form-group">
            {{Form::label('','Product Image')}}
            {{Form::file('product_image', ['class' => 'form-control'])}}
        </div>--}}
        <div class="form-group">
            {{Form::label('','Product description')}}
            {{Form::textarea('product_Description','',['placeholder' => 'product Description', 'class' => 'form-control'])}}

            {{--<label>Product description</label>
            <textarea name="product_Description" cols="30" rows="10" class="form-control" required></textarea>--}}
        </div>
        {{Form::submit('Ajouter Produit', ['class' => 'btn btn-primary'])}}
         {{--<input type="submit" value="Ajouter Produit" class="btn btn-primary">--}}
         {{--</form>--}}
    {!!Form::close()!!}
@endsection
