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
		<div class="container-fluid p-md-0">
			<div class="row g-0 justify-content-between">
				<div class="offset-xl-1 col-xl-4 col-lg-6 col-md-8 col-12">
					<div class="media-content py-4" data-aos="fade-right">
						<div class="animated-logo">
							<div class="mb-4">
								<img class="w-100" src="<?= base_url("assets/media/logos/") ?>main2.png" alt="Amazing Indians 2024">
							</div>
							<div class="d-none">
								<h2 class="hero-text" id="heroText"></h2>
								<script>
									new Typewriter('#heroText', {
										cursor: ''
									}).typeString('24th August | New Delhi').start();
								</script>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
					<div class="swiper mainKeyJurySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide mb-2">
								<div class="wrap" data-aos="zoom-in" data-aos-delay="100">
									<img class="w-100" src="<?= base_url("assets/media/images/key/") ?>Kiren_Rijiju.png" alt="" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<script>
						new Swiper(".mainKeyJurySwiper", {
							slidesPerView: 1,
							spaceBetween: 20,
							loop: true,
							autoplay: {
								enable: true,
								duration: 400
							},
						})
					</script>

					<!-- 
					<div class="wrap" data-aos="zoom-in" data-aos-delay="100">
						<img class="w-100" src="<?= base_url("assets/media/images/AI_1920x1080.jpg") ?>" alt="" loading="lazy">
						<div class="ratio ratio-16x9">
							<iframe src="https://www.youtube.com/embed/fajyiWbwq9E?si=CnydnEuY5XNp9LcJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div> 
					</div>
					-->
				</div>
			</div>
		</div>
	</section>
	<?php if ("2024-08-24 07:00:00" < date('Y-m-d H:i:s')): ?>
		<section class="section pb-0 d-none">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="ratio ratio-16x9">
							<iframe src="https://www.youtube.com/embed/fajyiWbwq9E?si=CnydnEuY5XNp9LcJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif ?>
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
							<p class="">Amazing Indians <?= date('Y') ?></p>
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
	<section id="agenda" class="section d-none">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-content">
						<div class="title section-title mb-4 mb-md-5">
							<p class="">Amazing Indians <?= date('Y') ?></p>
							<h2 class="" data-aos="fade-right">Agenda</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-11 col-12">
					<div class="swiper agendaSwiper">
						<div class="swiper-wrapper" id="agendaPages">
							<a class="swiper-slide mb-2" href="https://placehold.co/595x842/jpg">
								<figure>
									<picture>
										<source srcset="https://placehold.co/595x842/webp" type="image/webp">
										<source srcset="https://placehold.co/595x842/jpg" type="image/jpg">
										<img class="w-100" src="https://placehold.co/595x842/jpg" alt="" loading="lazy">
									</picture>
									<figcaption></figcaption>
								</figure>
							</a>
							<a class="swiper-slide mb-2" href="https://placehold.co/595x842/jpg">
								<figure>
									<picture>
										<source srcset="https://placehold.co/595x842/webp" type="image/webp">
										<source srcset="https://placehold.co/595x842/jpg" type="image/jpg">
										<img class="w-100" src="https://placehold.co/595x842/jpg" alt="" loading="lazy">
									</picture>
									<figcaption></figcaption>
								</figure>
							</a>
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
				<p class="">Amazing Indians <?= date('Y') ?></p>
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
						<a href="<?= base_url("register-now") ?>" class="btn disabled btn-pink btn-hover-gold">Registrations Closed</a>
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
	<section class="section pb-0" id="grand_jury">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians <?= date('Y') ?></p>
				<h2>Grand Jury</h2>
			</div>
			<div class="row align-items-center">
				<div class="col-12">
					<div class="swiper grandJurySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide mb-2">
								<div class="speaker-tile">
									<div class="image mb-3">
										<img class="w-100" src="<?= base_url("assets/media/images/juries/grand/") ?>Sanjeev_Sanyal.png" alt="Speaker">
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
										<img class="w-100" src="<?= base_url("assets/media/images/juries/grand/") ?>Prasoon_Joshi.png" alt="Speaker">
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
										<img class="w-100" src="<?= base_url("assets/media/images/juries/grand/") ?>Gen_Naravane.png" alt="Speaker">
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
										<img class="w-100" src="<?= base_url("assets/media/images/juries/grand/") ?>Rajeev_Chandrasekhar.png" alt="Speaker">
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
										<img class="w-100" src="<?= base_url("assets/media/images/juries/grand/") ?>Renu_Sood.png" alt="Speaker">
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
	<section class="section" id="pre_jury">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians <?= date('Y') ?></p>
				<h2>Pre-Jury</h2>
			</div>
			<div class="">
				<div class="swiper preJurySwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Imran.png" alt="Mohammad Imran">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Mohammad Imran</h5>
									<p>Chairman & Founder Trustee, Safe Road Foundation <br>Managing Director, The House of Water Lily (Thowl Pvt Ltd)</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Umesh.png" alt="Umesh Sasane">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Umesh Sasane</h5>
									<p>"Founder, Brand Practitioner & Brand Strategist. Horn Ok Please India. <br>Founder, Marhatmol Innovations Pvt. Ltd, A social entrepreneurship initiative."</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Manish_Singh.png" alt="Manish Singh">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Manish Singh</h5>
									<p>Mentor & Investor, Independent Director, Binsar Farms Pvt Ltd</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Naitik_Vyas.png" alt="Naitik Vyas">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Naitik Vyas</h5>
									<p>
										Director, Impact Global (BNVRS Tech Pvt Ltd). <br>
										Advisor, Lord's Mark Industries Ltd.
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Ruchi_Mathur.png" alt="Ruchi Mathur">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Ruchi Mathur</h5>
									<p>CEO, Director and Co-Founder, Lighthouse Communities Foundation (earlier Pune City Connect)</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Riya_Joseph.png" alt="Riya Joseph">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Riya Joseph</h5>
									<p>Head of Media and Digital Marketing, Britannia Industries</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Devendra.png" alt="Devendra Kumar">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Devendra Kumar</h5>
									<p>Founder & Chief Innovation Officer, Ladli Foundation</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Jitu_Lal_Meena.png" alt="Dr. Jitu Lal Meena">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Dr. Jitu Lal Meena</h5>
									<p>Division Head of “Service Provider Engagement", National Health Authority</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Ritesh_Gauba.png" alt="Ritesh Gauba">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Ritesh Gauba</h5>
									<p>Country General Manager - India, Pladis Global (McVities : Godiva : Ulker)</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>KC_James.png" alt="Dr.K.C. James Raju">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Dr.K.C. James Raju</h5>
									<p>"Prof and Dean. Earlier Head, CASEST.Centre for Advanced Studies in Electronics Science & Technology, School of Physics, Uni of Hyderabad"</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Lakshmi_Lingam.png" alt="Dr. Lakshmi Lingam">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Dr. Lakshmi Lingam</h5>
									<p>Chair Professor, School of Public Health, DY patil University, Navi Mumbai <br>Ex- Dean and Professor(The School of Media and Cultural Studies at the Tata Institute of Social Sciences, Mumbai)</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Dr_Anup.png" alt="Dr. Anup Kalra">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Dr. Anup Kalra</h5>
									<p>Director, Former Executive Director Ayurvet, CEO (ARF), <br>Director QCS Herbals and Alternate Green Energy Solutions</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Avnish_Tripathi.png" alt="Avnish Tripathi">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Avnish Tripathi</h5>
									<p>Head, B2B Business, Cargill India Ltd.</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Shefali_Hasija.png" alt="Shefali Hasija">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Shefali Hasija</h5>
									<p>Head - Corporate Social Responsibility, Angel One</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Arshad_Siddiqui.png" alt="Arshad Siddiqui">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Arshad Siddiqui</h5>
									<p>Co-Founder, Creando Associates Pvt Ltd</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Shashaank_Awasthi.png" alt="Shashaank Awasthi">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Shashaank Awasthi</h5>
									<p>Co Founder, V-Shesh (Award winning impact enterprise working on disability inclusion) & Ally Venture Capital</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Prakash_Kondekar.png" alt="Prakash Kondekar">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Prakash Kondekar</h5>
									<p>Hon Director, Indian Institute of Naturopathy</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Nilesh_Lele.png" alt="Nilesh Lele">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Nilesh Lele</h5>
									<p>President, Chamber for Advancement of Small & Medium Businesses</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Soma_Roy.png" alt="Soma Roy">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Soma Roy</h5>
									<p>Consultant, TiE Mumbai - Member | Business Strategic Consultant | Personal & Business Transformation Coach | Speaker | Startup & MSME Mentoring</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Dr_Prabodh.png" alt="Soma Roy">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Prabodh Halde</h5>
									<p>Chairman, Chambers of Advancement for small & medium business</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Keshav_Kamble.png" alt="Keshav Kamble">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Keshav Kamble</h5>
									<p>Former Joint CEO , KVIC ,Ministry of MSME ,Govt. of India
										<br>Managing Director ,Indian Farmer Producers Trading Company, Global Consultancy Services, India
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Madhav.png" alt="Madhav_Nishtala">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Madhav Nishtala</h5>
									<p></p>
								</div>
							</div>
						</div>
						<div class="swiper-slide mb-2">
							<div class="speaker-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Debashree.png" alt="Debashree Chakraborty">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold">Debashree Chakraborty</h5>
									<p>Independent Consultant/Advisor, Mahindra and Mahindra (Biz Head)<br>Ex Deputy Director - FICCI"</p>
								</div>
							</div>
						</div>


						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Nimal.png" alt="Nimal">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Nimal</h5>-->
						<!--			<p>Sanitation & Water-->
						<!--			</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Raziya_Sheikh.png" alt="Raziya Sheikh">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Raziya Sheikh</h5>-->
						<!--			<p>Girl Child & Women's Right</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Vishal_Singh.png" alt="Vishal Singh">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Vishal Singh</h5>-->
						<!--			<p>Food Management</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Sarita_Subramaniam.png" alt="Sarita Subramaniam">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Sarita Subramaniam</h5>-->
						<!--			<p>Environment Sustainability-->
						<!--			</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Pauzagin.png" alt="Pauzagin">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Pauzagin</h5>-->
						<!--			<p>Education</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Peera_Ram.png" alt="Peera Ram">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Peera Ram</h5>-->
						<!--			<p>Animal Welfare</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->

						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Raimati.png" alt="Raimati">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Raimati</h5>-->
						<!--			<p>Agriculture-->
						<!--			</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Preethi_S.png" alt="Preethi S">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Preethi S</h5>-->
						<!--			<p>Health2</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Sipong_Chingmak_Chang.png" alt="Sipong Chingmak Chang">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Sipong Chingmak Chang</h5>-->
						<!--			<p>Health1</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Ranjeet_Yadav.png" alt="Ranjeet Yadav">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Ranjeet Yadav</h5>-->
						<!--			<p>Rural & Slum Dev-->
						<!--			</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Piyush_Tewari.png" alt="Piyush Tewari">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Piyush Tewari</h5>-->
						<!--			<p>Road Safety</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Aditya_Mehta_A.png" alt="Aditya Mehta A">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Aditya Mehta A</h5>-->
						<!--			<p>Sports Enablers</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="swiper-slide mb-2">-->
						<!--	<div class="speaker-tile">-->
						<!--		<div class="image mb-3">-->
						<!--			<img class="w-100" src="<?= base_url("assets/media/images/juries/pre/") ?>Dhruv.png" alt="Dhruv">-->
						<!--		</div>-->
						<!--		<div class="text-content text-center p-3 py-0">-->
						<!--			<h5 class="text-gold">Dhruv</h5>-->
						<!--			<p>Social Innovation- Kadivendi Mahipal Chary</p>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->


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
	<section class="section pb-0" id="winner_jury">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians <?= date('Y') ?></p>
				<h2>Winners</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Aditya_Mehta_A.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">Aditya Mehta</h5>
									<p class="text-white text-uppercase">Sports Enablers</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Dhruv.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">Kadivendi mahipal chary</h5>
									<p class="text-white text-uppercase">social innovation using technology</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Nimal.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">Nimal raghavan</h5>
									<p class="text-white text-uppercase">sanitation and water</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Piyush_Tewari.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">piyush tewari</h5>
									<p class="text-white text-uppercase">road safety</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Ranjeet_Yadav.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">ranjeet yadav</h5>
									<p class="text-white text-uppercase">rural and slum development</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Preethi_S.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">preethi srinivasan</h5>
									<p class="text-white text-uppercase">healthcare</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Sipong_Chingmak_Chang.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">Sipong Chingmak Chang</h5>
									<p class="text-white text-uppercase">healthcare</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Raziya_Sheikh.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">raziya shaikh</h5>
									<p class="text-white text-uppercase">girl child & women's rights empowerment</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Vishal_Singh.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">vishal singh</h5>
									<p class="text-white text-uppercase">food management & nutrition</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Sarita_Subramaniam.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">sarita subramaniam</h5>
									<p class="text-white text-uppercase">environment sustainablity</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Pauzagin.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">pauzagin tonsing</h5>
									<p class="text-white text-uppercase">education</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Peera_Ram.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">peera ram</h5>
									<p class="text-white text-uppercase">animal welfare</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-12">
							<div class="winner-tile">
								<div class="image mb-3">
									<img class="w-100" src="<?= base_url('assets/media/images/winners/Raimati.png') ?>" alt="Speaker">
								</div>
								<div class="text-content text-center p-3 py-0">
									<h5 class="text-gold text-uppercase">raimati ghiuria</h5>
									<p class="text-white text-uppercase">agriculture</p>
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
	<section class="section pb-0" id="quotes">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians <?= date('Y') ?></p>
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
	<section id="gallery" class="section">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians <?= date('Y') ?></p>
				<h2>Event Gallery</h2>
			</div>
			<!-- <div class="d-none">
				<div class="gallery-masonry" id="galleryMasonry">
					<?php for ($i = 1; $i <= $page['gallery']; $i++) : ?>
						<a class="tile mb-2" href="<?= base_url('assets/media/images/gallery/' . $i . '.jpg') ?>">
							<figure>
								<picture>
									<source srcset="<?= base_url('assets/media/images/gallery/thumbs/' . $i . '.jpg') ?>" type="image/jpg">
									<img class="w-100" src="<?= base_url('assets/media/images/gallery/thumbs/' . $i . '.jpg') ?>" alt="<?= $i ?>" loading="lazy">
								</picture>
								<figcaption></figcaption>
							</figure>
						</a>
					<?php endfor ?>
				</div>
			</div> -->
			<div class="d-none d-md-block">
				<div class="row g-2 gallery-masonry" id="galleryMasonry">
					<?php for ($i = 1; $i <= $page['gallery']; $i++) : ?>
						<a class="tile col-xxl-2 col-xl-3 col-lg-4 col-6" href="<?= base_url('assets/media/images/gallery/' . $i . '.jpg') ?>">
							<figure>
								<picture>
									<source srcset="<?= base_url('assets/media/images/gallery/thumbs/' . $i . '.jpg') ?>" type="image/jpg">
									<img class="w-100" src="<?= base_url('assets/media/images/gallery/thumbs/' . $i . '.jpg') ?>" alt="<?= $i ?>" loading="lazy">
								</picture>
								<figcaption></figcaption>
							</figure>
						</a>
					<?php endfor ?>
				</div>
			</div>
			<div class="d-block d-md-none">
				<div class="swiper gallerySwiperW">
					<div class="swiper-wrapper gallery-masonry" id="galleryMasonryW">
						<?php for ($i = 1; $i < $page['gallery']; $i++) : ?>
							<a class="swiper-slide tile mb-2" href="<?= base_url('assets/media/images/gallery/' . $i . '.jpg') ?>">
								<figure>
									<picture>
										<source srcset="<?= base_url('assets/media/images/gallery/' . $i . '.jpg') ?>" type="image/jpg">
										<img class="w-100" src="<?= base_url('assets/media/images/gallery/' . $i . '.jpg') ?>" alt="<?= $i ?>" loading="lazy">
									</picture>
									<figcaption></figcaption>
								</figure>
							</a>
						<?php endfor ?>
					</div>
				</div>
				<script>
					new Swiper(".gallerySwiperW", {
						slidesPerView: 2,
						spaceBetween: 20,
						grid: {
							rows: 1,
							fill: "row"
						},
						breakpoints: {
							640: {
								slidesPerView: 3,
								spaceBetween: 20,
								grid: {
									rows: 1,
									fill: "row"
								}
							},
							1024: {
								slidesPerView: 4,
								spaceBetween: 50,
								grid: {
									rows: 2,
									fill: "row"
								}
							},
							1400: {
								slidesPerView: 5,
								spaceBetween: 30,
								grid: {
									rows: 2,
									fill: "row"
								}
							},
						}
					})
					lightGallery(document.getElementById('galleryMasonry'), {
						plugins: [lgZoom, lgThumbnail],
						speed: 500,
						lightbox: {
							// Other options...
							horizontal: true
						}
					});
					lightGallery(document.getElementById('galleryMasonryW'), {
						plugins: [lgZoom, lgThumbnail],
						speed: 500,
						lightbox: {
							// Other options...
							horizontal: true
						}
					});
				</script>
			</div>
		</div>
	</section>
	<section id="articles" class="section pb-0">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians <?= date('Y') ?></p>
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
				<p class="">Amazing Indians <?= date('Y') ?></p>
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
