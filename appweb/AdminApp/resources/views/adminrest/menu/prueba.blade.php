@extends('layouts.rest')
@section('contenido')
{!!Form::open(array('url'=>'adminrest/menu','method'=>'POST'))!!}


{!!Form::close()!!}
@endsection
