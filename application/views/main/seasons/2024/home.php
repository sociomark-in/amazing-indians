<main>
    <section id="agenda" class="section d-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-content">
                        <div class="title section-title mb-4 mb-md-5">
                            <p class="">Amazing Indians <?= $page['year'] ?></p>
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
				<p class="">Amazing Indians <?= $page['year'] ?></p>
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
				<p class="">Amazing Indians <?= $page['year'] ?></p>
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
	<section id="gallery" class="section">
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
</main>