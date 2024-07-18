<script>
	window.onscroll = function() {
		let image = document.getElementById("scrollToTop");
		image.style.transform = "rotate(" + window.pageYOffset / 2 + "deg)";
	};
</script>
<a href="#" class="scrollTo">
	<div class="row align-items-center g-0">
		<div class="col-auto">
			<div class="text-white">
				<i class="fa-solid fa-arrow-up"></i>
			</div>
		</div>
		<div class="col-auto">
			<div class="" id="scrollToTop">
				<img src="<?= base_url("assets/media/logos/") ?>chakri.png" alt="Scroll to Top">
			</div>
		</div>
	</div>
</a>
