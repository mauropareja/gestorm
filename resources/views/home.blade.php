@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <button type="button" class="btn btn-primary">Realizar Solicitud</button>

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Estado</th>
                            <th scope="col">Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>{{Auth::user()->solicitud->estado}}</td>
                            <td>{{Auth::user()->solicitud->fecha}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
