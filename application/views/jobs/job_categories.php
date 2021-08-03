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
					<h3>Job Categories (Mediums) </h3>
				</div>
				<div class="table-responsive mb-4 mt-4">

					<a onclick="createModal()" class="btn btn-primary mb-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line>
						</svg>   &nbsp;&nbsp; Add New Category
					</a>

					<table id="default-ordering" class="table table-hover" style="width:100%">
						<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Description</th>
							<th>Date Created</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php $i = 1;
						foreach ( $categories as $category) {
							?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $category->name ?></td>
								<td><?php echo $category->description ?></td>
								<td><?php echo $category->date_created ?></td>
								<td class="text-center">
									<?php
										$category_id = $category->category_id;
										$name = $category->name;
										$description = $category->description;
										$date_created = $category->date_created;
									?>
									<a onclick="updateModal(<?php echo "'$category_id'" . ',' ."'$name'" . ',' . "'$description'" .  ',' . "'$date_created'" ?>)" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
									<a onclick="confirmDelete('<?php echo base_url() .'settings/category/delete/'.$category->category_id ?>')" href="javascript:;" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
									</ul>
								</td>
							</tr>
							<?php $i++;
						} ?>
						</tbody>
						<tfoot>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Description</th>
							<th>Date Created</th>
							<th></th>
							<th class="invisible"></th>
						</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>

	</div>

	<!-- Modal Add New Job Category -->
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
					<h5 class="modal-title">Enter Job Category Details</h5>
					<br>
					<br>
					<form id="create_form">
					<div class="form-row">
						
						<div class="form-group col-md-12">
							<label>Name</label><br>
							<input id="modal_name" type="text" class="form-control  basic " name="name" required>

						</div>
						<div class="form-group col-md-12">
							<label>Description</label><br>
							<input id="modal_description" type="text" class="form-control  basic " name="description"   required>
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

	<!-- Modal Update Job Category -->
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
					<h5 class="modal-title">Edit Job Description Details</h5>
					<br>
					<br>
					<form id="update_form">
					<div class="form-row">

						<div class="form-group col-md-12">
							<input id="mod_id" type="text" class="form-control  basic " name="id" required hidden>
							<label>Name</label><br>
							<input id="mod_name" type="text" class="form-control  basic " name="name" required>

						</div>
						<div class="form-group col-md-12">
							<label>Description</label><br>
							<input id="mod_description" type="text" class="form-control  basic " name="description"  required>
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

		function createModal(){
			document.getElementById("create_form").reset();
			$('#createModal').modal('show');
		}

		function create(){
			/*	1. get values from create modal*/
			let name = document.getElementById("modal_name").value;
			let description  = document.getElementById("modal_description").value;
						
			/*	2. Update data  */
			//check data
			if (name === ''|| description === '' ) {
				swal.fire({
					title: 'Please Fill In All Required Fields',
					animation: false,
					customClass: 'animated tada',
					padding: '2em'
				})
				return false;
			}
			Swal.fire({
				title: 'Adding Staff ....',
				text: 'Please Wait',
				allowOutsideClick: false,
				onBeforeOpen: () => {
					Swal.showLoading()
				},
			});
			// Send AJAX request
			$.ajax({
				url: '<?= base_url() ?>create/job_categories',
				type: 'post',
				dataType: 'JSON',
				data: {
					name : name,
					description : description,
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

		function updateModal(category_id, name, description){
			let mod_id = document.getElementById("mod_id");
			let mod_name = document.getElementById("mod_name");
			let mod_description  = document.getElementById("mod_description");
			
			
		/*	populate modal elements with data */
			mod_id.value = category_id;
			mod_name.value = name;
			mod_description.value = description;
						
			/* show modal */
			$('#editModal').modal('show');
		}

		function update(){
			/*	1. get values of update modal*/
			let category_id = document.getElementById("mod_id").value;
			let name = document.getElementById("mod_name").value;
			let description  = document.getElementById("mod_description").value;
			//check data
			if (name === ''|| description === '' ) {
				swal.fire({
					title: 'Please Fill In All Required Fields',
					animation: false,
					customClass: 'animated tada',
					padding: '2em'
				})
				return false;
			}
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
				url: '<?= base_url() ?>update/job_categories',
				type: 'post',
				dataType: 'JSON',
				data: {
					category_id : category_id,
					name : name,
					description : description,
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

	
