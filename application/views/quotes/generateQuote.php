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

									<select class="form-control  basic" id="clients_select"
											onchange="loadClientDetails()">
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
								<h3>Quote Referencing</h3>
								<section>
									<div class="infobox-1">
										<div class="info-icon">
											<h5 class="info-heading">Quote Ref</h5>
											<p><span id="quote_ref"  class="badge badge-warning"> </span>
											</p>
											<h5 class="info-heading">Date</h5>
											<p><span id="quote_date"  class="badge badge-warning"> </span>
											</p>
											<h5 class="info-heading">Title</h5>
											<input type="text" class="form-control" id="quote_title">
										</div>
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
									</div>
										<!--										<p>You Chose: - <b id="subType_text"></b></p>-->
								</section>
								<h3>Edit Rate Card</h3>
								<section>
									<p>Edit Rate Card Details :- <h6 id="table_title"
																	 class="badge badge-warning"></h6></p>
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
										<table id="materials_table"
											   class="table table-bordered table-hover table-striped mb-4"
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
											<div style="position: absolute; top: 0; right: 0;z-index: 9999; margin-left: 20px; margin-right: 20px;">
												<div class="toast toast-primary fade hide" role="alert" data-delay="6000" aria-live="assertive" aria-atomic="true">
													<div class="toast-header">
														<strong class="mr-auto">Additional Material Items </strong>
														<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="toast-body">
														<h5><p  id="toast_body" class="text-success"></p></h5>
													</div>
												</div>
											</div>

											<tbody id="materials_tbody">
											</tbody>
										</table>
									</div>
								</section>
								<h3>Add Notes & Payment Terms</h3>
								<section>
									<p>Enter Payment Terms & Additional Notes</p>
									<div class="input-group mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text">Payment Terms</span>
										</div>
										<textarea id="payment_terms" class="form-control"
												  aria-label="Payment Terms"></textarea>
									</div>
									<div class="input-group mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text">Notes </span>
										</div>
										<div id="autosaving" class="row layout-spacing">
											<div class="col-lg-12">
												<div class="statbox widget box box-shadow">
													<div class="widget-header">
														<div class="row">
															<div class="col-xl-12 col-md-12 col-sm-12 col-12">
																<h4> Notes & Assumptions </h4>
															</div>
														</div>
													</div>
													<div class="widget-content widget-content-area">

                                <textarea id="demo2" style="width: 100%">
									# Autosaving!
									Enter Notes Here
                                </textarea>
													</div>
												</div>
											</div>
										</div>

									</div>
									<a class="btn btn-success mb-2" onclick="generateQuote()">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
											 height="24">
											<path fill="none" d="M0 0h24v24H0z"/>
											<path d="M2.213 14.06a9.945 9.945 0 0 1 0-4.12c1.11.13 2.08-.237 2.396-1.001.317-.765-.108-1.71-.986-2.403a9.945 9.945 0 0 1 2.913-2.913c.692.877 1.638 1.303 2.403.986.765-.317 1.132-1.286 1.001-2.396a9.945 9.945 0 0 1 4.12 0c-.13 1.11.237 2.08 1.001 2.396.765.317 1.71-.108 2.403-.986a9.945 9.945 0 0 1 2.913 2.913c-.877.692-1.303 1.638-.986 2.403.317.765 1.286 1.132 2.396 1.001a9.945 9.945 0 0 1 0 4.12c-1.11-.13-2.08.237-2.396 1.001-.317.765.108 1.71.986 2.403a9.945 9.945 0 0 1-2.913 2.913c-.692-.877-1.638-1.303-2.403-.986-.765.317-1.132 1.286-1.001 2.396a9.945 9.945 0 0 1-4.12 0c.13-1.11-.237-2.08-1.001-2.396-.765-.317-1.71.108-2.403.986a9.945 9.945 0 0 1-2.913-2.913c.877-.692 1.303-1.638.986-2.403-.317-.765-1.286-1.132-2.396-1.001zM4 12.21c1.1.305 2.007 1.002 2.457 2.086.449 1.085.3 2.22-.262 3.212.096.102.195.201.297.297.993-.562 2.127-.71 3.212-.262 1.084.45 1.781 1.357 2.086 2.457.14.004.28.004.42 0 .305-1.1 1.002-2.007 2.086-2.457 1.085-.449 2.22-.3 3.212.262.102-.096.201-.195.297-.297-.562-.993-.71-2.127-.262-3.212.45-1.084 1.357-1.781 2.457-2.086.004-.14.004-.28 0-.42-1.1-.305-2.007-1.002-2.457-2.086-.449-1.085-.3-2.22.262-3.212a7.935 7.935 0 0 0-.297-.297c-.993.562-2.127.71-3.212.262C13.212 6.007 12.515 5.1 12.21 4a7.935 7.935 0 0 0-.42 0c-.305 1.1-1.002 2.007-2.086 2.457-1.085.449-2.22.3-3.212-.262-.102.096-.201.195-.297.297.562.993.71 2.127.262 3.212C6.007 10.788 5.1 11.485 4 11.79c-.004.14-.004.28 0 .42zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
												  fill="rgba(0,0,0,1)"/>
										</svg>
										<b style="color: black">Generate Quote</b>
									</a>
								</section>
								<h3>Preview PDF</h3>
								<section>
									<object id="pdf_obj" data="<?php echo base_url(); ?>assets/quotes/TemplateQuotation.pdf"
													type="application/pdf" height="600px" width="100%">
									<p>It appears you don't have Adobe Reader or PDF support in this web
										browser. <a
												href="<?php echo base_url(); ?>assets/quotes/TemplateQuotation.pdf">Click
											here to download the PDF</a>. Or <a
												href="http://get.adobe.com/reader/"
												target="_blank">click here to
											install Adobe Reader</a>.</p>
									<embed id="pdf_emb"
										   type="application/pdf"/>
									</object>
								</section>
								<h3>Download & Finish</h3>
								<section>
									<div class="infobox-1">
										<div class="info-icon">
											<h5 class="info-heading">Download PDF Document</h5>
											<a id="quote_download_btn" download>
												<button type="button" class="btn btn-warning">Download Quote
												</button>
											</a>
										</div>
									</div>
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
		let clientDetails_ = []
		let job_type_details_ = []
		let job_sub_type_details_ = []
		let rate_card_ = []
		let radiovalues_ = []
		let referenceDetails_ = []
		$(document).ready(function () {
			clients();
			jobTypes();
			references();
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
		function references() {
			let ref_id = ""
			let date_ref = ""
			fetch(this.basePath + '/references')
					.then(response => {
						return response.json()
					})
					.then(data => {
						ref_id = data["quote_ref"];
						date_ref = data["date"];
						referenceDetails_ = {
							"date": date_ref,
							"quote_ref": ref_id
						}
						var date_span = document.getElementById("quote_date");
						var ref_id_span = document.getElementById("quote_ref");
						date_span.textContent = date_ref;
						ref_id_span.textContent = ref_id;
					})
		}

		function loadClientDetails() {
			var client_id = $("#clients_select").val();
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
						//populate global variable
						clientDetails_ = clientDetails
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
			let sub_cat_id = $("#jobSubTypes_select").val();

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
						//populate global variable
						rate_card_.push(ratecard)
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
							var include_icon = '<a ' +
									'class="bs-tooltip" data-toggle="tooltip" data-placement="top" title=""' +
									'data-original-title="Edit">' +
									'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 11V7h2v4h4v2h-4v4h-2v-4H7v-2h4zm1 11C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" fill="rgba(216,176,12,1)"/></svg>' +
									'</a>';
							var radio_btn = '  <div class="n-chk"><label class="new-control new-checkbox new-checkbox-rounded checkbox-success">' +
									'<input type="checkbox" onclick="includeMaterials(' + materials[i].id +  ', \''+  materials[i].description  +'\')"' +
									' name="material_radio_' + materials[i].id +  '"class="new-control-input"><span class="new-control-indicator">' +
									'</span>Add Item </label>	</div>'
							var description = materials[i].description
							var uom = materials[i].UOM
							var quantity = materials[i].quantity
							var proposed_rate = materials[i].rate
							var remarks = materials[i].remarks;
							var action = '<a onclick="disableRow()"' +
									'href="javascript:;" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title=""' +
									'data-original-title="Delete">' +
									'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-5-9h10v2H7v-2z" fill="rgba(216,176,12,1)"/></svg> ' +
									'</a>'
							tr += "<tr id='tr" + i + "'><td>" + include_icon + "</td><td>" + radio_btn + "</td><td id='td_desc'>" + description + "</td><td id='td_uom'>" + uom +
									"</td><td id='td_quantity'>" + quantity + "</td><td id='td_rate'>" + proposed_rate + "</td><td id='td_remarks'>" + remarks + "</td>" + "<td >" + action + "</td></tr>"
						}
						tbody.innerHTML = tr;
					})
		}
		function includeMaterials(id, desc){
			let name = "material_radio_" + id;
			let checkbox_status = $('input[name=' + name + ']:checked').val();
			if (checkbox_status === "on") {
				//add ID to materials to be included array
				radiovalues_.push(id);
				// toast body populate
				document.getElementById("toast_body").innerHTML= "Item " + desc + " added to list."
				//display toast
				$('.toast').toast('show');
			} else {
				let index = radiovalues_.indexOf(id)
				//remove ID from materials to be included array
				radiovalues_.splice(index, 1)
				// toast body populate
				document.getElementById("toast_body").innerHTML= " Item " + desc + " removed to list."
				//display toast
				$('.toast').toast('show');
			}
			console.log(radiovalues_);
		}
		function  generateQuote(){
			/*	step 1. Collect all Quote Data from form fields   */
			let quote_references = referenceDetails_
			let clientDetails = clientDetails_
			let jobTypeName =  $("#jobTypes_select option:selected").text();
			let job_type_id = $("#jobTypes_select").val();
			let job_sub_type_id = $("#jobSubTypes_select").val();
			let job_sub_type_name = $("#jobSubTypes_select option:selected").text();
			let rate_card = rate_card_
			let materials = radiovalues_
			let notes = document.getElementById("demo2").value;
			let payment_terms = document.getElementById("payment_terms").value;
			let title = document.getElementById("quote_title").value;

			console.log("clientDetails")
			console.log(clientDetails)
			console.log("jobTypeName")
			console.log(jobTypeName)
			console.log("job_type_id")
			console.log(job_type_id)
			console.log("job_sub_type_id")
			console.log(job_sub_type_id)
			console.log("job_sub_type_name")
			console.log(job_sub_type_name)
			console.log("rate_card")
			console.log(rate_card)
			console.log("materials")
			console.log(materials)
			console.log("notes")
			console.log(notes)
			console.log("payment_terms")
			console.log(payment_terms)
			/*	step 2. Send Data For processing  */
			if (clientDetails === '') {
				swal.fire({
					title: 'Please Fill In All Required Fields',
					html:	'No Client selected',
					animation: false,
					customClass: 'animated tada',
					padding: '2em'
				})
				return false;
			}
			/*	step 3. receive Quote PDF   */

			Swal.fire({
				title: 'Generating Quote....',
				text: 'Please Wait',
				allowOutsideClick: false,
				onBeforeOpen: () => {
					Swal.showLoading()
				},
			});
			/*send request */
			let headers = {
				'Content-Type': 'application/json;charset=utf-8'
			}
			let data = {
				quote_references : referenceDetails_,
				title : title,
				clientDetails : clientDetails,
				jobTypeName : jobTypeName,
				job_type_id: job_type_id,
				job_sub_type_id: job_sub_type_id,
				job_sub_type_name : job_sub_type_name,
				rate_card : rate_card,
				materials : materials,
				notes : notes,
				payment_terms : payment_terms
			};
			console.log(data)
			fetch(this.basePath + '/quote', {
				method: 'POST',
				headers: headers,
				body: JSON.stringify(data)
			})
					.then(response => {
						if (response.ok) {
							Swal.fire(
									'Quote Generated!',
									'Click next to Preview',
									'success'
							)
						}
					}).then(data => {
				let x = getPdfUrl();
			})
		}

		function getPdfUrl() {
			fetch(this.basePath + '/getPdfUrl')
					.then(response => {
						return response.json()
					})
					.then(data => {
						let url = data["url"];
						document.getElementById("pdf_obj").setAttribute("data", url)
						document.getElementById("pdf_emb").setAttribute("src", url)
						document.getElementById("quote_download_btn").setAttribute("target", "_blank")
						document.getElementById("quote_download_btn").setAttribute("href", url)
					})
		}

		function editRow() {

		}

		function add_row_modal() {
		}

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
