<main>
	<section class="section" id="register">
		<div class="container">
			<?= form_open("api/v2/registration/new", ['id' => "registerForm"]) ?>
			<div class="row align-items-center g-3 g-md-5">
				<div class="col-xl-7 col-md-6 col-12">
					<div class="section-title mb-3 mb-md-5">
						<p class="">Amazing Indians</p>
						<h2>New Registration</h2>
					</div>
					<div class="mb-3">
						<!-- <a href="<?= base_url() ?>" class="btn btn-pink btn-hover-gold">Read Our Terms & Conditions<i class="fa-solid fa-arrow-right ms-2"></i></a> -->
						<a href="<?= base_url("terms/terms-and-conditions") ?>" target="_blank" class="btn btn-gold btn-hover-white"><i class="fa-regular fa-file-pdf me-2"></i>Download Terms & Conditions PDF</a>
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" name="concent" type="checkbox" id="flexCheckDefault" required>
						<label class="form-check-label" for="flexCheckDefault">
							<p>
								I hereby accept that I have read and understood all the <a href="<?= base_url("terms/terms-and-conditions") ?>" class="text-gold" target="_blank">Terms & Conditions</a> for The Amazing Indians Awards 2024. By participating in the Awards, I agree to adhere to and be bound by these <a href="<?= base_url("terms/terms-and-conditions") ?>" class="text-gold" target="_blank">Terms & Conditions</a>.
							</p>
							<p>Read complete <a href="<?= base_url("terms/eligibility-criteria") ?>" class="text-gold">Eligibility Criteria</a> here!</p>
						</label>
					</div>
					<div class="">
						<div class="mb-2">
							<h3>Practice and Improvise</h3>
							<p>
								Please download the form by clicking <strong>Download Dummy Application</strong> and familiarise with the questions you will need to answer. Since it is a web based entry form, we recommend that you first fill in all the fields on the downloaded form and then paste into the web form once you sign in.
							</p>
						</div>
						<button type="submit" class="btn btn-pink btn-hover-gold btn-lg me-2 disabled"><i class="fa-regular fa-file-word me-2"></i>Download Entry Form</button>
						<a id="redirectForm" href="https://forms.gle/g8frr5XQr9v31vvC7" target="_blank" class="btn btn-gold btn-hover-white btn-lg disabled">Start Filling Entry<i class="fa-solid fa-arrow-right ms-2"></i></a>
					</div>
				</div>
				<div class="col-xl-5 col-md-6 col-12">
					<div class="media-content">
						<div class="wrap" data-aos="zoom-in" data-aos-delay="100">
							<img class="w-100" src="<?= base_url("assets/media/images/AI_800x1200.jpg") ?>" alt="" loading="lazy">
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
	$(document).ready(function() {
		$("#registerForm").validate({
			rules: {
				consent: "required"
			},
			messages: {
				consent: "Please accept the Terms and Conditions"
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
