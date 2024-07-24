<nav class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url() ?>">
			<img src="<?= base_url("assets/media/logos/") ?>main.png" alt="Times Logo" height="50">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse w-100 justify-content-between me-lg-4 mb-4 mb-md-0" id="navbarNavDropdown">
			<ul class="navbar-nav mb-4 mb-md-0">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#about") ?>">About</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						The Awards
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= base_url("#categories") ?>">Categories</a></li>
						<li><a class="dropdown-item" href="<?= base_url("terms/eligibility-criteria") ?>">Eligibility Criteria</a></li>
						<!-- <li><a class="dropdown-item disabled" href="<?= base_url("terms/rules-and-regulations") ?>">Rules & Regulations</a></li> -->
						<li><a class="dropdown-item" href="<?= base_url("terms/terms-and-conditions") ?>">Terms & Conditions</a></li>
					</ul>
				</li>
				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Jury
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= base_url("#pre_jury") ?>">Pre Jury</a></li>
						<li><a class="dropdown-item" href="<?= base_url("#grand_jury") ?>">Grand Jury</a></li>
					</ul>
				</li> -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#grand_jury") ?>">Jury</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#quotes") ?>">Inspirations</a>
				</li>
				<li class="nav-item d-none">
					<a class="nav-link" href="<?= base_url("#gallery") ?>">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#articles") ?>">Articles</a>
				</li>
				<li class="nav-item dropdown d-none">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Past Editions
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= base_url("past-seasons/2023") ?>">Amazing Indians 2023</a></li>
						<li><a class="dropdown-item" href="<?= base_url("past-seasons/2022") ?>">Amazing Indians 2022</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#contact") ?>">Contact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#partners") ?>">Partners</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="btn btn-pink btn-hover-gold" href="<?= base_url('register-now') ?>">Submit Entry</a>
				</li>
			</ul>
		</div>
		<a class="navbar-brand d-none d-lg-block" href="https://www.timesnownews.com/" target="_blank">
			<img src="<?= base_url("assets/media/logos/") ?>times-white.png" alt="Times Logo" height="50">
		</a>
	</div>
</nav>
