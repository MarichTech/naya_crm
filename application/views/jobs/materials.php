<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>
<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="page-header">
			<div class="page-title">
			</div>

		</div>

		<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
			<div class="widget-content widget-content-area br-6">
				<div class="page-title">
					<h3>Materials </h3>
				</div>
				<div class="table-responsive mb-4 mt-4">

					<a href="<?php echo base_url()?>add/material" class="btn btn-primary mb-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line>
						</svg>    - Add New Material
					</a>

					<table id="default-ordering" class="table table-hover" style="width:100%">
						<thead>
						<tr>
							<th>#</th>
							<th>Description</th>
							<th>UOM</th>
							<th>Quantity</th>
							<th>Proposed Rate</th>
							<th>Remarks</th>
							<th>Date Created</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php $i = 1;

						foreach ( $materials as $material ) {
							?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $material->description ?></td>
								<td><?php echo $material->UOM ?></td>
								<td><?php echo $material->quantity ?></td>
								<td><?php echo $material->rate ?></td>
								<td><?php echo $material->remarks ?></td>
								<td><?php echo $material->date_created ?></td>

								<td class="text-center">
									<a href="<?php echo base_url() .'settings/users/edit/'.$material->id ?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
									<a onclick="confirmDelete('<?php echo base_url() .'settings/users/delete/'.$material->id ?>')" href="javascript:;" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
									</ul>
								</td>
							</tr>
							<?php $i++;
						} ?>
						</tbody>
						<tfoot>
						<tr>
							<th>#</th>
							<th>Description</th>
							<th>UOM</th>
							<th>Quantity</th>
							<th>Proposed Rate</th>
							<th>Remarks</th>
							<th>Date Created</th>
							<th class="invisible"></th>
						</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>

	</div>

	<?php $this->load->view('templates/footer'); ?>
