@extends('layouts.app')

@section('content')               
    <home name=" {{ utf8_encode($data[0]->name)  }}" about="{{ utf8_encode($data[0]->about) }}" ></home>    
@endsection
