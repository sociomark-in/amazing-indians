<!-- Plugin: TypewriterJS -->
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<!-- Plugin: TypewriterJS -->
<main>
	<section class="d-none ">
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
	<section class="section pb-0" id="info">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-xl-4 col-lg-6 col-md-8 col-12">
					<div class="media-content py-4" data-aos="fade-right">
						<div class="animated-logo">
							<div class="mb-4">
								<img class="w-100" src="<?= base_url("assets/media/logos/") ?>main2.png" alt="Amazing Indians 2024">
							</div>
							<div class="">
								<h2 class="hero-text" id="heroText"></h2>
								<script>
									new Typewriter('#heroText', {
										cursor: ''
									}).typeString('24 August | New Delhi').start();
								</script>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-xl-1 col-xl-7 col-lg-6 col-12">
					<!-- <div class="ratio ratio-16x9" data-aos="fade-left" data-aos-delay="100">
						<iframe class="" src="https://www.youtube.com/embed/_w_86AAx0gM?si=w_kL2nWrhLoYPCwF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div> -->
					<div class="wrap" data-aos="zoom-in" data-aos-delay="100">
						<img class="w-100" src="<?= base_url("assets/media/images/AI_1920x1080.jpg") ?>" alt="" loading="lazy">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="about" class="section pb-0">
		<div class="container">
			<div class="row">
				<!-- <div class="row flex-row-reverse align-items-center"> -->
				<!-- <div class="col-xl-5 col-md-6 col-12">
					<div class="media-content">
						<div class="wrap" data-aos="zoom-in" data-aos-delay="100">
							<img class="w-100" src="<?= base_url("assets/media/images/AI_800x1200.jpg") ?>" alt="" loading="lazy">
						</div>
					</div>
				</div> -->
				<div class="col-12">
					<div class="text-content">
						<div class="title section-title">
							<p class="">Amazing Indians</p>
							<h2 class="" data-aos="fade-right">Common By Appearance <br> Uncommon By deeds!</h2>
						</div>
						<div class="desc">
							<p class="text-lg" data-aos="fade-up">
								Amazing, uncommon deeds should get more recognition than just becoming reshared posts on social media! After all these are real life tales of heroism, sacrifice, selflessness, generosity and compassion of Indian citizens who are changing the world by changing the world around them. <br>
							</p>
							<p class="text-lg" data-aos="fade-up">
								To honor such people who do remarkable deeds that impact the society positively, Times Now is all set to felicitate Amazing Indians of 2024, this August in New Delhi.
							</p>
							<p class="text-lg" data-aos="fade-up">
								A celebration to acknowledge Indians who embody the qualities of compassion, dedication & spirit of selfless service for others.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section pb-0" id="categories">
		<div class="container">
			<div class="title section-title mb-3 mb-md-4">
				<p class="">Amazing Indians</p>
				<h2 class="">All Categories</h2>
			</div>
			<div class="row g-3">
				<div class="col-12">
					<div class="swiper categorySwiper">
						<div class="swiper-wrapper mb-5 mb-md-0">
							<?php foreach ($page['categories'] as $key => $category) : ?>
								<div class="swiper-slide interactable" data-category-id="<?= $category['id'] ?>">
									<div class="card-plain category-tile">
										<div class="card-body">
											<div class="row g-3 justify-content-center align-items-center">
												<div class="col-auto">
													<div class="icon">
														<img src="<?= base_url('assets/media/images/icons/categories/') . $category['icon'] ?>" alt="<?= $category['name'] . " Icon" ?>">
													</div>
												</div>
												<div class="col">
													<h5 class=""><?= $category['name'] ?></h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div>
						<div class="swiper-pagination"></div>
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
						<p>

						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<a href="<?= base_url("register-now") ?>" class="btn btn-pink btn-hover-gold">Register Now</a>
					</div>
				</div>
			</div>
		</div>
		<script>
			new Swiper(".categorySwiper", {
				slidesPerView: 1,
				spaceBetween: 40,
				pagination: {
					el: ".categorySwiper .swiper-pagination",
					clickable: true
				},
				breakpoints: {
					640: {
						slidesPerView: 2,
						spaceBetween: 20,
						grid: {
							rows: 3,
							fill: "row"
						},
					},
					1024: {
						slidesPerView: 2,
						spaceBetween: 50,
						grid: {
							rows: 4,
							fill: "row"
						},
					},
					1400: {
						slidesPerView: 3,
						spaceBetween: 30,
						grid: {
							rows: 4,
							fill: "row"
						},
					},
				},
			})
			$(".categorySwiper .swiper-slide").each((index, elem) => {
				$(elem).on("click", () => {
					$.ajax({
						url: "<?= base_url('api/v2/category/get_single') ?>",
						method: "POST",
						data: {
							category: $(elem).data("category-id")
						},
						success: function(data) {
							data = JSON.parse(data)[$(elem).data("category-id")];
							$("#categoryPopModal").modal("show");
							$("#categoryPopModalLabel").text(data.name)
							$("#categoryPopModal .modal-body p").text(data.description)
						}
					})
				})
			})
		</script>
	</section>
	<section class="section d-none" id="pre_jury">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians</p>
				<h2>Pre-Jury</h2>
			</div>
			<div class="">
				<div class="swiper preJurySwiper">
					<div class="swiper-wrapper">
						<?php for ($i = 0; $i < 20; $i++) : ?>
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/speakers/") ?>person.png" alt="Speaker">
									</div>
									<div class="text-content p-3 py-0">
										<h5 class="text-gold">Lorem ipsum dolor sit.</h5>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, enim?</p>
									</div>
								</div>
							</div>
						<?php endfor ?>
					</div>
				</div>
				<script>
					new Swiper(".preJurySwiper", {
						slidesPerView: 1,
						spaceBetween: 20,
						autoplay: {
							enable: true,
							duration: 400
						},
						breakpoints: {
							640: {
								slidesPerView: 2,
								spaceBetween: 20,
							},
							1024: {
								slidesPerView: 3,
								spaceBetween: 50,
							},
							1400: {
								slidesPerView: 5,
								spaceBetween: 30,
							},
						},
					})
				</script>
			</div>
		</div>
	</section>
	<section class="section pb-0" id="grand_jury">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians</p>
				<h2>Grand Jury</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="swiper grandJurySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/speakers/") ?>Sanjeev_Sanyal.png" alt="Speaker">
									</div>
									<div class="text-content text-center p-3 py-0">
										<h4 class="text-gold">Sanjeev Sanyal</h4>
										<p>Member, Economic Advisory Council to the Prime Minister</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/speakers/") ?>Prasoon_Joshi.png" alt="Speaker">
									</div>
									<div class="text-content text-center p-3 py-0">
										<h4 class="text-gold">Prasoon Joshi</h4>
										<p>Chairman, McCann Worldgroup Asia Pacific and CEO & COO, McCann Worldgroup India</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/speakers/") ?>Gen_Naravane.png" alt="Speaker">
									</div>
									<div class="text-content text-center p-3 py-0">
										<h4 class="text-gold">General MM Naravane</h4>
										<p>PVSM, AVSM, SM, VSM (RETD), Former Chief Of The Army Staff, Indian Army</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/speakers/") ?>Rajeev_Chandrasekhar.png" alt="Speaker">
									</div>
									<div class="text-content text-center p-3 py-0">
										<h4 class="text-gold">Rajeev Chandrasekhar</h4>
										<p>BJP Leader, Former MOS of Electronics & IT and Skill Development and Entrepreneurship</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/speakers/") ?>Renu_Sood.png" alt="Speaker">
									</div>
									<div class="text-content text-center p-3 py-0">
										<h4 class="text-gold">Renu Sud Karnad</h4>
										<p>Chairperson, GlaxoSmithKline & Board Member, HDFC Bank</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<script>
						new Swiper(".grandJurySwiper", {
							slidesPerView: 1,
							spaceBetween: 20,
							loop: true,
							autoplay: {
								enable: true,
								duration: 400
							},
							breakpoints: {
								640: {
									slidesPerView: 2,
									spaceBetween: 20,
								},
								1024: {
									slidesPerView: 3,
									spaceBetween: 30,
								},
								1400: {
									slidesPerView: 4,
									spaceBetween: 10,
								},
							}
						})
					</script>
				</div>
			</div>
		</div>
	</section>
	<section class="section pb-0" id="quotes">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians</p>
				<h2>Words That Inspire</h2>
			</div>
			<div class="">
				<div class="swiper quoteSwiper">
					<div class="swiper-wrapper">
						<?php foreach ($page['quotes'] as $key => $quote) : ?>
							<div class="swiper-slide mb-2">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/quotes/') . $quote ?>" alt="Speaker">
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
				<script>
					new Swiper(".quoteSwiper", {
						slidesPerView: 1,
						spaceBetween: 20,
						autoplay: {
							enable: true,
							duration: 400
						},
						breakpoints: {
							1024: {
								slidesPerView: 2,
								spaceBetween: 50,

							},
						},
					})
				</script>
			</div>
		</div>
	</section>
	<section id="gallery" class="section d-none">
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
	<section id="articles pb-0" class="section">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians</p>
				<h2>Articles</h2>
			</div>
			<div class="">
				<div class="swiper articleSwiper">
					<div class="swiper-wrapper gallery-masonry" id="galleryMasonry">
						<?php foreach ($page['articles'] as $key => $article) : ?>
							<div class="swiper-slide mb-2">
								<a href="<?= $article['url'] ?>" class="article" target="_blank">
									<div class="image mb-3">
										<figure>
											<picture>
												<!-- <source srcset="https://placehold.co/1280x720/webp" type="image/webp">
												<source srcset="https://placehold.co/1280x720/jpg" type="image/jpg"> -->
												<img class="w-100" src="<?= $article['thumb'] ??= "https://static.tnn.in/thumb/msid-88386381,width-720,height-400,resizemode-75/88386381.jpg?quality=100" ?>" alt="" loading="lazy">
											</picture>
											<figcaption></figcaption>
										</figure>
									</div>
									<div class="text-content p-3 py-0">
										<div class="">
											<h5 class="text-gold"><?= $article['name'] ?></h5>
										</div>
										<div class="row">
											<div class="col-xl-auto col-12"><i class="fa-solid fa-award me-2"></i><?= $article['category'] ?></div>
											<div class="col-xl-auto col-12"><i class="fa-solid fa-user me-2"></i><?= $article['author'] ?></div>
										</div>
									</div>
								</a>
							</div>
						<?php endforeach ?>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<script>
					new Swiper(".articleSwiper", {
						slidesPerView: 1.1,
						spaceBetween: 20,
						navigation: {
							nextEl: ".swiper-button-next",
							prevEl: ".swiper-button-prev",
						},
						breakpoints: {
							640: {
								slidesPerView: 2.25,
								spaceBetween: 20,
							},
							1024: {
								slidesPerView: 2.3,
								spaceBetween: 50,
							},
							1400: {
								slidesPerView: 3.2,
								spaceBetween: 30,
							},
						}
					})
				</script>
			</div>
		</div>
	</section>
	<section class="section" id="contact">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians</p>
				<h2>Contact Us</h2>
			</div>
			<div class="row g-3">
				<div class="col-lg-5 col-md-6 col-12">
					<div class="card-plain category-tile">
						<div class="card-body p-3">
							<div class="row g-2 align-items-center">
								<div class="col-sm-auto">
									<div class="icon"><img src="<?= base_url('assets/media/images/icons/call.png') ?>" alt="" height="60"></div>
								</div>
								<div class="col-sm">
									<h3>Call</h3>
									<h5>
										<a href="tel:+918669079150" class="text-gold">+91 866 907 9150</a> /
										<a href="tel:+919650716790" class="text-gold">+91 965 071 6790</a>
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-6 col-12">
					<div class="card-plain category-tile">
						<div class="card-body p-3">
							<div class="row g-2 align-items-center">
								<div class="col-sm-auto">
									<div class="icon"><img src="<?= base_url('assets/media/images/icons/mail.png') ?>" alt="" height="60"></div>
								</div>
								<div class="col-sm">
									<h3>Email</h3>
									<h5>
										<a href="mailto:response@theamazingindians.com" style="word-wrap: break-word;" class="text-gold">response@theamazingindians.com</a>
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
