<?php $__env->startSection('title', 'Nsys OS'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Lista de ordens de serviço</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content-header">
  <h1>
    OS
    <small>Dashboard</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="#">Produção</a></li>
    <li class="active">Ordens de serviço - OS</li>
  </ol>
</section>

<section class="content">
<?php echo Charts::styles(); ?>

<!-- Main Application (Can be VueJS or other JS framework) -->
<div class="box">
  <div class="box-header with-border">
    <div class="app">
      <?php echo $chart->html(); ?>

    </div>
    <div class="col-sm-3 col-xs-10">
      <div class="box-header with-border">
        <div class="app">
          <?php echo $chartpie->html(); ?>

        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Main Application (Can be VueJS or other JS framework) -->


  <!-- End Of Main Application -->
  <?php echo Charts::scripts(); ?>

  <?php echo $chart->script(); ?>


<?php echo Charts::styles(); ?>



  <!-- End Of Main Application -->
  <?php echo Charts::scripts(); ?>

  <?php echo $chartpie->script(); ?>

</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header with-border">
          <a class="btn btn-primary navbar-btn"><i class="fa fa-plus"></i></a>
        </div>

        <div class="box-body table-responsive no-padding">
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
            <?php $__currentLoopData = $os; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($o->statusOs == 2): ?>
              <tr bgcolor="#66B064">
                <?php elseif($o->statusOs == 0): ?>
                <tr bgcolor="#E8B67A">
                  <?php elseif($o->statusOs == 1): ?>
                  <tr bgcolor="#C86762">
                    <?php elseif($o->statusOs == 3): ?>
                    <tr bgcolor = "#6EC4D2">
                      <?php elseif($o->statusOs == 4): ?>
                      <tr bgcolor="#9B89BB">
            <?php endif; ?>
                <td><?php echo e($o->codigoOrdemServico); ?></td>
                <td><?php echo e(date('d/m/Y', strtotime($o->dataCadastro))); ?></td>
                <td><?php echo e($o->descricao); ?></td>
                <td><?php echo e($o->observacoes); ?></td>
                <td><?php echo e($o->laudo); ?></td>
                <td><?php echo e($o->statusOs); ?></td>
                <td bgcolor="#f0f8ff"><a>  Detalhes/Editar </a></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tfoot>
            </tbody>
          </table>
          <div class="dataTables_paginate paging_simple_numbers">
            <center>
            <?php if($os->hasPages()): ?>
              <?php echo $os->appends($_GET)->links(); ?>

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