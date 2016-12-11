
<div class="row">
    <div class="col-xs-12">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Vista Cita'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $citation['Citation']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>

			<div class="box-body table-responsive">
                <table id="Citations" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('N° Cita'); ?></strong></td>
		<td>
			<?php echo h($citation['Citation']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Paciente'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($citation['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $citation['Person']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fecha Proxima  Cita'); ?></strong></td>
		<td>
			<?php echo h($citation['Citation']['date_hour']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Estado'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($citation['Datecitation']['state'], array('controller' => 'datecitations', 'action' => 'view', $citation['Datecitation']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Creado'); ?></strong></td>
		<td>
			<?php echo h($citation['Citation']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modificado'); ?></strong></td>
		<td>
			<?php echo h($citation['Citation']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->

		</div><!-- /.view -->


			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Pagos Relacionados'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Charge'), array('controller' => 'charges', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($citation['Charge'])): ?>

					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('N°'); ?></th>
                      <!-- <th class="text-center"><?php echo __('N° Cita'); ?></th> -->
                		<th class="text-center"><?php echo __('Costo Total'); ?></th>
                		<!-- <th class="text-center"><?php echo __('Paciente'); ?></th> -->
                		<th class="text-center"><?php echo __('Estado'); ?></th>
                		<!-- <th class="text-center"><?php echo __('Typepayment Id'); ?></th>
                		<th class="text-center"><?php echo __('Observations'); ?></th>
                		<th class="text-center"><?php echo __('Created'); ?></th>
                		<th class="text-center"><?php echo __('Modified'); ?></th> -->
									<th class="text-center"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($citation['Charge'] as $charge): ?>
		<tr>
			<td class="text-center"><?php echo $charge['id']; ?></td>
      <!-- <td class="text-center"><?php echo $charge['citation_id']; ?></td> -->
			<td class="text-center"><?php echo $charge['total_cost']; ?></td>
			<!-- <td class="text-center"><?php echo $charge['person_id']; ?></td> -->
			<td class="text-center"><?php echo $charge['state_charge']; ?></td>
			<!-- <td class="text-center"><?php echo $charge['typepayment_id']; ?></td>
			<td class="text-center"><?php echo $charge['observations']; ?></td>
			<td class="text-center"><?php echo $charge['created']; ?></td>
			<td class="text-center"><?php echo $charge['modified']; ?></td> -->
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'charges', 'action' => 'view', $charge['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Ver')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'charges', 'action' => 'edit', $charge['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Editar')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'charges', 'action' => 'delete', $charge['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'Eliminar'), __('Esta usted seguro de eliminar el pago # %s?', $charge['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->

				<?php endif; ?>



			</div><!-- /.related -->


	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
