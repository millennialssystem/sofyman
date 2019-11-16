@extends('layouts.app')
    <!-- Inicio -->
    @section('title', 'La carta')
    @section('content')

    <div class="container text-secondary colorsofyman">
        <div class="row">
            <div class="col text-center">
                <h1>
                    La carta
                </h1>
                <h2>
                    Grupos de articulos/familias
                </h2>
            </div>
        </div>

            @foreach($data as $obj)
            <div id="family{{ $obj->id }}" class="row" onclick="getarticles(this,{{ $obj->id }})">
            <div class="col-1">
            {{ $obj->imgurl }}
            </div>
             <div class="col-11">
             {{ $obj->groups }}
            </div>
             </div>
            @endforeach
<hr>

            @foreach($article as $obj)
            <div id="article{{ $obj->id }}" family="{{ $obj->familia }}" class="row d-none">
            <div class="col-1">
            {{ $obj->IMAGEN }}
            </div>
             <div class="col-11">
             {{ $obj->DESCRIPCIO }}
            </div>
             </div>
            @endforeach



    </div>

    @endsection
