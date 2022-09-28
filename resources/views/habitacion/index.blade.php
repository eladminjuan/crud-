@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-9">
        <a href="{{url('habitacion/create')}}" class="pull-right">
            <button class="btn btn-success">Crear Habitacion</button> </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-xs-9">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    
                    <th>Número</th>
                    <th>Piso</th>
                    <th>Descripción</th>
                    <th>Tipo Habitación</th>
                    <th>Precio Diario</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($habitacion as $hab)
                    <tr>
                        
                        <td>{{ $hab->numero }}</td>
                        <td>{{ $hab->piso }}</td>
                        <td>{{ $hab->descripcion }}</td>
                        <td>{{ $hab->tipoHabitacion }}</td>
                        <td>{{ $hab->precioDiario }}</td>
                        <td>{{ $hab->estado }}</td>
                        <td>
                            <a href="{{URL::action('App\Http\Controllers\HabitacionController@edit',$hab->id)}}"><button class="btn btn-primary">Actualizar</button></a>
                            <a href="" data-target="#modal-delete-{{$hab->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>
                    @include('habitacion.modal')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection