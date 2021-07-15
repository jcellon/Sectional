@extends('layouts.app')

@section('content')

        @if(count($products) > 0)
            @foreach ($products as $item)
                <div class="well">                
                <h4><a href="/products/{{$item->id}}">{{$item->name}}</a></h4>
                <small>SKU: {{$item->id}} | Price: ${{$item->price}}</small>
                </div>
            @endforeach

            @else
            <p>No Products Found</p>
        @endif

        <a style="float: right;" href="/products/create" class="btn btn-primary">Create Product</a>

@endsection