@extends('layouts.master')

@section('top_section')
	@include('layouts.partials.top_section')
@endsection

@section('new_products')
	@include('layouts.partials.new_products',['new_products' => $new_products])
@endsection