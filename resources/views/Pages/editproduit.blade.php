
@extends('layouts.app')

@section('title')
    Modifier Produit
@endsection
@section('contenu')
    {{--<form action="{{url('/sauverproduit')}}" method="POST" class="form-horizontal">--}}
    {!!Form::open(['action'=>'PagesController@modifierproduit', 'methode'=>'POST', 'class'=>
       'form-horizontal'])!!}
        {{csrf_field()}}
        {{Form::hidden('id', $produit->id)}}
        <div class="form-group">
            {{Form::label('','Product')}}
            {{Form::text('product_Name', $produit->product_name, ['placeholder' => 'Product Name', 'class' => 'form-control'])}}

            {{--<label>Product</label>
            <input type="text" name="product_Name" placeholder="Product Name" class="form-control" required>--}}
        </div>
        <div class="form-group">
            {{Form::label('','Product Price')}}
            {{Form::text('product_Price', $produit->product_price, ['placeholder' => 'Product Price', 'class' => 'form-control'])}}

            {{--<label>Product Price</label>
            <input type="text" name="product_Price" placeholder="Product Price" class="form-control" required>--}}
        </div>
        <div class="form-group">
            {{Form::label('','Product description')}}
            {{Form::textarea('product_Description', $produit->product_description, ['placeholder' => 'product Description', 'class' => 'form-control'])}}

            {{--<label>Product description</label>
            <textarea name="product_Description" cols="30" rows="10" class="form-control" required></textarea>--}}
        </div>
        {{Form::submit('Modifier Produit', ['class' => 'btn btn-primary'])}}
         {{--<input type="submit" value="Ajouter Produit" class="btn btn-primary">--}}
         {{--</form>--}}
    {!!Form::close()!!}
@endsection
