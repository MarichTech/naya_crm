<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>
	<!--  BEGIN CONTENT AREA  -->
	<div id="content" class="main-content">
		<div class="">
			<div class="">
				<div id="navSection" data-spy="affix" class="nav  sidenav">
					<div class="sidenav-content">
						<a href="#wizards_pills" class="active nav-link">New Quote</a>
					</div>
				</div>

				<div class="row layout-top-spacing" id="cancel-row">

					<div id="wizards_pills" class="col-lg-12">
						<div class="seperator-header">
							<h4 class="">New Quote</h4>
						</div>
					</div>

					<div class="col-lg-12 layout-spacing">
						<div class="statbox widget box box-shadow">
							<div class="widget-header">
								<div class="row">
									<div class="col-xl-12 col-md-12 col-sm-12 col-12">
										<h4>Generate New Quote</h4>
									</div>
								</div>
							</div>
							<div class="widget-content widget-content-area">
								<div id="pill-vertical"">
									<h3>Select Client</h3>
									<section>
										<p>Select a Client to begin</p>

										<select class="form-control  basic" id="clients_select" onchange="loadClientDetails()">
										</select>

										<div class="infobox-1">
											<div class="info-icon">
												<h5 class="info-heading">Client Name</h5>
												<p class="info-link badge badge-warning" id="client_name"></p>
											</div>
											<div class="info-icon">
												<h5 class="info-heading">Email</h5>
												<p class="info-link badge badge-warning"  id="client_email"></p>
											</div>
											<div class="info-icon">
												<h5 class="info-heading">Mobile</h5>
												<p class="info-link badge badge-warning"  id="client_mobile"></p>
											</div>

												<div class="info-icon">
													<h5 class="info-heading">Address</h5>
													<p class="info-link badge badge-warning"  id="client_address"></p>
												</div>
												<div class="info-icon">
													<h5 class="info-heading">Rep Name</h5>
													<p class="info-link badge badge-warning"  id="rep_name"></p>
												</div>
												<div class="info-icon">
														<h5 class="info-heading">Rep Mobile</h5>
														<p class="info-link badge badge-warning"  id="rep_mobile"></p>
													</div>

													<div class="info-icon">
														<h5 class="info-heading">Rep Email</h5>
														<p class="info-link badge badge-warning"  id="rep_email"></p>
													</div>



									</section>
									<h3>Select Job Category</h3>
									<section>
										<select class="form-control  basic" id="jobTypes_select" onchange="jobSubTypes()">
										</select>
										<p>You Chose: - <b id="jobType_text"></b></p>

									</section>
									<h3>Select Job Sub Type</h3>
									<section>
										<select class="form-control  basic" id="jobSubTypes_select" onchange="rateCard()">
										</select>
										<p>You Chose: - <b id="subType_text"></b></p>
									</section>
										<h3>Edit Rate Card</h3>
									<section>
										<p>Edit Rate Card Details.</p>
										<div class="table-responsive mb-4 mt-4">
										<table id="rate_card_table" class="multi-table table table-hover" style="width:100%">
											<thead>
											<tr>
												<th>#</th>
												<th>Description</th>
												<th>UOM</th>
												<th>Quantity</th>
												<th>Proposed Rate</th>
												<th>Remarks</th>
												<th>Action</th>
											</tr>
											</thead>
											<tbody id="rate_card_tbody">
											</tbody>
										</table>
										</div>
									</section>
										<h3>Enter Quantities</h3>
									<section> <p>The next and previous buttons help you to navigate through your content.</p> </section>
										<h3>Add Materials</h3>
									<section> <p>The next and previous buttons help you to navigate through your content.</p> </section>
										<h3>Add Notes & Assumptions</h3>
									<section> <p>The next and previous buttons help you to navigate through your content.</p> </section>
										<h3>Download PDF</h3>
									<section> <p>The next and previous buttons help you to navigate through your content.</p> </section>
										<h3>Add Status Flag</h3>
									<section> <p>The next and previous buttons help you to navigate through your content.</p> </section>


								</div>

								<div class="code-section-container show-code">

									<button class="btn toggle-code-snippet"><span>Naya Solutions</span></button>

									<div class="code-section text-left">

									</div>
								</div>

							</div>
						</div>
					</div>





				</div>

			</div>
		</div>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	var basePath = "http://localhost/naya_crm";

	$(document).ready(function() {

		clients();
		jobTypes();

	});
	function clients() {
		let clients = []
		var select = document.getElementById("clients_select");
		var options = '<option value="" readonly="readonly" >Select Client</option>'
		fetch(this.basePath + '/clients')
				.then(response => {
					return response.json()
				})
				.then(data => {
					clients = data["clients"];
					for (let i = 0; i < clients.length; i++) {
						let option = '<option value="' + clients[i]["client_id"] + '">' + clients[i]["name"] + '</option>'
						options += option;
					}
					select.innerHTML = options;
					sortClients()
				})
	}
	function loadClientDetails() {
		var  client_id =    $("#clients_select").val(); ;
		let data = {
			client_id : client_id
		}
		console.log(data)
		let headers = {
			'Content-Type': 'application/json;charset=utf-8'
		};
		fetch(this.basePath + '/clientDetails', {
			method: 'POST',
			headers: headers,
			body:  (JSON.stringify(data))
		})
				.then(response => {
					return response.json()
				})
				.then(data => {
					let clientDetails = data["client"][0];
					console.log("clientDetai;s")
					console.log(clientDetails['name']);

					document.getElementById("client_name").innerText = clientDetails["name"];
					document.getElementById("client_email").innerText = clientDetails["email"];
					document.getElementById("client_mobile").innerText = clientDetails["mobile"];
					document.getElementById("client_address").innerText = clientDetails["address"];
					document.getElementById("rep_mobile").innerText = clientDetails["rep_mobile"];
					document.getElementById("rep_name").innerText = clientDetails["rep_name"];
					document.getElementById("rep_email").innerText = clientDetails["rep_email"];


				})

	}

	function jobTypes() {
		let jobTypes = []
		var select = document.getElementById("jobTypes_select");
		var options = '<option value="" readonly="readonly" >Select Job Type</option>'
		fetch(this.basePath + '/jobTypes')
				.then(response => {
					return response.json()
				})
				.then(data => {

					jobTypes = data["jobTypes"];

					for (let i = 0; i < jobTypes.length; i++) {
						let option = '<option value="' + jobTypes[i]["category_id"] + '">' + jobTypes[i]["name"] + '</option>'
						options += option;
					}
					select.innerHTML = options;
				})
	}
	function jobSubTypes() {
		let jobSubTypes = []
		var select = document.getElementById("jobSubTypes_select");
		var options = '<option value="" readonly="readonly" >Select Job Sub Type</option>'
		fetch(this.basePath + '/jobSubTypes')
				.then(response => {
					return response.json()
				})
				.then(data => {

					jobSubTypes = data["jobSubTypes"];

					for (let i = 0; i < jobSubTypes.length; i++) {
						let option = '<option value="' + jobSubTypes[i]["sub_cat_id"] + '">' + jobSubTypes[i]["name"] + '</option>'
						options += option;
					}
					select.innerHTML = options;
				})
	}
	function rateCard() {
		let rateCard = []
		fetch(this.basePath + '/rateCard')
				.then(response => {
					return response.json()
				})
				.then(data => {

					ratecard = data["rateCard"];
					var tbody = document.getElementById("rate_card_tbody" + this.counter);
					var tr = '';
					var total = 0
					for (let i = 0; i < rateCard.length; i++) {
						var description = ratecard[i].description
						var uom = ratecard[i].UOM
						var quantity = ratecard[i].quantity
						var proposed_rate = ratecard[i].rate
						var remarks = ratecard[i].remarks;
						var action = '<a onclick="editRow()"' +
								'class="bs-tooltip" data-toggle="tooltip" data-placement="top" title=""' +
								'data-original-title="Edit">' +
								'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"' +
								'fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"' +
								'stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">' +
								'<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>' +
								'</svg>' +
								'</a>' +
								'<a onclick="disableRow()"' +
								'href="javascript:;" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title=""' +
								'data-original-title="Delete">' +
								'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line></svg> ' +
								'</a>'
						tr += "<tr id='tr" + i + "'><td>" + (i + 1) + "</td><td id='td_desc'>" + description + "</td><td id='td_uom'>" + uom +
								"</td><td id='td_quantity'>" + quantity + "</td><td id='td_rate'>" + proposed_rate + "</td><td id='td_remarks'>" + remarks + "</td>" + "<td >" + action + "</td></tr>"
					}

				})
	}


	function sortClients() {

		$("#clients_select").append($("#clients_select option")
				.remove().sort(function (a, b) {
					var at = $(a).text(),
							bt = $(b).text();
					return (at > bt) ? 1 : ((at < bt) ? -1 : 0);
				}));
	}
</script>
