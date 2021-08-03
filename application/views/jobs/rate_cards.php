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
					<h3>Rate Cards </h3>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-12 col-12 layout-spacing">
					<div class="statbox widget box box-shadow">
						<div class="widget-header">
							<div class="row">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12">
									<h4>Switch Between the Provider Rate Cards</h4>
								</div>
							</div>
						</div>
						<div class="widget-content widget-content-area icon-pill">
							<ul class="nav nav-tabs  mb-3 mt-3" id="iconTab" role="tablist">
								<?php foreach ($providers as $provider){ ?>
								<li class="nav-item">
									<a class="nav-link active" id="icon-home-tab" data-toggle="tab" href="#icon-home" role="tab"
									   aria-controls="icon-home" aria-selected="true"><svg> ... </svg> <?php echo $provider->name ?></a>
								</li>
								<?php } ?>
							</ul>
							<div class="tab-content" id="iconTabContent-1">
								<div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">
									<ul class="nav nav-pills mb-3 mt-3" id="icon-pills-tab" role="tablist">
										<?php
										$count= 0;
										foreach ($ratecards as $ratecard ){
											if($count == 0){ ?>
												<li class="nav-item">
													<a class="nav-link active" id="<?php echo "#main_tab_". $ratecard->id ?>" data-toggle="pill"
													   href="<?php echo "#tab_". $ratecard->id ?>" role="tab" aria-controls="icon-pills-home"
													   aria-selected="true">
														<?php echo $ratecard->svg; ?>
														<?php echo $ratecard->subType; ?></a>
												</li>
											<?php	}else{ ?>
												<li class="nav-item">
													<a class="nav-link" id="<?php echo "#main_tab_". $ratecard->id ?>" data-toggle="pill"
													   href="<?php echo "#tab_". $ratecard->id ?>" role="tab" aria-controls="icon-pills-home" >
														<?php echo $ratecard->svg; ?>
														<?php echo $ratecard->subType; ?></a>
												</li>
												<?php
											}
											$count ++ ;
										}
										?>
									</ul>
									<div class="tab-content" id="icon-pills-tabContent">
										<?php
										$count= 0;


										foreach ($ratecards as $ratecard ){
											$params = array(
													'rate_cards.sub_cat_id' => $ratecard->sub_cat_id
											);
											$ratecars = $this->Data->getRateCard($params);
											//var_dump($ratecars);
											if($count == 0){ ?>
												<div class="tab-pane fade show active" id="<?php echo "tab_". $ratecard->id ?>" role="tabpanel">
													<div class="media">
														<div class="media-body">
														<a onclick="createModal()" class="btn btn-primary mb-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line>
						</svg>    - Add New Rate Card Item
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
																<?php
																$i = 1;
																foreach ($ratecars
																		 as $ratecard){ ?>
																	<tr>
																		<td><?php echo $i ?></td>
																		<td><?php echo $ratecard->description ?></td>
																		<td><?php echo $ratecard->UOM ?></td>
																		<td><?php echo $ratecard->quantity ?></td>
																		<td><?php echo $ratecard->rate ?></td>
																		<td><?php echo $ratecard->remarks ?></td>
																		<td><?php echo $ratecard->date_created ?></td>
																		<td class="text-center">
																		<?php 
																			$material_id = $ratecard->id;
																			$description = $ratecard->description;
																			$UOM = $ratecard->UOM;
																			$quantity = $ratecard->quantity;
																			$proposed_rate = $ratecard->rate;
																			$remarks = $ratecard->remarks;
																			$date_created  = $ratecard->date_created;
																		?>
																			<a onclick="updateModal(<?php echo "'$material_id'" . ',' ."'$description'" . ',' . "'$UOM'" .  ',' . "'$quantity'" . ',' . "'$proposed_rate'"
																				. ',' . "'$remarks'" ?>)"
																			   class="bs-tooltip" data-toggle="tooltip" data-placement="top"
																			   title="" data-original-title="Edit">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																					 viewBox="0 0 24 24" fill="none" stroke="currentColor"
																					 stroke-width="2" stroke-linecap="round"
																					 stroke-linejoin="round"
																					 class="feather feather-edit-2 p-1 br-6 mb-1">
																					<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
																				</svg>
																			</a>
																			<a onclick="confirmDelete('<?php echo base_url() . 'settings/ratecard/delete/' . $ratecard->id ?>')"
																			   href="javascript:;" class="bs-tooltip" data-toggle="tooltip"
																			   data-placement="top" title="" data-original-title="Delete">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																					 viewBox="0 0 24 24" fill="none" stroke="currentColor"
																					 stroke-width="2" stroke-linecap="round"
																					 stroke-linejoin="round"
																					 class="feather feather-trash p-1 br-6 mb-1">
																					<polyline points="3 6 5 6 21 6"></polyline>
																					<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
																				</svg>
																			</a>
																			</ul>
																		</td>
																	</tr>
																	<?php
																	$i++;
																	$count ++ ;
																}?>
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
												<?php
											}else{ ?>
												<div class="tab-pane fade" id="<?php echo "tab_". $ratecard->id ?>" role="tabpanel">
													<div class="media">
														<div class="media-body">
															<div class="table-responsive mb-4 mt-4">
																<table id="" class="multi-table table table-hover" style="width:100%">
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
																	<?php
																	$i = 1;
																	$params = array(
																			'rate_cards.sub_cat_id' => $ratecard->sub_cat_id
																	);
																	$ratecars = $this->Data->getRateCard($params);
																	foreach ($ratecars
																			 as $ratecard){ ?>
																		<tr>
																			<td><?php echo $i ?></td>
																			<td style=" white-space: nowrap;"><?php echo $ratecard->description ?></td>
																			<td><?php echo $ratecard->UOM ?></td>
																			<td><?php echo $ratecard->quantity ?></td>
																			<td><?php echo $ratecard->rate ?></td>
																			<td><?php echo $ratecard->remarks ?></td>
																			<td><?php echo $ratecard->date_created ?></td>
																			<td class="text-center">
																				<a href="<?php echo base_url() . 'settings/ratecard/edit/' . $ratecard->id ?>"
																				   class="bs-tooltip" data-toggle="tooltip" data-placement="top"
																				   title="" data-original-title="Edit">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																						 viewBox="0 0 24 24" fill="none" stroke="currentColor"
																						 stroke-width="2" stroke-linecap="round"
																						 stroke-linejoin="round"
																						 class="feather feather-edit-2 p-1 br-6 mb-1">
																						<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
																					</svg>
																				</a>
																				<a onclick="confirmDelete('<?php echo base_url() . 'settings/ratecard/delete/' . $ratecard->id ?>')"
																				   href="javascript:;" class="bs-tooltip" data-toggle="tooltip"
																				   data-placement="top" title="" data-original-title="Delete">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																						 viewBox="0 0 24 24" fill="none" stroke="currentColor"
																						 stroke-width="2" stroke-linecap="round"
																						 stroke-linejoin="round"
																						 class="feather feather-trash p-1 br-6 mb-1">
																						<polyline points="3 6 5 6 21 6"></polyline>
																						<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
																					</svg>
																				</a>
																				</ul>
																			</td>
																		</tr>
																		<?php
																		$i++;
																		$count ++ ;
																	}?>
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
												<?php
											}
										}?>

									</div>

								</div>

							</div>



						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Modal Add New Rate Card Item -->
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
							<input id="modal_description" type="text" class="form-control  basic " name="description" required>

						</div>
						<div class="form-group col-md-6">
							<label>UOM</label><br>
							<input id="modal_uom" type="text" class="form-control  basic " name="UOM"  required>
						</div>

						<div class="form-group col-md-6">
							<label>Quantity</label><br>
							<input id="modal_quantity" type="text" class="form-control  basic " name="quantity"   required>
						</div>
						<div class="form-group col-md-6">
							<label>Proposed Rate</label><br>
							<input id="modal_proposed_rate" type="text" class="form-control  basic " name="proposed_rate"   required>
						</div>

						<div class="form-group col-md-6">
							<label>Remarks</label><br>
							<input id="modal_remarks" type="text" class="form-control  basic " name="remarks"  >
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
					<div class="form-row">

						<div class="form-group col-md-12">
							<input id="mod_id" type="text" class="form-control  basic " name="id" required hidden>
							<label>Description</label><br>
							<input id="mod_description" type="text" class="form-control  basic " name="description" required>

						</div>
						<div class="form-group col-md-6">
							<label>UOM</label><br>
							<input id="mod_uom" type="text" class="form-control  basic " name="uom"  required>
						</div>

						<div class="form-group col-md-6">
							<label>Quantity</label><br>
							<input id="mod_quantity" type="text" class="form-control  basic " name="quantity"   required>
						</div>
						<div class="form-group col-md-6">
							<label>Proposed Rate</label><br>
							<input id="mod_proposed_rate" type="text" class="form-control  basic " name="proposed_rate"   required>
						</div>

						<div class="form-group col-md-6">
							<label>Remarks</label><br>
							<input id="mod_remarks" type="text" class="form-control  basic " name="remarks"  >
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
				url: '<?= base_url() ?>create/rate_card_item',
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

		function updateModal(material_id, description, uom, quantity, proposed_rate, remarks){
			/*get html elements in the modal*/
			let mod_id = document.getElementById("mod_id");
			let mod_description = document.getElementById("mod_description");
			let mod_UOM  = document.getElementById("mod_uom");
			let mod_quantity = document.getElementById("mod_quantity");
			let mod_proposed_rate = document.getElementById("mod_proposed_rate");
			let mod_remarks = document.getElementById("mod_remarks");
			
		/*	populate modal elements with data */
			mod_id.value = material_id;
			mod_description.value = description;
			mod_UOM.value = uom;
			mod_quantity.value = quantity;
			mod_proposed_rate.value = proposed_rate;
			mod_remarks.value = remarks;
			
			/* show modal */
			$('#editModal').modal('show');

		}

		function update(){
			/*	1. get values of update modal*/
			let material_id = document.getElementById("mod_id").value;
			let description = document.getElementById("mod_description").value;
			let UOM  = document.getElementById("mod_uom").value;
			let quantity = document.getElementById("mod_quantity").value;
			let proposed_rate = document.getElementById("mod_proposed_rate").value;
			let remarks = document.getElementById("mod_remarks").value;

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
