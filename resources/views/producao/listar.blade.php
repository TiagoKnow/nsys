@extends('adminlte::page')

@section('title', 'Nsys Produtos')

@section('content_header')
    <h1>Lista de ordens de serviço</h1>
@stop

@section('content')
<section class="content-header">
  <h1>
    Consulta
    <small>Relação simplificada</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="#">Produção</a></li>
    <li class="active">Listagem de ordens de serviço </li>
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
              <th>Cod OS</th>
              <th>Cadastro</th>
              <th>Descrição</th>
              <th>Observações</th>
              <th>Laudo</th>
              <th>Status</th>
            </tr>
            <tbody>
            <tfoot>
            @foreach($os as $o)
              @if($o->statusOs == 2)
              <tr bgcolor="#66B064">
                @elseif($o->statusOs == 0)
                <tr bgcolor="#E8B67A">
                  @elseif($o->statusOs == 1)
                  <tr bgcolor="#C86762">
                    @elseif($o->statusOs == 3)
                    <tr bgcolor = "#6EC4D2">
                      @elseif($o->statusOs == 4)
                      <tr bgcolor="#9B89BB">
            @endif
                <td>{{$o->codigoOrdemServico}}</td>
                <td>{{date('d/m/Y', strtotime($o->dataCadastro))}}</td>
                <td>{{$o->descricao}}</td>
                <td>{{$o->observacoes}}</td>
                <td>{{$o->laudo}}</td>
                <td>{{$o->statusOs}}</td>
                <td bgcolor="#f0f8ff"><a>  Detalhes/Editar </a></td>
              </tr>
            @endforeach
            </tfoot>
            </tbody>
          </table>
          <div class="dataTables_paginate paging_simple_numbers">
            <center>
            @if($os->hasPages())
              {!! $os->appends($_GET)->links() !!}
            @endif
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
