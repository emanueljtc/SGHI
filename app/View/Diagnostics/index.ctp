<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Diagnostics'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Diagnostic'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Diagnostics" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('size_boobs'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('form_boobs'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('symmetry_boobs'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('skin_boobs'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('cap_boobs'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('pussy'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('neck_pussy'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('coloscopia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('ano_ straight'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('head_neck'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('touch_tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('form_tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('surface_tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('contour_tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('axis_tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('consistency_tumor'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('laringoscopia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('menarguia'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('reglas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('prs'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('companion_sexual'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('distance_cap'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('gestas'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('rsi'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('paras'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('abdomen'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('misbirth'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('gynecological_vulva'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('cesareans'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('age_birth_one'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('diagnostico'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('person_id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('history_id'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($diagnostics as $diagnostic): ?>
	<tr>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['size_boobs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['form_boobs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['symmetry_boobs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['skin_boobs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['cap_boobs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['pussy']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['neck_pussy']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['coloscopia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['ano_ straight']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['head_neck']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['touch_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['form_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['surface_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['contour_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['axis_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['consistency_tumor']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['laringoscopia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['menarguia']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['reglas']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['prs']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['companion_sexual']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['distance_cap']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['gestas']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['rsi']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['paras']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['abdomen']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['misbirth']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['gynecological_vulva']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['cesareans']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['age_birth_one']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($diagnostic['Diagnostic']['diagnostico']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($diagnostic['Person']['name'], array('controller' => 'people', 'action' => 'view', $diagnostic['Person']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($diagnostic['History']['id'], array('controller' => 'histories', 'action' => 'view', $diagnostic['History']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $diagnostic['Diagnostic']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $diagnostic['Diagnostic']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->

<?php
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('plugins/datatables/jquery.dataTables');
	echo $this->Html->script('plugins/datatables/dataTables.bootstrap');
?>
<script type="text/javascript">
    $(function() {
        $("#Diagnostics").dataTable();
    });
</script>