@extends('layouts.app')

@section('content')

@if(count($products) > 0)
@foreach ($products as $item)
    <div class="well">     
    <h4 style="color:cadetblue;">{{$item->name}}</h4>          
    <small><strong>Fabric: </strong>{{$item->fabric}}</small><br>
    <small><strong>Length: </strong>{{$item->length}}</small><br>
    <small><strong>Cushion: </strong>{{$item->cushion}}</small><br>
    <small><strong>Bracket: </strong>{{$item->bracket}}</small><br>
    </div>
@endforeach

@else
<p>No Products Found</p>
@endif

@endsection