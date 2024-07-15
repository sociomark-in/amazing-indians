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
				autoplay:{
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
	<section id="about" class="section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-5 col-md-6 col-12">
					<div class="media-content">
						<div class="wrap">
							<picture>
								<source srcset="https://placehold.co/800x1200/webp" type="image/webp">
								<source srcset="https://placehold.co/800x1200/jpg" type="image/jpg">
								<img class="w-100" src="https://placehold.co/800x1200/jpg" alt="" loading="lazy">
							</picture>
						</div>
					</div>
				</div>
				<div class="col-xl-7 col-md-6 col-12">
					<div class="text-content">
						<div class="title section-title">
							<p class="m-0">Amazing Indians</p>
							<h2 class="">Lorem, ipsum dolor.</h2>
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
	<section id="gallery" class="section">
		<div class="container">
			<div class="section-title mb-3 mb-md-5 text-center">
				<h2><span class="highlight">G</span>allery</h2>
			</div>
			<div class="gallery-masonry" id="galleryMasonry">
				<?php for ($i = 0; $i < 20; $i++) : ?>
					<a href="https://placehold.co/1500x1000/jpg">
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
			lightGallery(document.getElementById('galleryMasonry'), {
				plugins: [lgZoom, lgThumbnail],
				speed: 500,
			});
		</script>
	</section>
</main>
