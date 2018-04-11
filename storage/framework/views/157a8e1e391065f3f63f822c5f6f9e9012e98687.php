<?php $__env->startSection('title', 'Nsys Boletos'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Lista de boletos no sistema</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
            <?php $__currentLoopData = $boletos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boleto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($boleto->codigoBoleto); ?></td>
                <td><?php echo e($boleto->Instrucao1); ?></td>
                <td><?php echo e($boleto->numeroDocumento); ?></td>
                <td><?php echo e(number_format($boleto->valorDevido, 2, ',' , '.')); ?></td>
                <td><?php echo e(date('d/m/Y', strtotime($boleto->dataDeVencimento))); ?></td>
                <td><?php echo e(number_format($boleto->valorPago, 2, ',' , '.')); ?></td>
                <td><?php echo e(date('d/m/Y', strtotime($boleto->dataDePagamento))); ?></td>
                <td><a>  Detalhes/Editar </a></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tfoot>
            </tbody>
          </table>
          <div class="dataTables_paginate paging_simple_numbers">
            <center>
            <?php if($boletos->hasPages()): ?>
              <?php echo $boletos->appends($_GET)->links(); ?>

            <?php endif; ?>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>