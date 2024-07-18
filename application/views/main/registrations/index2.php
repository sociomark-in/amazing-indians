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
						<a href="" class="btn btn-gold btn-hover-white"><i class="fa-regular fa-file-pdf me-2"></i>Download Terms & Conditions PDF</a>
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" name="concent" type="checkbox" id="flexCheckDefault" required>
						<label class="form-check-label" for="flexCheckDefault">
							<p>
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed ex eveniet nostrum temporibus nemo maxime vel quibusdam error voluptas, perspiciatis nisi optio doloremque, reprehenderit ipsum corporis magni quod blanditiis natus?
							</p>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt corrupti dolor provident sed voluptatem libero doloremque! Inventore perferendis ipsa repudiandae!
							</p>
							<p>Read complete <a href="<?= base_url("terms/eligibility-criteria") ?>" class="text-gold">Eligibility Criteria</a> and <a href="<?= base_url("terms/rules-and-regulations") ?>" class="text-gold">Rule and Regulations</a> here!</p>
						</label>
					</div>
					<div class="">
						<div class="mb-2">
							<h3>Practice and Improvise</h3>
							<p>
								Lorem, ipsum dolor sit amet consectetur adipisicing elit. In libero nostrum enim soluta, sit alias veritatis necessitatibus earum odit. Placeat, enim eveniet quisquam perferendis repellendus ipsa nihil eos optio harum.
							</p>
						</div>
						<button type="submit" class="btn btn-pink btn-hover-gold btn-lg me-2 disabled"><i class="fa-regular fa-file-word me-2"></i>Download Dummy Application</button>
						<a id="redirectForm" href="https://forms.gle/g8frr5XQr9v31vvC7" target="_blank" class="btn btn-gold btn-hover-white btn-lg disabled">Nominate Now<i class="fa-solid fa-arrow-right ms-2"></i></a>
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
			rules:{
				consent:"required"
			},
			messages:{
				consent:  "Please accept the Terms and Conditions"
			}, 
			invalidHandler: function(){}
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
