<main>
	<section class="section" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-7 col-lg-6 col-12">
					<div class="page-title">
						<h3 class="text-white text-style-theme text-muted"><i class="fa-regular fa-calendar"></i>&nbsp;&nbsp;<?= date('F j, Y') ?>, New Delhi</h3>
						<h1 class="">Amazing Indians <span class="text-gold">2023</span></h1>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6 col-12">
					<div class="page-title">
						<div class="media-content">
							<img class="w-100" src="https://placehold.co/800x1000" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section" id="episodes">
		<div class="container">
			<div class="row g-md-4 g-3 align-items-center">
				<div class="col-xl-7 col-md-6 col-12">
					<div class="">
						<div class="ratio ratio-16x9">
							<iframe class="" src="https://www.youtube.com/embed/_w_86AAx0gM?si=w_kL2nWrhLoYPCwF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-md-6 col-12">
					<div class="section-title mb-3">
						<p class="">Amazing Indians</p>
						<h2>Watch AI 2023</h2>
					</div>
					<div class="">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio necessitatibus quo, neque veniam ipsam aspernatur tenetur suscipit porro dolorum quibusdam!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section" id="juries">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians</p>
				<h2>Jury 2023</h2>
			</div>
			<div class="">
				<div class="swiper jurySwiper">
					<div class="swiper-wrapper gallery-masonry" id="galleryMasonry">
						<?php for ($i = 0; $i < 20; $i++) : ?>
							<div class="swiper-slide mb-2">
								<a href="" class="speaker-tile">
									<div class="image mb-3">
										<figure>
											<picture>
												<source srcset="https://placehold.co/288x360/webp" type="image/webp">
												<source srcset="https://placehold.co/288x360/jpg" type="image/jpg">
												<img class="w-100" src="https://placehold.co/288x360/jpg" alt="" loading="lazy">
											</picture>
											<figcaption></figcaption>
										</figure>
									</div>
									<div class="text-content p-3 py-0">
										<h5 class="text-gold">Lorem ipsum dolor sit.</h5>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, enim?</p>
									</div>
								</a>
							</div>
						<?php endfor ?>
					</div>
				</div>
				<script>
					new Swiper(".jurySwiper", {
						slidesPerView: 5,
						spaceBetween: 20,
					})
				</script>
			</div>
		</div>
	</section>
</main>
