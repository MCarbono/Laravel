@extends('principal')

@section('conteudo')
<h1>Fornecedores</h1>
<div class="table table-striped table-hover table-bordered">
<table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Email</th>
                <th colspan="2">Ações</th>
            <tr>
        </thead>
        <tbody>
            @foreach($fornecedor as $f)
            <tr>
                 <td>{{$f->nome}}</td>
                 <td>{{$f->cnpj}}</td>
                 <td>{{$f->email}}</td>    
                 <td><a href="{{action('FornecedorController@destroy', $f->id)}}"><i class="material-icons">delete</i></a></td>
                 <td><a href="{{action('FornecedorController@edit', $f->id)}}"><i class="material-icons">edit</i></a></td>
             </tr>
            @endforeach
        </tbody>
    </table>
 </div>   
    <br><br>
    <a href="{{action('FornecedorController@create')}}">Cadastrar fornecedor</a>
    <a href="{{action('ProdutoController@create')}}">Cadastrar produto</a>
@stop