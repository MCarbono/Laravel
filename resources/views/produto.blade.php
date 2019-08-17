@extends('principal')

@section('conteudo')
<h1>Produtos</h1>
<div class="table table-striped table-hover table-bordered">
<table>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Fornecedor</th>
            <th colspan="2">Ações</th>
        </tr>
        @foreach($produtos as $produto)
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->preco}}</td>
                <td>{{$produto->fornecedor->nome}}</td>
                <td><a href="{{action('ProdutoController@destroy', $produto->id)}}"><i class="material-icons">delete</i></a></td>
                <td><a href="{{action('ProdutoController@edit', $produto->id)}}"><i class="material-icons">edit</i></a></td>
                @csrf
            </tr>
        @endforeach
    </table>
</div>
    <a href="{{action('ProdutoController@create')}}">Cadastrar Produto</a>
    <a href="{{action('FornecedorController@create')}}">Cadastrar fornecedor</a>
@stop