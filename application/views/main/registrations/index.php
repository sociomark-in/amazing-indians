<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?= base_url("assets/css/") ?>dropify-custom.min.css">

<main>
	<section class="section" id="register">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians</p>
				<h2>New Registration</h2>
			</div>
			<?= form_open_multipart("api/v2/registration/new", ['id' => "registerForm"]) ?>
			<div class="row g-3 g-md-5">
				<div class="col-12">
					<div class="card-plain form-tile">
						<div class="card-body">
							<h4 class="mb-2 mb-md-3">Choose A Category</h4>
							<div class="row g-3">
								<div class="col-12">
									<select name="category" id="">
										<?php foreach ($page['categories'] as $key => $category) : ?>
											<option <?= ($this->input->get('category') == $category['id']) ? "selected" : "" ?> value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="card-plain form-tile">
						<div class="card-body">
							<div class="mb-3 mb-md-5">
								<h4 class="mb-2 mb-md-3">Participant's Details</h4>
								<div class="row g-3">
									<div class="col-12">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-6 col-12">
												<label for="" class="form-label">Passport Size Photo</label>
												<input type="file" accept="image/*" name="photo" class="dropify" data-default-file="" data-max-file-size="250K" data-allowed-file-extensions="jpg" />
												<span class="form-text">(JPG etc.)</span>
											</div>
										</div>
									</div>
									<div class="col-lg-7 col-md-6">
										<div class="">
											<label for="" class="form-label">Name</label>
											<input name="name" type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-lg-5 col-md-6">
										<div class="">
											<label for="" class="form-label">Number</label>
											<input name="contact" type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-12">
										<div class="">
											<label for="" class="form-label">Email</label>
											<input name="email" type="email" class="form-control" required>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="">
											<label for="stateSelect" class="form-label">State</label>
											<select name="state" id="stateSelect" class="form-control" required>
												<option value="">Select A State</option>
											</select>
										</div>
										<script>
											$.ajax({
												url: "<?= base_url("api/v2/data/get_states") ?>",
												success: (data) => {
													html = "<option value =''>Select A State</option>";
													data.forEach(element => {
														html += "<option value ='" + element + "'>" + element + "</option>";
													});
													$("#stateSelect").html(html);
												}
											})
										</script>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="">
											<label for="citySelect" class="form-label">City</label>
											<select name="city" id="citySelect" class="form-control" required>
												<option value="">Select A State First</option>
											</select>
										</div>
										<script>
											$("#stateSelect").on('change', () => {
												$.ajax({
													url: "<?= base_url("api/v2/data/get_city") ?>",
													async: false,
													data: {
														'state': $("#stateSelect").val()
													},
													method: "GET",
													success: (result) => {
														html = "<option value =''>Select A City</option>";
														result.forEach(element => {
															html += "<option value ='" + element + "'>" + element + "</option>";
														});
														$("#citySelect").html(html);
													}
												})
											})
										</script>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="">
											<label for="relativeDOB" class="form-label">Date of Birth</label>
											<input name="dob" id="relativeDOB" type="date" class="form-control" required>
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="">
											<label for="" class="form-label">Education Qualifications</label>
											<input name="education" type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="">
											<label for="" class="form-label">Occupation</label>
											<input name="occupation" type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="">
											<label for="" class="form-label">Organization</label>
											<input name="organization" type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="">
											<label for="" class="form-label">Designation</label>
											<input name="designation" type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="">
											<label for="" class="form-label">Work Location</label>
											<input name="work_location" type="text" class="form-control" required>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-3 mb-md-5">
								<h4 class="mb-2 mb-md-3">Participant's Profile</h4>
								<div class="row g-3">
									<div class="col-12">
										<div class="">
											<label for="" class="form-label">No. of years contributed as a social worker as on March 31, 2025*</label>
											<input name="case_study[0]" type="number" min="0" max="99" class="form-control" required>
										</div>
									</div>
									<div class="col-12">
										<div class="">
											<label for="" class="form-label">Please describe your journey as a social worker. What motivated you to choose this path over a traditional professional career?</label>
											<textarea name="case_study[1]" type="text" class="form-control" required></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-3 mb-md-5">
								<h4 class="mb-3 mb-md-4">About Your Initiative / Story</h4>
								<div class="row g-3">
									<div class="col-12">
										<div class="">
											<textarea name="case_study[2]" type="text" class="form-control mb-2" required></textarea>
											<div class="form-text">
												Briefly explain your social initiative including the below facts:
												<ul>
													<li>What problem did your initiative seek to resolve?</li>
													<li>Describe the innovative technologies/ digital components developed or implemented?</li>
													<li>Where is the initiative implemented? (Specify regions, areas, cities, etc.)</li>
													<li>Who are the primary beneficiaries or target audience of your initiative?</li>
													<li>Do you perform the initiative with a team? Provide team details or people involved and specify your individual contribution to the initiative.</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="">
											<label for="" class="form-label">Details on assistance received</label>
											<textarea name="case_study[3]" type="text" class="form-control mb-2" required></textarea>
											<div class="form-text">
												Elaborate on what kind of support (financial, technical, manpower, etc.) have you received for your initiatives?
												<ul>
													<li>What kind of funding have you received? (if applicable)</li>
													<li>Do you have any partners or collaborators supporting your initiative? If so, please describe their role.</li>
													<li>If the initiative includes pricing, then describe upon the revenue model- total cost incurred, operational cost, resource cost, selling price, etc.</li>
													<li>Explain how you balance profitability with social impact to maintain the integrity of your mission to prioritize social good over profit. (if applicable)</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="">
											<label for="" class="form-label">Impact on Stakeholders</label>
											<textarea name="case_study[4]" type="text" class="form-control mb-2" required></textarea>
											<div class="form-text">
												Demonstrate the impact of the initiative on the beneficiaries within the period of <strong>April 01, 2024</strong>, to <strong>March 31, 2025</strong>, covering the following points:
												<ul>
													<li>What regions or communities have benefited from your initiative?</li>
													<li>Describe the measurable outcomes of your initiative (quantitative data, before and after analysis)</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="">
											<label for="" class="form-label">Continuity</label>
											<textarea name="case_study[5]" type="text" class="form-control mb-2" required></textarea>
											<div class="form-text">
												Describe the long-term viability/ continuity of the initiative. What is the potential and growth of the initiative in the future?
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Declarations -->
				<div class="col-12">
					<div class="card-plain form-tile">
						<div class="card-body">
							<h4 class="mb-2 mb-md-3">Declaration</h4>
							<div class="row g-3">
								<div class="col-12">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="declarations[0]" required value="accepted" id="checkDeclarations0">
										<label class="form-check-label" for="checkDeclarations0">
											I /We for and on behalf of my/ our organization declare to have read and understood the rules and
											regulations governing the Awards and voluntarily express our interest in participating in the Event.
										</label>
									</div>
								</div>
								<div class="col-12">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="declarations[1]" required value="accepted" id="checkDeclarations1">
										<label class="form-check-label" for="checkDeclarations1">
											I/We declare that all information submitted as part of our application is complete, true, and accurate.
											We understand that any kind of misrepresentation/ false claims could lead to disqualification at any point
											of evaluation during the Awards.
										</label>
									</div>
								</div>
								<div class="col-12">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="declarations[2]" required value="accepted" id="checkDeclarations2">
										<label class="form-check-label" for="checkDeclarations2">
											I/We declare that the Promoters and Key Managerial Personnel of the participating entity and the
											participant entity itself are not subject to any litigations or disqualifications by any court of law or
											regulatory authorities.
										</label>
									</div>
								</div>
								<div class="col-12">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="declarations[3]" required value="accepted" id="checkDeclarations3">
										<label class="form-check-label" for="checkDeclarations3">
											We authorize the Times Network to use the content submitted as part of my/our entry, in whole or in
											part and use and display such entry, which shall include trade publications, press releases, electronic
											posting on the Awards website, electronic hyperlinks to the website of the Participant, and any display
											format selected by the Times Network during or after the Awards event.
										</label>
									</div>
								</div>
								<div class="col-12">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="declarations[4]" required value="accepted" id="checkDeclarations4">
										<label class="form-check-label" for="checkDeclarations4">
											I/ We further declare and confirm that (I) the decision taken by the investors and/or BCCL will be final
											and binding and we shall not raise or make any claims, allegations or action in respect of the same and the
											event or any part thereof against the investors and/or BCCL, its channels, directors, managements,
											employees, agents or authorised representatives; (ii) we shall not make any statements, claims or press
											releases, in any manner, directly or through any third party, on any public platform including any social
											media or any other online media in respect of our participation, selection and shortlisting or winning (as the case may be) relating to the event and that such act may lead to disqualification
										</label>
									</div>
								</div>
								<div class="col-12">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="declarations[5]" required value="accepted" id="checkDeclarations5">
										<label class="form-check-label" for="checkDeclarations5">
											By submitting an application for the award, I participant agree to abide by and be bound to the Terms &amp;
											Conditions of the awards provided on the official website
										</label>
									</div>
								</div>
								<div class="col-12">
									<button type="reset" onclick="location.reload();" class="btn btn-secondary me-2"><i class="fa-solid fa-arrow-rotate-left me-2"></i>Reset</button>
									<button type="submit" class="btn btn-pink btn-hover-gold">Continue Registration<i class="fa-solid fa-arrow-right ms-2"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?= form_close() ?>
		</div>
	</section>
</main>
<!-- Plugin: JQuery Validator  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js" integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Plugin: JQuery Validator  -->

<!-- Plugin: Summernote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

<!-- Plugin: Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link rel="stylesheet" href="<?= base_url('assets/css/select2-custom.min.css') ?>">

<!-- Plugin: Summernote -->
<script>
	$(document).ready(function() {
		$("#registerForm").validate({
			ignore: [],
		});

		$("textarea").each((index, element) => {
			$(element).summernote({
				tabsize: 2,
				height: 200,
				toolbar: [
					['style', ['style']],
					['font', ['bold', 'underline', 'clear']],
					['para', ['ul', 'ol', 'paragraph']],
					['insert', ['link']],
					['view', ['fullscreen']]
				],
				shortcuts: false,
				callbacks: {
					onPaste: function(e) {
						var clipboardData = e.originalEvent.clipboardData || window.clipboardData;
						var pastedText = '';

						if (clipboardData && clipboardData.getData) {
							// Get plain text data
							pastedText = clipboardData.getData('text/plain');
						} else if (window.clipboardData && window.clipboardData.getData) {
							// Fallback for IE
							pastedText = window.clipboardData.getData('Text');
						}

						// Prevent the default paste behavior which would include formatting
						e.preventDefault();

						// Insert the plain text into Summernote
						// 'insertText' is a Summernote API method to insert text at the current cursor position
						$(element).summernote('insertText', pastedText);
					},
				},
				styleTags: ['p', 'h4', 'h5'],
			})
		})

		$("select").each((index, element) => {
			$(element).select2({
				theme: 'bootstrap-5'
			});
		})
	});
</script>

<!-- Plugin: Dropify -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	$('.dropify').dropify({
		error: {
			'fileSize': 'The file size is too big ({{ value }} max).',
			'minWidth': 'The image width is too small ({{ value }}}px min).',
			'maxWidth': 'The image width is too big ({{ value }}}px max).',
			'minHeight': 'The image height is too small ({{ value }}}px min).',
			'maxHeight': 'The image height is too big ({{ value }}px max).',
			'imageFormat': 'The image format is not allowed ({{ value }} only).'
		}
	});
</script>