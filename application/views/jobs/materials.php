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

				<a onclick="createModal()" class="btn btn-primary mb-2">
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
								<?php 
									$material_id = $material->id;
									$description = $material->description;
									$UOM = $material->UOM;
									$quantity = $material->quantity;
									$proposed_rate = $material->rate;
									$remarks = $material->remarks;
									$date_created  = $material->date_created;
								?>
								<a onclick="updateModal(<?php echo "'$material_id'" . ',' ."'$description'" . ',' . "'$UOM'" .  ',' . "'$quantity'" . ',' . "'$proposed_rate'"
										. ',' . "'$remarks'" ?>)"
								   class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
								<a onclick="confirmDelete()" href="javascript:;" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
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

	<!-- Modal Add New Material -->
	<div class="modal animated fadeInUp custo-fadeInUp modal-notification" id="createModal" tabindex="-1"
		 role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" id="">
			<div class="modal-content">
				<div class="modal-body text-center">
					<div class="icon-content">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
							 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
							 class="feather feather-bell">
							<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
							<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
						</svg>
					</div>
					<h5 class="modal-title">Enter Material Details</h5>
					<br>
					<br>
					<form id="create_form">
					<div class="form-row">
						
						<div class="form-group col-md-12">
							<label>Description</label><br>
							<input id="modal_description" type="text" class="form-control  basic " name="name" required>

						</div>
						<div class="form-group col-md-6">
							<label>UOM</label><br>
							<input id="modal_UOM" type="text" class="form-control  basic " name="email"  required>
						</div>

						<div class="form-group col-md-6">
							<label>Quantity</label><br>
							<input id="modal_quantity" type="text" class="form-control  basic " name="mobile"   required>
						</div>
						<div class="form-group col-md-6">
							<label>Proposed Rate</label><br>
							<input id="modal_proposed_rate" type="text" class="form-control  basic " name="address"   required>
						</div>

						<div class="form-group col-md-6">
							<label>Remarks</label><br>
							<input id="modal_remarks" type="text" class="form-control  basic " name="rep_name"  >
						</div>
							
					</div>
					</form>
				</div>
				<div class="modal-footer justify-content-between">
					<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
					<button type="button" onclick="create()" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Update Material Details -->
	<div class="modal animated fadeInUp custo-fadeInUp modal-notification" id="editModal" tabindex="-1"
		 role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" id="">
			<div class="modal-content">
				<div class="modal-body text-center">
					<div class="icon-content">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
							 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
							 class="feather feather-bell">
							<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
							<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
						</svg>
					</div>
					<h5 class="modal-title">Edit Material Details</h5>
					<br>
					<br>
					<form id="update_form">
						
						<div class="form-group col-md-12">
							<input id="mod_id" type="text" class="form-control  basic " name="mod_id" required hidden>
							<label>Description</label><br>
							<input id="mod_description" type="text" class="form-control  basic " name="mod_description" required>

						</div>
						<div class="form-group col-md-6">
							<label>UOM</label><br>
							<input id="mod_uom" type="text" class="form-control  basic " name="mod_uom"  required>
						</div>

						<div class="form-group col-md-6">
							<label>Quantity</label><br>
							<input id="mod_quantity" type="text" class="form-control  basic " name="mod_quantity"   required>
						</div>
						<div class="form-group col-md-6">
							<label>Proposed Rate</label><br>
							<input id="mod_proposed_rate" type="text" class="form-control  basic " name="mod_proposed_rate"   required>
						</div>

						<div class="form-group col-md-6">
							<label>Remarks</label><br>
							<input id="mod_remarks" type="text" class="form-control  basic " name="mod_remarks"  >
						</div>
						</div>
					</form>
				</div>
				<div class="modal-footer justify-content-between">
					<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
					<button type="button" onclick="update()" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('templates/footer'); ?>

	<script type="text/javascript">
		var basePath = "http://localhost/naya_crm";
		let clientDetails_ = []
		let vat_types_ = []
		let client_types_ =[]
		$(document).ready(function () {
			vat_types()
			client_groups()
			vat_types_create()
			client_groups_create()

		})
		
		function createModal(){
			document.getElementById("create_form").reset();
			$('#createModal').modal('show');

		}
		function create(){
			/*	1. get values from create modal*/
			let description = document.getElementById("modal_description").value;
			let UOM  = document.getElementById("modal_uom").value;
			let quantity = document.getElementById("modal_quantity").value;
			let proposed_rate = document.getElementById("modal_proposed_rate").value;
			let remarks = document.getElementById("modal_remarks").value;
			
			/*	2. Update data  */

			Swal.fire({
				title: 'Adding Material ....',
				text: 'Please Wait',
				allowOutsideClick: false,
				onBeforeOpen: () => {
					Swal.showLoading()
				},
			});
			// Send AJAX request
			$.ajax({
				url: '<?= base_url() ?>create/material',
				type: 'post',
				dataType: 'JSON',
				data: {
					description : description,
					UOM : UOM,
					quantity : quantity,
					proposed_rate : proposed_rate,
					remarks : remarks,
				},
				success: function (response) {
					let respons = (response)
					let status = respons.status
					let messageType = respons.messageType
					let message = respons.message
					console.log(respons)
					if (status === true) {
						if (messageType == 1) {
							Swal.fire({
								title: message,
								text: "Redirecting...",
								timer: 10000,
							})
						} else if (messageType == 2) {
							Swal.fire({
								title: 'Failed!',
								text: message,
								timer: 5000,
							})
						}
					} else if (status === false) {
						Swal.fire({
							title: 'Failed!',
							text: message,
							timer: 5000,
						})
					}
					document.getElementById("create_form").reset();
					$('#createModal').modal('hide');
					window.location.reload();
				}
			});
		}
		function updateModal(material_id, description, UOM, quantity, proposed_rate, remarks){
			/*get html elements in the modal*/
			let material_id = document.getElementById("mod_id");
			let description = document.getElementById("mod_description");
			let UOM  = document.getElementById("mod_uom");
			let quantity = document.getElementById("mod_quantity");
			let proposed_rate = document.getElementById("mod_proposed_rate");
			let remarks = document.getElementById("mod_remarks");
			
		/*	populate modal elements with data */
			mod_description.value = descriptiom;
			mod_UOM.value = UOM;
			mod_quantity.value = quantity;
			mod_proposed_rate.value = proposed_rate;
			mod_remarks.value = remarks;
			
			/* show modal */
			$('#editModal').modal('show');

		}
		function update(){
			/*	1. get values of update modal*/
			let material_id = document.getElementById("mod_id");
			let description = document.getElementById("mod_description").value;
			let UOM  = document.getElementById("mod_uom").value;
			let quantity = document.getElementById("mod_quantity").value;
			let proposed_rate = document.getElementById("mod_proposed_rate").value;
			let remarks = document.getElementById("mod_remarks").value;
			/*	2. Update data  */

			Swal.fire({
				title: 'Updating ....',
				text: 'Please Wait',
				allowOutsideClick: false,
				onBeforeOpen: () => {
					Swal.showLoading()
				},
			});
			// Send AJAX request
			$.ajax({
				url: '<?= base_url() ?>update/material',
				type: 'post',
				dataType: 'JSON',
				data: {
					material_id : material_id,
					description : description,
					UOM : UOM,
					quantity : quantity,
					proposed_rate : proposed_rate,
					remarks : remarks,
				},
				success: function (response) {
					let respons = (response)
					let status = respons.status
					let messageType = respons.messageType
					let message = respons.message
					console.log(respons)
					if (status === true) {
						if (messageType == 1) {
							Swal.fire({
								title: message,
								text: "Redirecting...",
								timer: 10000,
							})
						} else if (messageType == 2) {
							Swal.fire({
								title: 'Update Failed!',
								text: message,
								timer: 5000,
							})
						}
					} else if (status === false) {
						Swal.fire({
							title: 'Update Failed!',
							text: message,
							timer: 5000,
						})
					}
					document.getElementById("update_form").reset();
					$('#editModal').modal('hide');
					window.location.reload();
				}
			});
		}
		function confirmDelete(){
			swal({
				title: 'Are you sure?',
				text: "You cannot Delete!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Delete',
				padding: '2em'
			}).then(function(result) {
				if (result.value) {
					swal(
							'Deleted!',
							'Just kidding!! You still cannot delete clients!',
							'success'
					)
				}
			})
		}

</script>


