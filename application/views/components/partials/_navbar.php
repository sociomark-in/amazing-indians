<nav class="navbar navbar-expand-lg">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?= base_url() ?>">
			<img src="<?= base_url("assets/media/logos/") ?>logo3.png" alt="Times Logo" height="70">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse w-100 justify-content-between mx-lg-4 mb-4 mb-md-0" id="navbarNavDropdown">
			<ul class="navbar-nav mb-4 mb-md-0">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#about") ?>">About</a>
				</li>
				<li class="nav-item d-none">
					<a class="nav-link" href="<?= base_url("#agenda") ?>">Agenda</a>
				</li>
				<li class="nav-item dropdown d-none">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						The Awards
					</a>
					<ul class="dropdown-menu">
						<!-- <li><a class="dropdown-item" href="<?= base_url("#categories") ?>">Categories</a></li> -->
						<li><a class="dropdown-item" href="<?= base_url("#winners") ?>">Winners</a></li>
						<li><a class="dropdown-item" href="<?= base_url("terms/eligibility-criteria") ?>">Eligibility Criteria</a></li>
						<!-- <li><a class="dropdown-item disabled" href="<?= base_url("terms/rules-and-regulations") ?>">Rules & Regulations</a></li> -->
						<!-- <li><a class="dropdown-item" href="<?= base_url("terms/terms-and-conditions?mode=view") ?>">Terms & Conditions</a></li> -->
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
				<!-- <li class="nav-item">
					<a class="nav-link" href="<?= base_url("#winners") ?>">Winners 2025</a>
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
				<!-- <li class="nav-item">
					<a class="nav-link" href="<?= base_url("#articles") ?>">Articles</a>
				</li> -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Past Editions
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= base_url("past-seasons/2025") ?>">Amazing Indians 2025</a></li>
						<li><a class="dropdown-item" href="<?= base_url("past-seasons/2024") ?>">Amazing Indians 2024</a></li>
						<!-- <li><a class="dropdown-item" href="<?= base_url("past-seasons/2022") ?>">Amazing Indians 2022</a></li> -->
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#contact") ?>">Contact Us</a>
				</li>
				<li class="nav-item d-none">
					<a class="nav-link" href="<?= base_url("#partners") ?>">Partners</a>
				</li>
			</ul>
			<ul class="navbar-nav gap-2">
				<?php $date = date_create_from_format("Y-m-d H:i:s", SUBMISSION_END_DATE);
				if (new DateTime() <= new DateTime(SUBMISSION_END_DATE)) : ?>
					<li class="nav-item d-none align-items-center gap-1">
						<span class="live-badge pulse"></span><span class="nav-link">Registrations closing on <strong class="text-gold"><?= date_format($date, "F j, Y") ?></strong></span>
					</li>
					<li class="nav-item">
						<a class="btn btn-pink btn-hover-gold" href="https://docs.google.com/forms/d/e/1FAIpQLSe4KHjZIyl3UToNjkv87wq4ZY2GuRXD5DruhN0C23UtYN_DNQ/viewform?usp=publish-editor" target="_blank">Nominate Now</a>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a class="btn btn-pink btn-hover-gold" disabled href="">Registrations Closed</a>
					</li>
				<?php endif ?>
			</ul>
		</div>
		<a class="navbar-brand d-none d-lg-block" href="https://www.timesnownews.com/" target="_blank">
			<img src="<?= base_url("assets/media/logos/") ?>times-white.png" alt="Times Logo" height="50">
		</a>
	</div>
</nav>
