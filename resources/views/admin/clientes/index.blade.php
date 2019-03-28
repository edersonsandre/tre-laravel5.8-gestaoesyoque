@extends('admin')

@section('content')
    <div class="text-right">
        <a href="{!! route('admin-clientes-registro') !!}">Novo Registro</a>
    </div>
    <hr/>

    @if(!empty($rows))
        <table class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>#</th>
            </tr>
            @foreach($rows AS $row)
                <tr>
                    <td>{!! $row->id !!}</td>
                    <td>{!! $row->nome !!}</td>
                    <td>{!! $row->cpf !!}</td>
                    <td>{!! $row->telefone !!}</td>
                    <td>{!! $row->email !!}</td>
                    <td>
                        <a href="{!! route('admin-clientes-edit', ['id'=>$row->id]) !!}" class="btn btn-success">E</a>
                         | <a href="{!! route('admin-clientes-delete', ['id'=>$row->id]) !!}" class="btn btn-danger">D</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

@stop