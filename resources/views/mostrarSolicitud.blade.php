@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="container">
                        
                          <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{$solicitud->nombre}}">
                          </div>

                          <div class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="text" class="form-control" id="codigo" name="codigo"
                            value="{{$solicitud->codigo}}">
                          </div>

                          <div class="form-group">
                            <label for="descripcion_equipo">Descripcion del Equipo</label>
                            <input type="text" class="form-control" id="descripcion_equipo" name="descripcion_equipo"
                            value="{{$solicitud->descripcion_equipo}}">
                          </div>


                          <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" id="descripcion" rows="3" name="descripcion">{{$solicitud->descripcion}}
                            </textarea>
                          </div>

                          <div class="form-group row">
                              <label for="example-date-input" class="col-2 col-form-label">Fecha</label>
                              <div class="col-10">
                                <input class="form-control" type="date" id="example-date-input" name="fecha"
                                value="{{$solicitud->fecha}}">
                              </div>
                            </div>
                    </div>
                    <a href="{{route('home')}}" class="btn btn-primary"> Sslir </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection