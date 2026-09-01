<main>
    <section class="section pb-0" id="grand_jury">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians <?= $page['year'] ?></p>
				<h2>Grand Jury</h2>
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
										<h4 class="text-gold">Neerja Birla</h4>
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
										<h4 class="text-gold">Padmaja Ruparel</h4>
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
										<h4 class="text-gold">Sanjeev Bhikchandani</h4>
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
										<h4 class="text-gold">Prasoon Joshi</h4>
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
										<h4 class="text-gold">Ashish Chauhan</h4>
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

	
    <section class="section pb-0" id="pre_jury">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
			<p class="">Amazing Indians <?= $page['year'] ?></p>
				<h2>Pre Jury</h2>
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
											<h4 class="text-gold">Sherin Ali</h4>
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
											<h4 class="text-gold">Shashaank Awasthi</h4>
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
											<h4 class="text-gold">Sudha Jhijaria</h4>
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
											<h4 class="text-gold">Amitabh Shah</h4>
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
											<h4 class="text-gold">Soma Bhattacharya</h4>
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
											<h4 class="text-gold">Joy Kar</h4>
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
											<h4 class="text-gold">Deepti Sawhney</h4>
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
											<h4 class="text-gold">Prashant Naigaonkar</h4>
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
											<h4 class="text-gold">Prakash Kondekar </h4>
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
											<h4 class="text-gold">Devendra Kumar</h4>
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
											<h4 class="text-gold">Durgesh Buxy</h4>
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
											<h4 class="text-gold">Nilesh Lele</h4>
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
											<h4 class="text-gold">K Randhir Singh</h4>
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
											<h4 class="text-gold">Sumit Dasgupta</h4>
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
											<h4 class="text-gold">Yogesh Kapse</h4>
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
											<h4 class="text-gold">Manish Singh</h4>
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
											<h4 class="text-gold">Mallikarjuna Iytha</h4>
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
											<h4 class="text-gold">Dias</h4>
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

    <!-- winner jury -->
    <section class="section pb-0" id="winner_jury">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians <?= $page['year'] ?></p>
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
									<h5 class="text-gold text-uppercase">Ramprasad Sarkar</h5>
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
									<h5 class="text-gold text-uppercase">Dr Tapesh Mathur</h5>
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
									<h5 class="text-gold text-uppercase">Raghu Narasingasa Hubballi</h5>
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
									<h5 class="text-gold text-uppercase">Dr. Shiva Balak Misra</h5>
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
									<h5 class="text-gold text-uppercase">Mr. Deepak Vishwakarma</h5>
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
									<h5 class="text-gold text-uppercase">Dr Issa Fathima Jasmine. M</h5>
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
									<h5 class="text-gold text-uppercase">Ms. Meera Satpathy</h5>
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
									<h5 class="text-gold text-uppercase">Kkanchan Gupta</h5>
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
									<h5 class="text-gold text-uppercase">Ekta Viiveck Verma</h5>
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
									<h5 class="text-gold text-uppercase">Triveni Acharya</h5>
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
									<h5 class="text-gold text-uppercase">Kuldeep Raj Saxena</h5>
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
									<h5 class="text-gold text-uppercase">Mr. Ambika Patel</h5>
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
									<h5 class="text-gold text-uppercase">Rajasekhara Raju Podili</h5>
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


	<section id="gallery" class="section d-none">
		<div class="container">
			<div class="section-title mb-3 mb-md-5">
				<p class="">Amazing Indians <?= $page['year'] ?></p>
				<h2>Event Gallery</h2>
			</div>
			<!-- <div class="d-none">
				<div class="gallery-masonry" id="galleryMasonry">
					<?php for ($i = 1; $i <= $page['gallery']; $i++) : ?>
						<a class="tile mb-2" href="<?= base_url('assets/media/images/gallery/2024/' . $i . '.jpg') ?>">
							<figure>
								<picture>
									<source srcset="<?= base_url('assets/media/images/gallery/2024/thumbs/' . $i . '.jpg') ?>" type="image/jpg">
									<img class="w-100" src="<?= base_url('assets/media/images/gallery/2024/thumbs/' . $i . '.jpg') ?>" alt="<?= $i ?>" loading="lazy">
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
						<a class="tile col-xxl-2 col-xl-3 col-lg-4 col-6" href="<?= base_url('assets/media/images/gallery/2024/' . $i . '.jpg') ?>">
							<figure>
								<picture>
									<source srcset="<?= base_url('assets/media/images/gallery/2024/thumbs/' . $i . '.jpg') ?>" type="image/jpg">
									<img class="w-100" src="<?= base_url('assets/media/images/gallery/2024/thumbs/' . $i . '.jpg') ?>" alt="<?= $i ?>" loading="lazy">
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
					});
					lightGallery(document.getElementById('galleryMasonryW'), {
						plugins: [lgZoom, lgThumbnail],
						speed: 500,
					});
				</script>
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
    
</main>