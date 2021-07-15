@extends('layouts.app')

@section('content')   
<div class="well">            
    <h4 style="color:cadetblue;">{{$products->name}}</h4>
    <small>SKU: {{$products->id}} | Price: ${{$products->price}}</small>
    <hr>
    <span style="padding-left:86%;"><a href="/products/{{$products->id}}/edit" class="btn btn-warning">Edit</a></span>
    
    {!!Form::open(['action' => ['ProductsController@destroy', $products->id], 'method' => 'POST', 'class' => 'pull-right', 'onsubmit' => 'return ConfirmDelete()'])!!}

    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

    {!!Form::close()!!}

</div>
@endsection