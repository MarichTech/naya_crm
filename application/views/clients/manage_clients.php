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
					<h3>Manage Clients </h3>
				</div>
				<div class="table-responsive mb-4 mt-4">

					<a onclick="createModal()" class="btn btn-primary mb-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line>
						</svg>    - Add New Client
						</a>

					<table id="default-ordering" class="table table-hover" style="width:100%">
						<thead>
						<tr>
							<th>#</th>
							<th>Logo</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Address</th>
							<th>Contact Name</th>
							<th>Contact Email</th>
							<th>Action</th>
						</tr>
						</thead>
					<tbody>
					<?php $i = 1;
					foreach ( $clients as $client) {
						?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php if(isset($client->logo )) {echo $client->logo ;};?></td>
							<td><?php echo $client->name ?></td>
							<td><?php echo $client->email ?></td>
							<td><?php echo $client->mobile ?></td>
							<td><?php echo $client->address ?></td>
							<td><?php echo $client->rep_name ?></td>
							<td><?php echo $client->rep_email ?></td>
							<td class="text-center">
								<?php $client_id = $client->client_id;
								$name = $client->name;
								$email = $client->email;
								$mobile = $client->mobile;
								$address = $client->address;
								$rep_name = $client->rep_name;
								$rep_email  = $client->rep_email;
								$rep_mobile  = $client->rep_mobile;
								$payment_terms  = $client->payment_terms;
								$vat_type  = $client->vat_type;
								$client_group  = $client->client_group;
								?>
								<a onclick="updateModal(<?php echo "'$client_id'" . ',' . "'$name'" .  ',' . "'$email'" . ',' . "'$mobile'"
										. ',' . "'$address'" . ',' . "'$rep_name'". ',' . "'$rep_email'" . ','  . "'$rep_mobile'" . ',' . "'$payment_terms'" . ',' . "'$vat_type'" . ',' . "'$client_group'" ?>)"
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
							<th>Logo</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Address</th>
							<th>Contact Name</th>
							<th>Contact Email</th>
							<th class="invisible"></th>
						</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>

	</div>
	<!-- Modal  Add New Client  -->
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
					<h5 class="modal-title">Enter Client Details</h5>
					<br>
					<br>
					<form id="create_form">
					<div class="form-row">
						<input id="modal_id" type="hidden" class="form-control  basic " name="client_id" required>
						<div class="form-group col-md-12">
							<label>Name</label><br>
							<input id="modal_name" type="text" class="form-control  basic " name="name" required>

						</div>
						<div class="form-group col-md-6">
							<label>Email</label><br>
							<input id="modal_email" type="text" class="form-control  basic " name="email"  required>
						</div>

						<div class="form-group col-md-6">
							<label>Mobile</label><br>
							<input id="modal_mobile" type="text" class="form-control  basic " name="mobile"   required>
						</div>
						<div class="form-group col-md-6">
							<label>Address</label><br>
							<input id="modal_address" type="text" class="form-control  basic " name="address"   required>
						</div>

						<div class="form-group col-md-6">
							<label>Rep Name</label><br>
							<input id="modal_rep_name" type="text" class="form-control  basic " name="rep_name"   required>
						</div>
							<div class="form-group col-md-6">
							<label>Rep Email</label><br>
							<input id="modal_rep_email" type="text" class="form-control  basic " name="rep_email"   required>
						</div>

						<div class="form-group col-md-6">
							<label>Rep Mobile</label><br>
							<input id="modal_rep_mobile" type="text" class="form-control  basic " name="rep_mobile" required>
						</div>

							<div class="form-group col-md-12">
							<label>Payment Terms</label><br>
							<input id="modal_payment_terms" type="text" class="form-control  basic " name="payment_terms" required>
						</div>
						<div class="form-group col-md-6">
							<label>VAT Type</label><br>
							<select class="form-control  basic" id="modal_vat_type_select" required>
							</select>

						</div>

							<div class="form-group col-md-6">
							<label>Client Group</label><br>
								<select class="form-control  basic" id="modal_client_type_select">
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

	<!-- Modal  Update Client Details -->
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
					<h5 class="modal-title">Edit Client Details</h5>
					<br>
					<br>
					<form id="update_form">
					<div class="form-row">
						<input id="mod_id" type="hidden" class="form-control  basic " name="client_id" required>
						<div class="form-group col-md-12">
							<label>Name</label><br>
							<input id="mod_name" type="text" class="form-control  basic " name="name" required>

						</div>
						<div class="form-group col-md-6">
							<label>Email</label><br>
							<input id="mod_email" type="text" class="form-control  basic " name="email"  required>
						</div>

						<div class="form-group col-md-6">
							<label>Mobile</label><br>
							<input id="mod_mobile" type="text" class="form-control  basic " name="mobile"   required>
						</div>
						<div class="form-group col-md-6">
							<label>Address</label><br>
							<input id="mod_address" type="text" class="form-control  basic " name="address"   required>
						</div>

						<div class="form-group col-md-6">
							<label>Rep Name</label><br>
							<input id="mod_rep_name" type="text" class="form-control  basic " name="rep_name"   required>
						</div>
							<div class="form-group col-md-6">
							<label>Rep Email</label><br>
							<input id="mod_rep_email" type="text" class="form-control  basic " name="rep_email"   required>
						</div>

						<div class="form-group col-md-6">
							<label>Rep Mobile</label><br>
							<input id="mod_rep_mobile" type="text" class="form-control  basic " name="rep_mobile" required>
						</div>

							<div class="form-group col-md-12">
							<label>Payment Terms</label><br>
							<input id="mod_payment_terms" type="text" class="form-control  basic " name="payment_terms" required>
						</div>
						<div class="form-group col-md-6">
							<label>VAT Type</label><br>
							<select class="form-control  basic" id="vat_type_select" required>
							</select>

						</div>

							<div class="form-group col-md-6">
							<label>Client Group</label><br>
								<select class="form-control  basic" id="client_type_select">
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
		let clientDetails_ = []
		let vat_types_ = []
		let client_types_ =[]
		$(document).ready(function () {
			vat_types()
			client_groups()
			vat_types_create()
			client_groups_create()

		})
		function vat_types() {
			let vat_types =[]
			var select = document.getElementById("vat_type_select");
			var options = '<option value="" readonly="readonly" >Select VAT Type</option>'
			fetch(this.basePath + '/vat_types')
					.then(response => {
						return response.json()
					})
					.then(data => {
						vat_types = data["vat_types"];
						for (let i = 0; i < vat_types.length; i++) {
							let option = '<option value="' + vat_types[i]["id"] + '">' + vat_types[i]["description"] + '</option>'
							options += option;
						}
						select.innerHTML = options;
					})

		}
		function vat_types_create() {
			let vat_types = []

			var select = document.getElementById("modal_vat_type_select");
			var options = '<option value="" readonly="readonly" >Select VAT Type</option>'
			fetch(this.basePath + '/vat_types')
					.then(response => {
						return response.json()
					})
					.then(data => {
						vat_types = data["vat_types"];
						for (let i = 0; i < vat_types.length; i++) {
							let option = '<option value="' + vat_types[i]["id"] + '">' + vat_types[i]["description"] + '</option>'
							options += option;
						}
						select.innerHTML = options;
					})

			select.innerHTML = options;

		}

		function client_groups() {
			let client_types = []
			var select = document.getElementById("client_type_select");
			var options = '<option value="" readonly="readonly" >Select Client Type</option>'
			fetch(this.basePath + '/client_types')
					.then(response => {
						return response.json()
					})
					.then(data => {
						client_types = data["client_types"];
						for (let i = 0; i < client_types.length; i++) {
							let option = '<option value="' + client_types[i]["id"] + '">' + client_types[i]["description"] + '</option>'
							options += option;
						}
						select.innerHTML = options;
					})

		}
		function client_groups_create() {
			let client_types = []
			var select = document.getElementById("modal_client_type_select");
			var options = '<option value="" readonly="readonly" >Select Client Type</option>'
			fetch(this.basePath + '/client_types')
					.then(response => {
						return response.json()
					})
					.then(data => {
						client_types = data["client_types"];
						for (let i = 0; i < client_types.length; i++) {
							let option = '<option value="' + client_types[i]["id"] + '">' + client_types[i]["description"] + '</option>'
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
			let email  = document.getElementById("modal_email").value;
			let mobile = document.getElementById("modal_mobile").value;
			let address = document.getElementById("modal_address").value;
			let rep_name = document.getElementById("modal_rep_name").value;
			let rep_mobile = document.getElementById("modal_rep_mobile").value;
			let rep_email = document.getElementById("modal_rep_email").value;
			let payment_terms = document.getElementById("modal_payment_terms").value;
			let vat_type = $("#modal_vat_type_select").val();
			let client_group = $("#modal_client_type_select").val();
			/*	2. Update data  */

			if (vat_type === '' || client_group === '' ) {
				swal.fire({
					title: 'Please Fill In All Required Fields',
					html: 'No VAT Type or Client Group selected',
					animation: false,
					customClass: 'animated tada',
					padding: '2em'
				})
				return false;
			}
			Swal.fire({
				title: 'Adding Client ....',
				text: 'Please Wait',
				allowOutsideClick: false,
				onBeforeOpen: () => {
					Swal.showLoading()
				},
			});
			// Send AJAX request
			$.ajax({
				url: '<?= base_url() ?>create/client',
				type: 'post',
				dataType: 'JSON',
				data: {
					name : name,
					email : email,
					mobile : mobile,
					address : address,
					rep_name : rep_name,
					rep_mobile : rep_mobile,
					rep_email : rep_email,
					payment_terms : payment_terms,
					vat_type : vat_type,
					client_group : client_group,
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
		function updateModal(client_id, name, email, mobile, address, rep_name, rep_email, rep_mobile, payment_terms, vat_type, client_group){
			/*get html elements in the modal*/
			let mod_id = document.getElementById("mod_id");
			let mod_name = document.getElementById("mod_name");
			let mod_email = document.getElementById("mod_email");
			let mod_mobile = document.getElementById("mod_mobile");
			let mod_address = document.getElementById("mod_address");
			let mod_rep_name = document.getElementById("mod_rep_name");
			let mod_rep_email = document.getElementById("mod_rep_email");
			let mod_rep_mobile = document.getElementById("mod_rep_mobile");
			let mod_payment_terms = document.getElementById("mod_payment_terms");
		/*	populate modal elements with data */
			mod_id.value = client_id;
			mod_name.value = name;
			mod_email.value = email;
			mod_mobile.value = mobile;
			mod_address.value = address;
			mod_rep_name.value = rep_name;
			mod_rep_email.value = rep_email;
			mod_rep_mobile.value = rep_mobile;
			mod_payment_terms.value = payment_terms;
			/* show modal */
			$('#editModal').modal('show');

		}
		function update(){
			/*	1. get values of update modal*/
			let client_id = document.getElementById("mod_id").value;
			let name = document.getElementById("mod_name").value;
			let email  = document.getElementById("mod_email").value;
			let mobile = document.getElementById("mod_mobile").value;
			let address = document.getElementById("mod_address").value;
			let rep_name = document.getElementById("mod_rep_name").value;
			let rep_mobile = document.getElementById("mod_rep_mobile").value;
			let rep_email = document.getElementById("mod_rep_email").value;
			let payment_terms = document.getElementById("mod_payment_terms").value;
			let vat_type = $("#vat_type_select").val();
			let client_group = $("#client_type_select").val();
			/*	2. Update data  */

			if (vat_type === '' || client_group === '' ) {
				swal.fire({
					title: 'Please Fill In All Required Fields',
					html: 'No VAT Type or Client Group selected',
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
				url: '<?= base_url() ?>update/client',
				type: 'post',
				dataType: 'JSON',
				data: {
					client_id : client_id,
					name : name,
					email : email,
					mobile : mobile,
					address : address,
					rep_name : rep_name,
					rep_mobile : rep_mobile,
					rep_email : rep_email,
					payment_terms : payment_terms,
					vat_type : vat_type,
					client_group : client_group,
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
