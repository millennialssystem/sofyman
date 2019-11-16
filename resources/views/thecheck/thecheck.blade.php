@extends('layouts.app')
    @section('title', 'La cuenta')
    @section('content')

     <style>
        .rowLg {
            min-height: 20vh;
        }

    </style>
    <div class="container text-secondary colorsofyman">
        <div class="row">
            <div class="col text-center text-light">
                <h1>
                    Su cuenta
                </h1>
            </div>
        </div>

            

       
        <div class="row">
                    <div class="col">
        <table class="table table-light table-striped">
            @foreach($data as $obj)
            <tr id="CheckCustomer{{ $obj->counts }}">
                <td>
                {{ $obj->id }}   <br>
                </td>
                <td>
                {{ $obj->about }}   <br>
                </td>
                <td>
                {{ $obj->pricesingle }}   <br>
                </td>
                <td>
                {{ $obj->pricetotal }}   <br>
                </td>
                <td>
                    <span>
                        <input id="" type="checkbox">
                    </span>
                </td>
            </tr>
            @endforeach                       
        </table>
    </div>
</div>

        <div class="row justify-content-center align-items-center">
            <div class="col-8 bg-light">
                <strong>
                <span>Su cuenta:</span>
                <span class="float-right">{{ $data[0]->total }}</span>                 
            </strong>
            </div>
        </div>

        <div class="row text-uppercase  justify-content-center text-center rowLg">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  p-2">
                    <button type="button" class="btn btn-lg btn-secondary w-75 h-100">La carta</button>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 p-2">
                    <button type="button" class="btn btn-lg btn-secondary w-75 h-100">Sugerencias</button>
                </div>
            </div>
            <div class="row text-uppercase  justify-content-center text-center rowLg">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  p-2">
                        <button type="button" class="btn btn-lg btn-secondary w-75 h-100">Volver</button>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 p-2">
                        <button type="button" class="btn btn-lg btn-secondary w-75 h-100">Pedir la cuenta</button>
                    </div>
                </div>
    </div>

@endsection
