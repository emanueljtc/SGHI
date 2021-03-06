
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
		<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><?php echo __('Editar Estudio'); ?></h3>
			</div>
			<div class="box-body table-responsive">

			<?php echo $this->Form->create('Study', array('role' => 'form')); ?>

				<fieldset>

										<div class="form-group">
						<?php echo $this->Form->input('id', array('label'=>'','class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <div class="form-group col-sm-6">
            <?php echo $this->Form->input('person_id', array('label'=>'Paciente','class' => 'form-control')); ?>
          </div><!-- .form-group -->
          <div class="form-group col-sm-6">
            <?php echo $this->Form->input('diagnostic_id', array('label'=>'Diagnostico','class' => 'form-control')); ?>
          </div><!-- .form-group -->
          <div class="form-group">
            <?php echo $this->Form->input('name_studie', array('label'=>'Nombre del Estudio','class' => 'form-control')); ?>
          </div><!-- .form-group -->
          <div class="form-group">
						<?php echo $this->Form->input('functional_exam', array('label'=>'Examen Funcional (Interrogatorio)','class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <div class="form-group col-sm-6">
						<?php echo $this->Form->input('physical_exam', array('label'=>'Examen Fisico','class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <div class="form-group col-sm-6">
						<?php echo $this->Form->input('observations', array('label'=>'Observaciones','class' => 'form-control')); ?>
					</div><!-- .form-group -->
          <center>
            <?php echo $this->Form->submit('Actualizar', array('class' => 'btn btn-large btn-primary')); ?>
         </center>
        </fieldset>

            <?php echo $this->Form->end(); ?>

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<div class="btn-group btn-group-justified col-sm-4">

  <?php echo $this->Html->link(__('Nuevo Diagnostico'), array('controller'=>'diagnostics','action' => 'add'), array('class' => 'btn btn-info')); ?>
  <?php echo $this->Html->link(__('Lista de Estudios'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
  <?php echo $this->Html->link(__('Nuevo Estudio'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
