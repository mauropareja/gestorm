@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @role('Administrador')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administracion</div>

                <div class="card-body">
                    <a href="{{route('administracioin.index')}}" class="btn btn-primary">Realizar Solicitud</a>
                </div>
            </div>
        </div>
        @endrole

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Solicitudes</div>

                <div class="card-body">

                    <a href="{{route('solicitud.create')}}" class="btn btn-primary">Realizar Solicitud</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Descripcion Del Equipo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($solicitudes as $solicitud)
                            <tr>
                            <td>{{$solicitud->nombre}}</td>
                            <td>{{$solicitud->codigo}}</td>
                            <td>{{$solicitud->descripcion_equipo}}</td>
                            <td>{{$solicitud->estado}}</td>
                            <td>{{$solicitud->fecha}}</td>
                            <td>
                                <a href="{{route('solicitud.show',$solicitud)}}" class="btn btn-primary">Mostrar</a>
                                <a href="{{route('solicitud.edit',$solicitud)}}" class="btn btn-primary">Editar</a>
                                
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
