<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__('Cedula')}}:</strong>
            {!! Form::text('cedula', null, array('placeholder' => __('20428781'),'class' => 'form-control mt-2')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        {!! Form::button('<i class="fa fa-check"></i> '.__('Verificar'), ['type' => 'submit', 'class' => 'btn btn-success btn-lg mt-2'] )  !!}
    </div>
</div>