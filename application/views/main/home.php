<!-- Plugin: TypewriterJS -->
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<!-- Plugin: TypewriterJS -->
<main>
	<section class="section pb-0" id="info">
		<div class="container-fluid">
			<div class="row g-0 align-items-center justify-content-center">
				<div class="col-xl-4 col-lg-6 col-md-8 col-12">
					<div class="media-content py-4" data-aos="fade-right">
						<div class="animated-logo">
							<div class="mb-4">
								<img class="w-100" src="<?= base_url("assets/media/logos/") ?>main.png" alt="Amazing Indians <?= date('Y') ?>">
							</div>
							<div class="">
								<h2 class="hero-text" id="heroText"></h2>
								<script>
									new Typewriter('#heroText', {
										cursor: ''
									}).typeString('30th September 2026').start();
								</script>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-5 col-xl-6 offset-xl-1 col-lg-6 col-12 d-none">
					<!-- <div class="swiper mainKeyJurySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide mb-2">
								<div class="wrap" data-aos="zoom-in" data-aos-delay="100">
									<img class="w-100" src="<?= base_url("assets/media/images/key/") ?>Kiren_Rijiju.png" alt="" loading="lazy">
								</div>
							</div>
						</div>
					</div> -->
					<!-- <script>
						new Swiper(".mainKeyJurySwiper", {
							slidesPerView: 1,
							spaceBetween: 20,
							loop: true,
							autoplay: {
								enable: true,
								duration: 400
							},
						})
					</script> -->


					<div class="wrap" data-aos="zoom-in" data-aos-delay="100">
						<div class="ratio ratio-16x9">
							<iframe src="https://www.youtube.com/embed/ewh-W61p3Vk?si=d2i79wGLc_cBK-e3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="section pb-0 d-none">
		<div class="container">
			<div class="row">
				<div class="col-12 border-yellow">
					<div class="ratio ratio-16x9">
						<iframe src="https://www.youtube.com/embed/puZSDf1c6iU?si=sbbFqbL_HAHyXAsx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
							<!-- <p class="">Amazing Indians <?= date('Y') ?></p> -->
							<h2 class="" data-aos="fade-right">Common By Appearance <br> Uncommon By deeds!</h2>
						</div>
						<div class="desc">
							<p class="text-lg" data-aos="fade-up">
								Amazing, uncommon deeds should get more recognition than just becoming reshared posts on social media! After all these are real life tales of heroism, sacrifice, selflessness, generosity and compassion of Indian citizens who are changing the world by changing the world around them. <br>
							</p>
							<p class="text-lg" data-aos="fade-up">
								To honor such people who do remarkable deeds that impact the society positively, Times Now is all set to felicitate Amazing Indians of <?= date('Y') ?>, this September in New Delhi.
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

	<section id="" class="section pb-0 d-none">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="border-yellow">
						<picture>
							<source media="(min-width:650px)" srcset="<?= base_url("assets/media/images/banner/") ?>banner_desk.jpg" type="image/webp" class="w-100">
							<source media="(min-width:465px)" srcset="<?= base_url("assets/media/images/banner/") ?>banner_mob.jpg" type="image/webp" class="w-100">
							<img src="<?= base_url("assets/media/images/banner/") ?>banner_mob.jpg" alt="" loading="lazy" class="w-100">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="agenda" class="section d-none">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="text-content">
						<div class="title section-title mb-4 mb-md-5">
							<!-- <p class="">Amazing Indians <?= date('Y') ?></p> -->
							<h2 class="" data-aos="fade-right">Agenda</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-11 col-12">
					<div class="border-yellow">
						<div class="swiper agendaSwiper">
							<div class="swiper-wrapper" id="agendaPages">
								<a class="swiper-slide" href="<?= base_url('assets/media/images/agenda.jpg') ?>">
									<figure class="m-0">
										<picture>
											<source srcset="<?= base_url('assets/media/images/agenda.jpg') ?>" type="image/jpg">
											<img class="w-100" src="<?= base_url('assets/media/images/agenda.jpg') ?>" alt="" loading="lazy">
										</picture>
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
						</div>
					</div>
					<script>
						new Swiper(".agendaSwiper", {
							slidesPerView: 1,
							spaceBetween: 20,
							breakpoints: {
								640: {
									slidesPerView: $('.agendaSwiper .swiper-slide').length,
									spaceBetween: 20,
								},
							}
						})
						var agenda = lightGallery(document.getElementById('agendaPages'), {
							plugins: [lgZoom, lgThumbnail],
							speed: 500,
						});
					</script>
				</div>
			</div>
		</div>
	</section>

	<section class="section pb-0" id="categories">
		<div class="container">
			<div class="title section-title mb-3 mb-md-4">
				<!-- <p class="">Amazing Indians <?= date('Y') ?></p> -->
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
												<?php if($key > 6): ?>
													<div class="col">
													<h5 class=""><small class="text-sm" style="font-size: 0.875rem;">Social Innovation using Technology</small><br><?= $category['name'] ?></h5>
												</div>
												<?php else:?>
													<div class="col">
													<h5 class=""><?= $category['name'] ?></h5>
												</div>
												<?php endif ?>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div>
						<div class="swiper-pagination"></div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
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
						<a href="https://docs.google.com/forms/d/e/1FAIpQLSe4KHjZIyl3UToNjkv87wq4ZY2GuRXD5DruhN0C23UtYN_DNQ/viewform?usp=publish-editor" target="_blank" class="btn btn-pink btn-hover-gold">Nominate Now</a>
					
					</div>
				</div>
			</div>
		</div>
		<script>
			new Swiper(".categorySwiper", {
				slidesPerView: 1,
				spaceBetween: 40,
				loop: true,
				pagination: {
					el: ".categorySwiper .swiper-pagination",
					clickable: true
				},
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				autoplay: {
					delay: 1500,
					disableOnInteraction: false,
				},
				breakpoints: {
					640: {
						slidesPerView: 2,
						spaceBetween: 10,
						grid: {
							rows: 2,
							fill: "row"
						},
						autoplay: {
							delay: 2500,
							disableOnInteraction: false,
						},
					},
					1024: {
						slidesPerView: 2,
						spaceBetween: 20,
						grid: {
							rows: 2,
							fill: "row"
						},
						autoplay: {
							delay: 3000,
							disableOnInteraction: false,
						},
					},
					1400: {
						slidesPerView: 3,
						spaceBetween: 30,
						grid: {
							rows: 4,
							fill: "row"
						},
						autoplay: {
							delay: 4000,
							disableOnInteraction: false,
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
							$("#categoryPopModal .modal-footer a").attr("href", "https://docs.google.com/forms/d/e/1FAIpQLSe4KHjZIyl3UToNjkv87wq4ZY2GuRXD5DruhN0C23UtYN_DNQ/viewform?usp=publish-editor")
						}
					})
				})
			})
		</script>
	</section>
	
	<section class="section pb-0 d-none" id="winners">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<!-- <p class="">Amazing Indians <?= date('Y') ?></p> -->
				<h2>Winners</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Ramprasad Sarkar.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Ramprasad Sarkar</h5>
									<p class="text-white text-uppercase">Agriculture</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Dr Tapesh Mathur.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Dr Tapesh Mathur</h5>
									<p class="text-white text-uppercase">Animal Welfare</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Raghu Narasingasa Hubballi.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Raghu Narasingasa Hubballi</h5>
									<p class="text-white text-uppercase">Disability, Inclusion And Accessibility</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Dr. Shiva Balak Misra.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Dr. Shiva Balak Misra</h5>
									<p class="text-white text-uppercase">Education & Skill Development</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Mr. Deepak Vishwakarma.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Mr. Deepak Vishwakarma</h5>
									<p class="text-white text-uppercase">Environment & Sustainability</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Issa fathima.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Dr Issa Fathima Jasmine. M</h5>
									<p class="text-white text-uppercase">Food Management and nutrition</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Ms. Meera Satpathy.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Ms. Meera Satpathy</h5>
									<p class="text-white text-uppercase">Girl Child and Women's Right Empowerment</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Kkanchan Gupta_Healthcare.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Kkanchan Gupta</h5>
									<p class="text-white text-uppercase">Healthcare</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Ekta Viiveck Verma.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Ekta Viiveck Verma</h5>
									<p class="text-white text-uppercase">Human Rights and Legal Aid</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Triveni Acharya 1_Human Rights and Legal Aid.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Triveni Acharya</h5>
									<p class="text-white text-uppercase">Human Rights and Legal Aid</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Kuldeep Raj Saxena_3.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Kuldeep Raj Saxena</h5>
									<p class="text-white text-uppercase">Rural and Slum Development</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Mr. Ambika Patel.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Mr. Ambika Patel</h5>
									<p class="text-white text-uppercase">Social Innovation using Technology</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/2025/Rajasekhara Raju Podili.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-black text-uppercase">Rajasekhara Raju Podili</h5>
									<p class="text-white text-uppercase">Water and Sanitation</p>
								</div>
							</div>
						</div>
					</div>
					<style>
						.winner-tile {
							display: block;
							padding-bottom: 0.5rem;
						}

						.winner-tile .image {
							position: relative;
							/* border-radius: 1rem; */
							border: 6px solid #ffae00;
							border-radius: 20px;
							overflow: hidden;
						}

						.winner-tile.interactable:hover {
							box-shadow: 0 0.25rem 0 0 #d700d0;
						}
					</style>
				</div>
			</div>
		</div>
	</section>

	<section class="section pb-0" id="grand_jury">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<!-- <p class="">Amazing Indians <?= date('Y') ?></p> -->
				<h2>Grand Jury 2025</h2>
			</div>
			<div class="row align-items-center">
				<div class="col-12">
					<div class="swiper grandJurySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/juries/grand/") ?>Neerja_Birla.png" alt="Speaker">
									</div>
									<div class="text-content text-center p-3 py-0">
										<h4 class="text-red">Neerja Birla</h4>
										<p>Founder and Chairperson of Aditya Birla Education Trust(ABET),Philanthropist</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/juries/grand/") ?>Padmaja_Ruparel.png" alt="Speaker">
									</div>
									<div class="text-content text-center p-3 py-0">
										<h4 class="text-red">Padmaja Ruparel</h4>
										<p>Co-Founder, IAN Group</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/juries/grand/") ?>Sanjeev_Bhikchandani.png" alt="Speaker">
									</div>
									<div class="text-content text-center p-3 py-0">
										<h4 class="text-red">Sanjeev Bhikchandani</h4>
										<p>Founder and executive vice chairman of Info Edge</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/juries/grand/") ?>Prasoon_Joshi.png" alt="Speaker">
									</div>
									<div class="text-content text-center p-3 py-0">
										<h4 class="text-red">Prasoon Joshi</h4>
										<!-- <p>Indian poet, writer, lyricist, screenwriter, communication specialist and marketer. He is the CEO of McCann World group India and Chairman APAC, a subsidiary of the global marketing firm McCann Erickson.</p> -->
										<p>Chairman, McCann Worldgroup Asia Pacific and CEO & COO, McCann Worldgroup India</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/juries/grand/") ?>Ashish_Chauhan.png" alt="Speaker">
									</div>
									<div class="text-content text-center p-3 py-0">
										<h4 class="text-red">Ashish Chauhan</h4>
										<p>Managing Director and Chief Executive Officer of the National Stock Exchange of India.</p>
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
								delay: 1000
							},
							breakpoints: {
								640: {
									slidesPerView: 2,
									spaceBetween: 10,
								},
								1024: {
									slidesPerView: 3,
									spaceBetween: 20,
								},
								1400: {
									slidesPerView: 4,
									spaceBetween: 30,
								},
							}
						})
					</script>
				</div>
			</div>
		</div>
	</section>

	<style>
		#pre_jury .card-plain.category-tile .icon {
			width: 100px;
			border: 2px solid white !important;
			border-radius: 20% !important;
			overflow: hidden;
		}

		#pre_jury .card-body {
			height: 18vh !important;
		}

		@media screen and (min-width: 1024px) {
			#pre_jury .card-body {
				height: 20vh !important;
			}
		}

		@media screen and (min-width: 1400px) {
			#pre_jury .card-body {
				height: 18vh !important;
			}
		}
	</style>

	<section class="section pb-0" id="pre_jury">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<!-- <p class="">Amazing Indians <?= date('Y') ?></p> -->
				<h2>Pre Jury 2025</h2>
			</div>

			<div class="swiper preJurySwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Sherin_Ali.png" alt="" class="w-100">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Sherin Ali</h4>
											<p>Gobal lead CSR , WNS</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Shashank_Awasthi.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Shashaank Awasthi</h4>
											<p>Co Founder, V- Shesh (Award winning impact enterprise working on disability inclusion) & Anyssa Venture Capital</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Sudha_Jhijaria.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Sudha Jhijaria</h4>
											<p>HEAD CSR OPERATION (PAN INDIA), Billion Hearts Beating Foundation - CSR ARM of Apollo Hospital Enterprises Limited</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Amitabh_shah.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Amitabh Shah</h4>
											<p>Founder and Chief Inspiration Officer, Yuva Unstoppable</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Soma_Bhattachar.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Soma Bhattacharya</h4>
											<p>Former ISA WFM Leader (Domestic Consulting), IBM India</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Joy_Kar.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Joy Kar</h4>
											<p>Founder Director, Blue Sky Premiere Services Pvt Ltd,Trustee, Girl2B Foundation India Trust President, Hope Kolkata Foundation</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Deepti_sawhney.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Deepti Sawhney</h4>
											<p>Founder & CEO, Mahattattva</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Prashant_Naigaonkar.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Prashant Naigaonkar</h4>
											<p>Partner, Rampup Advisory LLP</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>pakash_kondekar.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Prakash Kondekar </h4>
											<p>Hon Director Indian Institute of Naturopathy,Mumbai.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Devendra_Kumar.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Devendra Kumar</h4>
											<p>Founder & Chairman, Ladli Foundation Trust</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Durgesh_Buxy.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Durgesh Buxy</h4>
											<p>Associate Vice President & Head ( International Business) - Crompton Greaves Consumer Electricals Limited</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Nilesh_Lele.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Nilesh Lele</h4>
											<p>President, Chamber for Advancement of Small & Medium Businesses</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Randhir_Sing.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">K Randhir Singh</h4>
											<p>Company Secretary, Compliance Officer and CSR Head – Dr Reddy’s Laboratories Limited</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Sumit_Dasgupta.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Sumit Dasgupta</h4>
											<p>Founder Director, Allcap Communications Private Limited</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Yogesh_Kapse.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Yogesh Kapse</h4>
											<p>Head ,CSR, Schaeffler</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Manish_Singh.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Manish Singh</h4>
											<p>Mentor & Investor, Independent Director, Binsar Farms Pvt Ltd </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>mallikarjuna_Lytha.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Mallikarjuna Iytha</h4>
											<p>Founder &CEO,Inclusive Divyangjan Entrepreneur Association (IDEA)</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide interactable">
						<div class="card-plain category-tile">
							<div class="card-body align-content-center">
								<div class="row g-3 justify-content-center align-items-center">
									<div class="col-auto">
										<div class="icon">
											<img src="<?= base_url("assets/media/images/juries/pre/2025/") ?>Tatyana_Dias.png" alt="">
										</div>
									</div>
									<div class="col">
										<div class="speaker-tile">
											<h4 class="text-black">Dias</h4>
											<p>Founder & CEO of Veruschka Foundation</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- <div class="swiper-pagination"></div> -->
				<!-- <div class="swiper-button-next"></div> -->
				<!-- <div class="swiper-button-prev"></div> -->
			</div>
			<script>
				new Swiper(".preJurySwiper", {
					navigation: {
						nextEl: ".preJurySwiper .swiper-button-next",
						prevEl: ".preJurySwiper .swiper-button-prev",
					},
					autoplay: {
						delay: 2500,
						disableOnInteraction: false
					},
					slidesPerView: 1,
					grid: {
						// rows: 1,
						fill: 'row'
					},
					breakpoints: {
						640: {
							slidesPerView: 2,
							spaceBetween: 20,
							grid: {
								rows: 2,
							},
						},
						1024: {
							slidesPerView: 2,
							spaceBetween: 30,
							grid: {
								rows: 3,
							},
						},
						1400: {
							slidesPerView: 3,
							spaceBetween: 30,
							grid: {
								rows: 3,
							},
						},
					},
					pagination: {
						el: ".swiper-pagination",
						clickable: true,
					},
				});
			</script>
		</div>
	</section>

	<section class="section pb-0" id="quotes">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<!-- <p class="">Amazing Indians <?= date('Y') ?></p> -->
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


	<section id="articles" class="section pb-0 d-none">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<!-- <p class="">Amazing Indians <?= date('Y') ?></p> -->
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
												<img class="w-100" src="<?= $article['thumb'] ?>" alt="" loading="lazy">
											</picture>
											<figcaption></figcaption>
										</figure>
									</div>
									<div class="text-content p-3 py-0">
										<div class="">
											<h5 class="text-black"><?= $article['name'] ?></h5>
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
				<!-- <p class="">Amazing Indians <?= date('Y') ?></p> -->
				<h2>Contact Us</h2>
			</div>
			<div class="row g-3">
				<div class="col-xl-5 col-lg-6 col-12">
					<div class="card-plain category-tile">
						<div class="card-body p-3">
							<div class="row g-2 g-md-4 align-items-center">
								<div class="col-sm-auto col-4">
									<div class="icon"><img src="<?= base_url('assets/media/images/icons/call.png') ?>" class="w-100" alt=""></div>
								</div>
								<div class="col-sm col-8">
									<h3 class="text-black">Call</h3>
									<h5>
										<a href="tel:+918669079150" class="text-black">+91 866 907 9150</a> /
										<a href="tel:+919650716790" class="text-black">+91 965 071 6790</a>
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-7 col-lg-6 col-12">
					<div class="card-plain category-tile">
						<div class="card-body p-3">
							<div class="row g-2 g-md-4 align-items-center">
								<div class="col-sm-auto col-4">
									<div class="icon"><img src="<?= base_url('assets/media/images/icons/mail.png') ?>" class="w-100" alt=""></div>
								</div>
								<div class="col-sm col-8">
									<h3 class="text-black">Email</h3>
									<h5>
										<a href="mailto:response@theamazingindians.com" style="word-wrap: break-word;" class="text-black">response@theamazingindians.com</a>
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <script type="text/javascript">
		window.onload = () => {
			setTimeout(()=>{
				$('#alertModal').modal('show');
			}, 2000)
		}
	</script> -->
</main>
