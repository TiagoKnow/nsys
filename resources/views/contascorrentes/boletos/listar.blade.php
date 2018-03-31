@extends('adminlte::page')

@section('title', 'Nsys Boletos')

@section('content_header')
    <h1>Lista de boletos no sistema</h1>
@stop

@section('content')
<section class="content-header">
  <h1>
    Consulta
    <small>Relação simplificada</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="#">Contas correntes</a></li>
    <li><a href="#">Boletos</a></li>
    <li class="active">Listagem de boletos </li>
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
              <th>Cod Boleto</th>
              <th>Descrição</th>
              <th>NDocumento</th>
              <th>Valor devido</th>
              <th>Vencimento</th>
              <th>Valor pago</th>
              <th>Pagamento</th>
            </tr>
            <tbody>
            <tfoot>
            @foreach($boletos as $boleto)
              <tr>
                <td>{{$boleto->codigoBoleto}}</td>
                <td>{{$boleto->Instrucao1}}</td>
                <td>{{$boleto->numeroDocumento}}</td>
                <td>{{number_format($boleto->valorDevido, 2, ',' , '.')}}</td>
                <td>{{date('d/m/Y', strtotime($boleto->dataDeVencimento))}}</td>
                <td>{{number_format($boleto->valorPago, 2, ',' , '.')}}</td>
                <td>{{date('d/m/Y', strtotime($boleto->dataDePagamento))}}</td>
                <td><a>  Detalhes/Editar </a></td>
              </tr>
            @endforeach
            </tfoot>
            </tbody>
          </table>
          <div class="dataTables_paginate paging_simple_numbers">
            <center>
            @if($boletos->hasPages())
              {!! $boletos->appends($_GET)->links() !!}
            @endif
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
