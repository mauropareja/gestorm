@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Solicitudes En Espera </div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Descripcion Del Equipo</th>
                            <th scope="col">Fecha Creada</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($solicitudes as $solicitud)
                            <tr>
                            <td>{{$solicitud->nombre}}</td>
                            <td>{{$solicitud->codigo}}</td>
                            <td>{{$solicitud->descripcion_equipo}}</td>
                            <td>{{$solicitud->created_at}}</td>
                            <td>{{$solicitud->user->name}}</td>
                            <td>
                                <a href="{{route('administracioin.revisar',$solicitud)}}" class="btn btn-primary">Revisar</a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection