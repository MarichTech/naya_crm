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
							<div id="pill-vertical">
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
										<p class="info-link badge badge-warning" id="client_email"></p>
									</div>
									<div class="info-icon">
										<h5 class="info-heading">Mobile</h5>
										<p class="info-link badge badge-warning" id="client_mobile"></p>
									</div>

									<div class="info-icon">
										<h5 class="info-heading">Address</h5>
										<p class="info-link badge badge-warning" id="client_address"></p>
									</div>
									<div class="info-icon">
										<h5 class="info-heading">Rep Name</h5>
										<p class="info-link badge badge-warning" id="rep_name"></p>
									</div>
									<div class="info-icon">
										<h5 class="info-heading">Rep Mobile</h5>
										<p class="info-link badge badge-warning" id="rep_mobile"></p>
									</div>

									<div class="info-icon">
										<h5 class="info-heading">Rep Email</h5>
										<p class="info-link badge badge-warning" id="rep_email"></p>
									</div>


							</section>
							<h3>Select Job Category</h3>
							<section>
								<select class="form-control  basic" id="jobTypes_select" onchange="jobSubTypes()">
								</select>
								<div class="infobox-1">
									<div class="info-icon">
										<h5 class="info-heading">Job Type Selected</h5>
										<p class="info-link badge badge-warning" id="jobType_text"></p>
									</div>
							</section>
							<h3>Select Job Sub Type</h3>
							<section>
								<select class="form-control  basic" id="jobSubTypes_select" onchange="rateCard()">
								</select>
								<div class="infobox-1">
									<div class="info-icon">
										<h5 class="info-heading">Job Type Selected</h5>
										<p class="info-link badge badge-warning" id="subType_text"></p>
									</div>
									<!--										<p>You Chose: - <b id="subType_text"></b></p>-->
							</section>
							<h3>Edit Rate Card</h3>
							<section>
								<p>Edit Rate Card Details :- <h6 id="table_title" class="badge badge-warning"></h6></p>
								<div class="table-responsive mb-4 mt-4">

									<table id="rate_card_table" class="table table-bordered table-striped mb-4"
										   style="width:100%">
										<thead>
										<tr>
											<th>#</th>
											<th>Description</th>
											<th>UOM</th>
											<th>Quantity</th>
											<th>Proposed Rate</th>
											<th>Remarks</th>
											<th>Edit</th>
										</tr>
										</thead>
										<tbody id="rate_card_tbody">
										</tbody>
									</table>
								</div>
							</section>
							<h3>Additional Materials</h3>
							<section>
								<p>Additional Materials </p>
								<div class="table-responsive mb-4 mt-4">
									<table id="materials_table" class="table table-bordered table-hover table-striped mb-4"
										   style="width:100%">
										<thead>
										<tr>
											<th>Include</th>
											<th>#</th>
											<th>Description</th>
											<th>UOM</th>
											<th>Quantity</th>
											<th>Proposed Rate</th>
											<th>Remarks</th>
											<th>Remove</th>
										</tr>
										</thead>
										<tbody id="materials_tbody">
										</tbody>
									</table>
								</div>
							</section>
							<h3>Add Notes & Payment Terms</h3>
							<section>
								<p>The next and previous buttons help you to navigate
									through your content.</p>
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text">Payment Terms</span>
									</div>
									<textarea id="payment_terms" class="form-control" aria-label="Payment Terms"></textarea>
								</div>
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text">Notes </span>
									</div>
									<textarea cols="100"  rows="7" wrap="soft" id="notes" class="form-control" aria-label="Notes"></textarea>
								</div>
								<a class="btn btn-success mb-2">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2.213 14.06a9.945 9.945 0 0 1 0-4.12c1.11.13 2.08-.237 2.396-1.001.317-.765-.108-1.71-.986-2.403a9.945 9.945 0 0 1 2.913-2.913c.692.877 1.638 1.303 2.403.986.765-.317 1.132-1.286 1.001-2.396a9.945 9.945 0 0 1 4.12 0c-.13 1.11.237 2.08 1.001 2.396.765.317 1.71-.108 2.403-.986a9.945 9.945 0 0 1 2.913 2.913c-.877.692-1.303 1.638-.986 2.403.317.765 1.286 1.132 2.396 1.001a9.945 9.945 0 0 1 0 4.12c-1.11-.13-2.08.237-2.396 1.001-.317.765.108 1.71.986 2.403a9.945 9.945 0 0 1-2.913 2.913c-.692-.877-1.638-1.303-2.403-.986-.765.317-1.132 1.286-1.001 2.396a9.945 9.945 0 0 1-4.12 0c.13-1.11-.237-2.08-1.001-2.396-.765-.317-1.71.108-2.403.986a9.945 9.945 0 0 1-2.913-2.913c.877-.692 1.303-1.638.986-2.403-.317-.765-1.286-1.132-2.396-1.001zM4 12.21c1.1.305 2.007 1.002 2.457 2.086.449 1.085.3 2.22-.262 3.212.096.102.195.201.297.297.993-.562 2.127-.71 3.212-.262 1.084.45 1.781 1.357 2.086 2.457.14.004.28.004.42 0 .305-1.1 1.002-2.007 2.086-2.457 1.085-.449 2.22-.3 3.212.262.102-.096.201-.195.297-.297-.562-.993-.71-2.127-.262-3.212.45-1.084 1.357-1.781 2.457-2.086.004-.14.004-.28 0-.42-1.1-.305-2.007-1.002-2.457-2.086-.449-1.085-.3-2.22.262-3.212a7.935 7.935 0 0 0-.297-.297c-.993.562-2.127.71-3.212.262C13.212 6.007 12.515 5.1 12.21 4a7.935 7.935 0 0 0-.42 0c-.305 1.1-1.002 2.007-2.086 2.457-1.085.449-2.22.3-3.212-.262-.102.096-.201.195-.297.297.562.993.71 2.127.262 3.212C6.007 10.788 5.1 11.485 4 11.79c-.004.14-.004.28 0 .42zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" fill="rgba(0,0,0,1)"/></svg>
									<b style="color: black">Generate Quote</b>
								</a>
							</section>
							<h3>Preview & Download PDF</h3>
							<section><p>The next and previous buttons help you to navigate through your content.</p>
							</section>
							<h3>Share & Add Status Flag</h3>
							<section><p>The next and previous buttons help you to navigate through your content.</p>
							</section>


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

	$(document).ready(function () {
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
		var client_id = $("#clients_select").val();
		;
		let data = {
			client_id: client_id
		}
		console.log(data)
		let headers = {
			'Content-Type': 'application/json;charset=utf-8'
		};
		fetch(this.basePath + '/clientDetails', {
			method: 'POST',
			headers: headers,
			body: (JSON.stringify(data))
		})
				.then(response => {
					return response.json()
				})
				.then(data => {
					let clientDetails = data["client"][0];
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
		//show user selection
		var job_id = $("#jobSubTypes_select").val();
		;
		let select = document.getElementById("jobTypes_select");
		let job_name = select.options[select.selectedIndex].text;
		document.getElementById("jobType_text").innerText = job_name;
		//fetch subTypes
		let jobSubTypes = []
		select = document.getElementById("jobSubTypes_select");
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
		/*1. show user selection*/
		let select = document.getElementById("jobSubTypes_select");
		let subTypeName = select.options[select.selectedIndex].text;
		var sub_cat_id = $("#jobSubTypes_select").val();
		;
		let data = {
			sub_cat_id: sub_cat_id
		}
		document.getElementById("subType_text").innerText = subTypeName;
		/*2. Fetch Rate Card*/
		let ratecard = []
		let headers = {
			'Content-Type': 'application/json;charset=utf-8'
		};
		fetch(this.basePath + '/ratecard', {
			method: 'POST',
			headers: headers,
			body: (JSON.stringify(data))
		})
				.then(response => {
					return response.json()
				})
				.then(data => {
					ratecard = data["ratecard"];
					document.getElementById("table_title").innerText = ratecard[0]["subType"];
					var tbody = document.getElementById("rate_card_tbody");
					var tr = '';
					var total = 0
					for (let i = 0; i < ratecard.length; i++) {
						var description = ratecard[i].description
						var uom = ratecard[i].UOM
						var quantity = ratecard[i].quantity
						var proposed_rate = ratecard[i].rate
						var remarks = ratecard[i].remarks;
						var action = '<a onclick="editRow()"' +
								'class="bs-tooltip" data-toggle="tooltip" data-placement="top" title=""' +
								'data-original-title="Edit">' +
								'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M5 19h1.414l9.314-9.314-1.414-1.414L5 17.586V19zm16 2H3v-4.243L16.435 3.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L9.243 19H21v2zM15.728 6.858l1.414 1.414 1.414-1.414-1.414-1.414-1.414 1.414z" fill="rgba(216,176,12,1)"/></svg>' +
								'</a>'
						tr += "<tr id='tr" + i + "'><td>" + (i + 1) + "</td><td id='td_desc'>" + description + "</td><td id='td_uom'>" + uom +
								"</td><td id='td_quantity'>" + quantity + "</td><td id='td_rate'>" + proposed_rate + "</td><td id='td_remarks'>" + remarks + "</td>" + "<td >" + action + "</td></tr>"
					}
						tbody.innerHTML = tr;
				})
		materials()
	}

	function materials() {
		let materials = []
		fetch(this.basePath + '/material')
				.then(response => {
					return response.json()
				})
				.then(data => {
					materials = data["materials"];
					var tbody = document.getElementById("materials_tbody");
					var tr = '';
					for (let i = 0; i < materials.length; i++) {
						var include_icon = '<a onclick="editRow()"' +
								'class="bs-tooltip" data-toggle="tooltip" data-placement="top" title=""' +
								'data-original-title="Edit">' +
								'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 11V7h2v4h4v2h-4v4h-2v-4H7v-2h4zm1 11C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" fill="rgba(216,176,12,1)"/></svg>' +
								'</a>';
						var description = materials[i].description
						var uom = materials[i].UOM
						var quantity = materials[i].quantity
						var proposed_rate = materials[i].rate
						var remarks = materials[i].remarks;
						var action = 	'<a onclick="disableRow()"' +
								'href="javascript:;" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title=""' +
								'data-original-title="Delete">' +
								'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-5-9h10v2H7v-2z" fill="rgba(216,176,12,1)"/></svg> ' +
								'</a>'
						tr += "<tr id='tr" + i + "'><td>" + include_icon + "</td><td>"+  (i + 1)  +"</td><td id='td_desc'>" + description + "</td><td id='td_uom'>" + uom +
								"</td><td id='td_quantity'>" + quantity + "</td><td id='td_rate'>" + proposed_rate + "</td><td id='td_remarks'>" + remarks + "</td>" + "<td >" + action + "</td></tr>"
					}
					tbody.innerHTML = tr;
				})
	}
	function editRow() {

	}
	function add_row_modal(){}
	function disableRow() {

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
