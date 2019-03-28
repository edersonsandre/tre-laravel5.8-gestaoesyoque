@extends('admin')

@section('content')
    <div class="text-right">
        <a href="{!! route('admin-produtos-registro') !!}">Novo Registro</a>
    </div>
    <hr/>

    @if(!empty($rows[0]))
        <table class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ativo</th>
                <th>Estoque</th>
                <th>#</th>
            </tr>
            @foreach($rows AS $row)
                <tr>
                    <td>{!! $row->id !!}</td>
                    <td>{!! $row->nome !!}</td>
                    <td>{!! $row->valor !!}</td>
                    <td>{!! $row->ativo !!}</td>
                    <td>{!! $row->estoque->quantidade !!}</td>
                    <td>
                        <a href="{!! route('admin-produtos-edit', ['id'=>$row->id]) !!}" class="btn btn-success">E</a>
                        | <a href="{!! route('admin-produtos-delete', ['id'=>$row->id]) !!}" class="btn btn-danger">D</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert-info alert">Nenhum registro encontrado!</div>
    @endif

@stop