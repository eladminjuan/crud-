<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$hab->id}}">
    {{Form::Open(array('action'=>array('App\Http\Controllers\HabitacionController@destroy',$hab->id),'method'=>'delete'))}}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar Habitación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Confirme si desea Eliminar La Habitación</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btnprimary">Confirmar</button>
                <button type="button" class="btn btn-secondary" datadismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
{{Form::Close()}}