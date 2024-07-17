<!-- Plugin: TypewriterJS -->
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<!-- Plugin: TypewriterJS -->
<main>
	<section>
		<div class="swiper heroSwiper">
			<div class="swiper-wrapper">
				<?php for ($i = 0; $i < 5; $i++) : ?>
					<div class="swiper-slide">
						<div class="hero-slide fullscreen">
							<div class="row">
								<div class="col-xl-5 col-md-6 col-12">
									<div class="media-content">
										<div class="wrap">
											<picture>
												<source srcset="https://placehold.co/400x700/webp" type="image/webp">
												<source srcset="https://placehold.co/400x700/jpg" type="image/jpg">
												<img data-aos="zoom-in" class="h-100 animate" src="https://placehold.co/400x700/jpg" alt="" loading="lazy">
											</picture>
										</div>
									</div>
								</div>
								<div class="col-xl-7 col-md-6 col-12">
									<div class="row align-items-end h-100">
										<div class="col-12">
											<div class="section">
												<div class="text-content">
													<h1 class="mb-0 animate" data-aos="fade-left" data-aos-delay="100">Lorem, ipsum dolor.</h1>
													<h1 class="mb-0 animate" data-aos="fade-left" data-aos-delay="200"><strong>Lorem, ipsum dolor.</strong></h1>
													<h1 class="mb-0 animate" data-aos="fade-left" data-aos-delay="300">Lorem, ipsum dolor.</h1>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="animate element">
								<img src="https://placehold.co/500x800" class="h-100 animate" data-aos="fade-right" data-aos-delay="400" alt="">
							</div>
						</div>
					</div>
				<?php endfor ?>
			</div>
		</div>
		<script>
			heroSwiper = new Swiper(".heroSwiper", {
				loop: true,
				autoplay: {
					duration: 400,
				}

			})
			heroSwiper.on('slideChangeTransitionEnd', () => {
				var currentSlide = $(".swiper-slide-active");
				$(".swiper-slide .animate").each((index, el) => {
					$(el).addClass('d-none');
				})
				$(".swiper-slide-active .animate").each((index, el) => {
					$(el).removeClass('d-none aos-animate');
					$(el).addClass('d-block');
					timeOutId = setTimeout(() => {
						$(el).addClass('aos-animate');
					}, 400);
				})
			})
		</script>
	</section>
	<section class="section" id="info">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-xl-4 col-lg-6 col-md-8 col-12">
					<div class="media-content py-4">
						<div class="animated-logo">
							<div class="mb-3">
								<img class="w-100" src="<?= base_url("assets/media/logos/") ?>main.png" alt="Amazing Indians 2024">
							</div>
							<div class="">
								<h2 class="hero-text" id="heroText"></h2>
								<script>
									new Typewriter('#heroText', {cursor: ''}).typeString('24 August | New Delhi').start();
								</script>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-xl-1 col-xl-7 col-lg-6 col-12">
					<div class="ratio ratio-16x9">
						<iframe class="" src="https://www.youtube.com/embed/_w_86AAx0gM?si=w_kL2nWrhLoYPCwF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="about" class="section">
		<div class="container">
			<div class="row flex-row-reverse align-items-center">
				<div class="col-xl-5 col-md-6 col-12">
					<div class="media-content">
						<div class="wrap">
							<picture>
								<source srcset="https://placehold.co/800x1200/webp" type="image/webp">
								<source srcset="https://placehold.co/800x1200/jpg" type="image/jpg">
								<img class="w-100" src="https://placehold.co/800x1200/jpg" alt="" loading="lazy">
							</picture>
							<!-- <img class="w-100" src="<?= base_url("assets/media/trophy.png") ?>" alt="" loading="lazy"> -->
						</div>
					</div>
				</div>
				<div class="col-xl-7 col-md-6 col-12">
					<div class="text-content">
						<div class="title section-title">
							<p class="">Amazing Indians</p>
							<h2 class="">Common By Appearance <br> Uncommon By deeds!</h2>
						</div>
						<div class="desc">
							<p class="text-lg">
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio ex ea repellendus saepe tempore! Cum, dolore eligendi officia iusto enim doloremque! Fugiat laborum natus impedit incidunt eius modi quasi quaerat cum laboriosam voluptatem placeat vel reiciendis aut, fugit quod provident?
							</p>
							<p class="text-lg">
								Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, fuga atque eligendi corporis cumque repellat aspernatur libero aliquid recusandae temporibus!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section" id="categories">
		<div class="container">
			<div class="title section-title mb-3 mb-md-4">
				<p class="">Amazing Indians</p>
				<h2 class="">All Categories</h2>
			</div>
			<div class="row g-3">
				<div class="col-12">
					<div class="swiper categorySwiper">
						<div class="swiper-wrapper">
							<?php for ($i = 0; $i < 20; $i++) : ?>
								<div class="swiper-slide interactable" data-category-id="<?= $i ?>">
									<div class="card-plain">
										<div class="card-body">
											<div class="row g-3 justify-content-center">
												<div class="col-auto">
													<img src="https://placehold.co/100x100" alt="">
												</div>
												<div class="col-12">
													<h5 class="text-center">Lorem ipsum dolor sit. <?= $i ?></h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endfor ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="categoryPopModal" tabindex="-1" aria-labelledby="categoryPopModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-fullscreen-md-down">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="categoryPopModalLabel">Modal title</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<a href="<?= base_url("register") ?>" class="btn btn-pink btn-hover-gold">Register Now</a>
					</div>
				</div>
			</div>
		</div>
		<script>
			new Swiper(".categorySwiper", {
				slidesPerView: 4,
				spaceBetween: 40,
				grid: {
					rows: 3,
					fill: "row"
				}
			})
			$(".categorySwiper .swiper-slide").each((index, elem) => {
				$(elem).on("click", () => {
					$.ajax({
						url: "<?= base_url() ?>",
						method: "POST",
						data: {
							category: $(elem).data("category-id")
						},
						success: function(data) {
							console.log($(elem).data("category-id"));
							$("#categoryPopModal").modal("show");
							$("#categoryPopModalLabel").text($(elem).data("category-id"))
						}
					})
				})
			})
		</script>
	</section>
	<section id="gallery" class="section">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians</p>
				<h2>Event Gallery</h2>
			</div>
			<div class="">
				<div class="swiper gallerySwiper">
					<div class="swiper-wrapper gallery-masonry" id="galleryMasonry">
						<?php for ($i = 0; $i < 20; $i++) : ?>
							<a class="swiper-slide tile mb-2" href="https://placehold.co/1500x1000/jpg">
								<figure>
									<picture>
										<source srcset="https://placehold.co/250x167/webp" type="image/webp">
										<source srcset="https://placehold.co/250x167/jpg" type="image/jpg">
										<img class="w-100" src="https://placehold.co/250x167/jpg" alt="" loading="lazy">
									</picture>
									<figcaption></figcaption>
								</figure>
							</a>
						<?php endfor ?>
					</div>
				</div>
				<script>
					new Swiper(".gallerySwiper", {
						slidesPerView: 5,
						spaceBetween: 20,
						grid: {
							rows: 3,
							fill: "row"
						}
					})
				</script>
			</div>
		</div>
		<script>
			lightGallery(document.getElementById('galleryMasonry'), {
				plugins: [lgZoom, lgThumbnail],
				speed: 500,
			});
		</script>
	</section>
	<section id="articles" class="section">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians</p>
				<h2>PR Articles</h2>
			</div>
			<div class="">
				<div class="swiper articleSwiper">
					<div class="swiper-wrapper gallery-masonry" id="galleryMasonry">
						<?php for ($i = 0; $i < 20; $i++) : ?>
							<div class="swiper-slide mb-2">
								<a href="" class="article">
									<div class="image mb-3">
										<figure>
											<picture>
												<source srcset="https://placehold.co/1280x720/webp" type="image/webp">
												<source srcset="https://placehold.co/1280x720/jpg" type="image/jpg">
												<img class="w-100" src="https://placehold.co/1280x720/jpg" alt="" loading="lazy">
											</picture>
											<figcaption></figcaption>
										</figure>
									</div>
									<div class="text-content p-3 py-0">
										<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, enim?</h5>
									</div>
								</a>
							</div>
						<?php endfor ?>
					</div>
				</div>
				<script>
					new Swiper(".articleSwiper", {
						slidesPerView: 3,
						spaceBetween: 20,
					})
				</script>
			</div>
		</div>
	</section>
</main>
