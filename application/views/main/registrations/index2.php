<!-- Plugin: Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<main>
	<section class="section" id="register">
		<div class="container">
			<?= form_open("api/v2/registration/new", ['id' => "registerForm"]) ?>
			<div class="row align-items-center g-3 g-md-5">
				<div class="col-xl-7 col-md-6 col-12">
					<div class="section-title mb-3 mb-md-5">
						<p class="">Amazing Indians <?= date('Y') ?></p>
						<h2>New Registration</h2>

						<?php $date = date_create_from_format("Y-m-d H:i:s", SUBMISSION_END_DATE) ?>
					</div>
					<div class="mb-3 d-none">
						<a href="<?= base_url("terms/terms-and-conditions") ?>" target="_blank" class="btn btn-gold btn-hover-white"><i class="fa-regular fa-file-pdf me-2"></i>Download Terms & Conditions PDF</a>
					</div>
					<div class="row g-3">
						<div class="col-12">
							<div class="alert alert-danger" role="alert">
								Registrations closing on <strong><?= date_format($date, "F j, Y") ?> at <?= date_format($date, "g:i A") ?></strong>.
							</div>
							<p>
								Please download the form and fill up with attention to every detail. Once completed, please email the form to <a href="mailto:response@theamazingindians.com">response@theamazingindians.com</a>.
							</p>
							<!-- <a href="<?= base_url("terms/sample-application") ?>" target="_blank" class="btn btn-pink btn-hover-gold btn-lg me-2"><i class="fa-regular fa-file-pdf me-2"></i>Download Dummy Application</a> -->
						</div>
						<div class="col-12">
							<label for="selectCategory" class="form-label" id="">Choose A Category</label>
							<select name="category" id="selectCategory" required>
								<option value="">Select A Category</option>
								<?php foreach ($page['categories'] as $key => $category) : ?>
									<option <?= ($this->input->get('category') == $category['id']) ? "selected" : "" ?> value="<?= $category['name'] ?>"><?= $category['name'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="col-12">
							<label for="" class="form-label" id="">Enter Your Name</label>
							<input type="text" name="name" class="form-control" required>
						</div>
						<div class="col-12">
							<label for="" class="form-label" id="">Enter Contact Number</label>
							<input type="text" name="phone" class="form-control" required>
						</div>
						<div class="col-12">
							<label for="" class="form-label" id="">Enter Email Address</label>
							<input type="email" name="email" class="form-control" required>
						</div>
						<div class="col-12">
							<div class="form-check">
								<input class="form-check-input" name="concent" type="checkbox" id="flexCheckDefault" required>
								<label class="form-check-label" for="flexCheckDefault">
									<p>
										I hereby accept that I have read and understood all the <a href="<?= base_url("terms/terms-and-conditions?mode=view") ?>" class="text-gold" target="_blank">Terms & Conditions</a> for The Amazing Indians Awards <?= date('Y') ?>. By participating in the Awards, I agree to adhere to and be bound by these <a href="<?= base_url("terms/terms-and-conditions?mode=view") ?>" class="text-gold" target="_blank">Terms & Conditions</a>.
									</p>
									<p>Read complete <a href="<?= base_url("terms/eligibility-criteria?mode=view") ?>" target="_blank" class="text-gold">Eligibility Criteria</a> here!</p>
								</label>
							</div>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-pink btn-hover-gold btn-lg me-2"><i class="fa-regular fa-file-word me-2"></i>Download Entry Form</button>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-md-6 col-12">
					<div class="media-content">
						<div class="wrap" data-aos="zoom-in" data-aos-delay="100">
							<img class="w-100" src="<?= base_url("assets/media/images/AI_1920x1080.jpg") ?>" alt="" loading="lazy">
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
<script>
	$.validator.addMethod("emailregex", function(value, element) {
		return this.optional(element) || /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i.test(value);
	})
	$.validator.addMethod("letters", function(value, element) {
		return this.optional(element) || /^[a-zA-Z \s']*$/i.test(value);
	});
	$.validator.addMethod("numbers", function(value, element) {
		return this.optional(element) || /^[0-9 ]*$/i.test(value);
	});
	$(document).ready(function() {
		$("select").each((index, element) => {
			$(element).select2({
				theme: 'bootstrap-5'
			});
		})
		$("#registerForm").validate({
			ignore: [],
			rules: {
				consent: "required",
				name: {
					required: true,
					letters: true,
				},
				phone: {
					numbers: true,
				},
				email: {
					emailregex: true,
				},
			},
			messages: {
				consent: "Please accept the Terms and Conditions.",
				name: {
					letters: "The name must be letters only.",
				},
				phone: {
					numbers: "Contact number is invalid.",
				},
				email: {
					emailregex: "Email is invalid.",
				},
			},
			invalidHandler: function() {}
		});
		$("#flexCheckDefault").on('click', function() {
			if (!$("#flexCheckDefault").is(':checked')) {
				$("#registerForm button[type=submit]").addClass('disabled')
				$("#redirectForm").addClass('disabled')
			} else {
				$("#registerForm button[type=submit]").removeClass('disabled')
				$("#redirectForm").removeClass('disabled')
			}
		})
	});
</script>