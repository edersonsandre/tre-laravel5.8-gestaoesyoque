@extends('admin')

@section('content')
    <div class="text-right">
        <a href="{!! route('admin-clientes') !!}">Listagem</a>
    </div>
    <hr/>

    <div class="card">
        <div class="card-body">
            {!! Form::model($model, ['url' => route('admin-clientes-save')]) !!}

            {!! Form::cText('nome', 'Nome'); !!}
            {!! Form::cText('cpf', 'CPF'); !!}
            {!! Form::cText('telefone', 'Telefone'); !!}
            {!! Form::cText('email', 'E-mail'); !!}


            <div >
                <button type="submit" class="btn btn-success">Gravar</button>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop