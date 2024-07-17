<main>
	<section class="section" id="register">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians</p>
				<h2>New Registration</h2>
			</div>
			<?= form_open("api/v2/registration/new", ['id' => "registerForm"]) ?>
			<div class="row g-3 g-md-5">
				<div class="col-xl-7 col-md-6 col-12">
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
						<a href="<?= base_url('') ?>" class="btn btn-pink btn-hover-gold btn-lg"><i class="fa-regular fa-file-word me-2"></i>Download</a>
					</div>
				</div>
				<div class="col-xl-5 col-md-6 col-12">
					<div class="row">
						<div class="col-lg-7 col-md-6">
							<div class="mb-3">
								<label for="" class="form-label">Name</label>
								<input name="name" type="text" class="form-control" required>
							</div>
						</div>
						<div class="col-lg-5 col-md-6">
							<div class="mb-3">
								<label for="" class="form-label">Number</label>
								<input name="contact" type="text" class="form-control" required>
							</div>
						</div>
						<div class="col-12">
							<div class="mb-3">
								<label for="" class="form-label">Email</label>
								<input name="email" type="email" class="form-control" required>
							</div>
						</div>
						<div class="col-12">
							<div class="mb-3">
								<label for="" class="form-label">Organization</label>
								<input name="organization" type="text" class="form-control" required>
							</div>
						</div>
						<div class="col-lg-7 col-md-6">
							<div class="mb-3">
								<label for="" class="form-label">Designation</label>
								<input name="desgination" type="text" class="form-control" required>
							</div>
						</div>
						<div class="col-lg-5 col-md-6">
							<div class="mb-3">
								<label for="" class="form-label">City</label>
								<input name="city" type="text" class="form-control" required>
							</div>
						</div>
						<div class="col-12">
							<button type="reset" class="btn btn-secondary me-2"><i class="fa-solid fa-arrow-rotate-left me-2"></i>Reset</button>
							<button type="submit" class="btn btn-pink btn-hover-gold">Continue Registration <i class="fa-solid fa-arrow-right ms-2"></i></button>
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
		$("#registerForm").validate();
	});
</script>
