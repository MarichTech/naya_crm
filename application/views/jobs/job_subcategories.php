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
					<h3>Manage Job Sub Categories </h3>
				</div>
				<div class="table-responsive mb-4 mt-4">

					<a onclick="createModal()" class="btn btn-primary mb-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line>
						</svg>    &nbsp;&nbsp; Add New Sub Category
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
						foreach ( $subcategories as $subcategory) {
							?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $subcategory->name ?></td>
								<td><?php echo $subcategory->description ?></td>
								<td><?php echo $subcategory->date_created ?></td>
								<td class="text-center">
								<?php
										$sub_cat_id = $subcategory->sub_cat_id;
										$name = $subcategory->name;
										$description = $subcategory->description;
										$job_category = $subcategory->category_id;
										$date_created = $subcategory->date_created;
									?>
									<a onclick="updateModal(<?php echo "'$sub_cat_id'" . ',' ."'$name'" . ',' . "'$description'" .  ',' . "'$job_category'" ?>)" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
									<a onclick="confirmDelete()'<?php echo base_url() .'settings/sub_cat/delete/'.$subcategory->sub_cat_id ?>')" href="javascript:;" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
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

	<!-- Modal Add New Job Sub Category -->
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
					<h5 class="modal-title">Enter Job Sub Category Details</h5>
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
						<div class="form-group col-md-12">
							<label>Job Category</label><br>
							<select class="form-control  basic" id="modal_job_subcategory" required>
							</select>
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

	<!-- Modal Update Job Sub Category -->
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
					<h5 class="modal-title">Edit Job Sub Categories Details</h5>
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

						<div class="form-group col-md-12">
							<label>Job Category</label><br>
							<select class="form-control  basic" id="mod_job_category" required>
							</select>
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

		$(document).ready(function () {
			job_categories()
			job_categories_update()
		});

		function job_categories(){
			let job_categories = []
			var select = document.getElementById("modal_job_subcategory")
			var options = '<option value="" readonly="readonly">Select Access Level</option>'
			fetch(this.basePath + '/job_category')
				.then(response => {
					return response.json()
				})
				.then(data => {
					job_categories = data["job_categories"];
					for (let i = 0; i < job_categories.length; i++){
						let option = '<option value="' + job_categories[i]["category_id"] + '">' + job_categories[i]["name"] + '</option>'
					    options += option;
					}
					select.innerHTML = options;
				})
		}

		function job_categories_update(){
			let job_categories = []
			var select = document.getElementById("mod_job_category")
			var options = '<option value="" readonly="readonly">Select Access Level</option>'
			fetch(this.basePath + '/job_category')
				.then(response => {
					return response.json()
				})
				.then(data => {
					job_categories = data["job_categories"];
					for (let i = 0; i < job_categories.length; i++){
						let option = '<option value="' + job_categories[i]["category_id"] + '">' + job_categories[i]["name"] + '</option>'
					    options += option;
					}
					select.innerHTML = options;
				})
		}
		
		function createModal(){
			document.getElementById("create_form").reset();
			$('#createModal').modal('show');
		}

		function create(){
			/*	1. get values from create modal*/
			let name = document.getElementById("modal_name").value;
			let description  = document.getElementById("modal_description").value;
			let job_category = $("#modal_job_subcategory").val();
					
			
			/*	2. Update data  */
			//check data
			if (name === ''|| description === ''|| job_category === '' ) {
				swal.fire({
					title: 'Please Fill In All Required Fields',
					animation: false,
					customClass: 'animated tada',
					padding: '2em'
				})
				return false;
			}
			Swal.fire({
				title: 'Adding Job Sub-Category ....',
				text: 'Please Wait',
				allowOutsideClick: false,
				onBeforeOpen: () => {
					Swal.showLoading()
				},
			});
			// Send AJAX request
			$.ajax({
				url: '<?= base_url() ?>create/job_subcategory',
				type: 'post',
				dataType: 'JSON',
				data: {
					name : name,
					description : description,
					job_category : job_category,
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

		function updateModal(sub_cat_id, name, description, job_category){
			/*get html elements in the modal*/
			let mod_id = document.getElementById("mod_id");
			let mod_name = document.getElementById("mod_name");
			let mod_description  = document.getElementById("mod_description");
			let mod_job_category = document.getElementById("mod_job_category");//$("#mod_access_level").val();
			
		/*	populate modal elements with data */
			mod_id.value = sub_cat_id;
			mod_name.value = name;
			mod_description.value = description;
			mod_job_category.value = job_category;
			
			/* show modal */
			$('#editModal').modal('show');
		}

		function update(){
			/*	1. get values of update modal*/
			let sub_cat_id = document.getElementById("mod_id").value;
			let name = document.getElementById("mod_name").value;
			let description  = document.getElementById("mod_description").value;
			let job_category = $("#mod_job_category").val();
			//check data
			if (name === ''|| description === ''|| job_category === '' ) {
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
				url: '<?= base_url() ?>update/job_subcategories',
				type: 'post',
				dataType: 'JSON',
				data: {
					sub_cat_id : sub_cat_id,
					name : name,
					description : description,
					job_category : job_category,
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
