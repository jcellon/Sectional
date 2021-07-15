@extends('layouts.app')

@section('content')   
        
{!! Form::open(['action' => ['ProductsController@update', $products->id], 'method' => 'POST']) !!}


<div class="form-group">
    {{Form::label('name', 'Product Name', ['class' => 'awesome'])}}
    {{Form::text('name', $products->name, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('sku', 'Product SKU', ['class' => 'awesome'])}}
    {{Form::text('sku', $products->sku, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('price', 'Product Price', ['class' => 'awesome'])}}
    {{Form::number('price', $products->price, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('fabric', 'Product Fabric', ['class' => 'awesome'])}}
    {{Form::select('fabric', ['placeholder' => 'Pick a fabric...', 'F1' => 'Fabric_1', 'F2' => 'Fabric_2', 'F3' => 'Fabric_3'], '', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('length', 'Product Length', ['class' => 'awesome'])}}
    {{Form::select('length', ['placeholder' => 'Pick a length...', 'L1' => 'Length_1', 'L2' => 'Length_2', 'L3' => 'Length_3'], '', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('cushion', 'Product Cushion', ['class' => 'awesome'])}}
    {{Form::select('cushion', ['placeholder' => 'Pick a cushion...', 'C1' => 'Cushion_1', 'C2' => 'Cushion_2', 'C3' => 'Cushion_3'], '', ['class' => 'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('bracket', 'Product Bracket', ['class' => 'awesome'])}}
    {{Form::select('bracket', ['placeholder' => 'Pick a bracket...', 'B1' => 'Bracket_1', 'B2' => 'Bracket_2', 'B3' => 'Bracket_3'], '', ['class' => 'form-control'])}}
</div>

{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Update', ['class' => 'btn btn-primary', 'style' => 'float: right'])}}

{!! Form::close() !!}
@endsection