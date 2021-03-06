
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Añadir Pago'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('Charge', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group col-sm-3">
						<?php echo $this->Form->input('total_cost', array('label'=>'Costo Total','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('person_id', array('label'=>'Paciente','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-3">
						<?php echo $this->Form->input('citation_id', array('label'=>'N° Cita','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6">
						<?php echo $this->Form->input('state_charge', array('label'=>'Estado','type'=>'select','options'=>array(''=>'SELECCIONE','Cancelado'=>'Cancelado','No Cancelado'=>'No Cancelado'),'class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group col-sm-6  ">
						<?php echo $this->Form->input('typepayment_id', array('label'=>'Tipo','class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('observations', array('label'=>'Observacion','class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <center>
					       <?php echo $this->Form->submit('Añadir', array('class' => 'btn btn-large btn-primary')); ?>
          </center>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<div class="btn-group btn-group-justified col-sm-4">

  <?php echo $this->Html->link(__('Nueva Cita'), array('controller'=>'citations','action' => 'add'), array('class' => 'btn btn-info')); ?>
  <?php echo $this->Html->link(__('Lista de Pagos'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
  <?php echo $this->Html->link(__('Nuevo Paciente'), array('controller'=>'people','action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
