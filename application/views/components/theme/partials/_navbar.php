<nav class="navbar navbar-expand-lg">
	<div class="container">
		<!-- <a class="navbar-brand" href="#">Navbar</a> -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse w-100 justify-content-between me-lg-4" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#about") ?>">About</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Award Entry
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= base_url("#categories") ?>">Categories</a></li>
						<li><a class="dropdown-item disabled" href="<?= base_url("terms/eligibility-criteria") ?>">Eligibility Criteria</a></li>
						<li><a class="dropdown-item disabled" href="<?= base_url("terms/rules-and-regulations") ?>">Rules & Regulations</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Amazing Indians 2023
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= base_url("past-seasons/2023") ?>#episodes">Episodes</a></li>
						<li><a class="dropdown-item" href="<?= base_url("past-seasons/2023") ?>#juries">Juries</a></li>
						<li><a class="dropdown-item" href="<?= base_url("past-seasons/2023") ?>#winners">Winners</a></li>
						<li><a class="dropdown-item" href="<?= base_url("past-seasons/2023") ?>#stories">Stories</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#gallery") ?>">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#articles") ?>">Articles</a>
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
			<img src="<?= base_url("assets/media/logos/") ?>times.png" alt="ICS Logo" height="50">
		</a>
	</div>
</nav>
