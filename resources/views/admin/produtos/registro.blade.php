@extends('admin')

@section('content')
    <div class="text-right">
        <a href="{!! route('admin-clientes') !!}">Listagem</a>
    </div>
    <hr/>

    <div class="card">
        <div class="card-body">
            {!! Form::model($model, ['url' => route('admin-produtos-save')]) !!}
            {!! Form::hidden('id') !!}

            {!! Form::cText('nome', 'Nome'); !!}
            {!! Form::cText('valor', 'Valor'); !!}
            {!! Form::cText('ativo', 'Ativo'); !!}

            <div>
                <button type="submit" class="btn btn-success">Gravar</button>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop