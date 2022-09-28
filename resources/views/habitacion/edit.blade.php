@extends('layout.plantilla')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Habitación</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{{Form::open(array('action'=>array('App\Http\Controllers\HabitacionController@update', $habitacion->id),'method'=>'patch'))}}
<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="documento">Número Habitación</label>
            <input type="number" name="numero" id="numero" class="form-control" value="{{$habitacion->numero}}">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="documento">Número Piso</label>
            <input type="number" name="piso" id="piso" class="form-control" value="{{$habitacion->piso}}">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="documento">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="1" cols="5" class="form-control" >{{$habitacion->descripcion}}</textarea>
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre">Tipo Hahitación</label>
            <input type="text" name="tipoHabitacion" id="tipoHabitacion" class="form-control" value="{{$habitacion->tipoHabitacion}}">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="documento">Precio Diario</label>
            <input type="number" name="precioDiario" id="precioDiario" class="form-control" value="{{$habitacion->precioDiario}}">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="apellido">Estado</label>
            <select class="form-control" name="estado" id="estado" aria-label="Disabled select example" value="{{$habitacion->estado}}">
                <option selected>Selecciona aquí</option>
                <option value="Disponible">Disponible</option>
                <option value="Ocupado">Ocupado</option>
                <option value="Mantenimiento">Mantenimiento</option>
            </select>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar
            </button>
            <a class="btn btn-info" type="reset" href="{{url('habitacion')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection