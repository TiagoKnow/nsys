@extends('adminlte::page')

@section('title', 'Nsys Produtos')

@section('content_header')
    <h1>Lista de produtos em estoque</h1>
@stop

@section('content')
<section class="content-header">
  <h1>
    Consulta
    <small>Relação simplificada</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="#">Vendas</a></li>
    <li class="active">Listagem de produtos </li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header with-border">
          <a class="btn btn-primary navbar-btn"><i class="fa fa-plus"></i></a>
        </div>

        <div class="box-body table-responsive">
          <table class="table table-condensed table-hover" id="dataTable">
            <tr>
              <th>Cod Produto</th>
              <th>Descrição</th>
              <th>Código de barras</th>
              <th>Valor</th>
              <th>Observações</th>
            </tr>
            <tbody>
            <tfoot>
            @foreach($produtos as $produto)
              <tr>
                <td>{{$produto->codigoProduto}}</td>
                <td>{{$produto->descricaoProduto}}</td>
                <td>{{$produto->codigoDeBarras}}</td>
                <td>{{number_format($produto->valorDeVenda, 2, ',' , '.')}}</td>
                <td>{{$produto->observacoes}}</td>
                <td><a>  Detalhes/Editar </a></td>
              </tr>
            @endforeach
            </tfoot>
            </tbody>
          </table>
          <div class="dataTables_paginate paging_simple_numbers">
            <center>
            @if($produtos->hasPages())
              {!! $produtos->appends($_GET)->links() !!}
            @endif
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
