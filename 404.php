<?php include '_header.php'; ?>

<!-- -------- START HEADER 8 w/ card over right bg image ------- -->

<header class="position-relative">
	<div class="page-header min-vh-50 bg-gradient-danger">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-sm-9 text-center mx-auto">
					<h2 class="text-white">404 - Página Não Encontrada</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="position-absolute w-100 z-index-1 bottom-0">
		<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
			<defs>
				<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
			</defs>
			<g class="moving-waves">
				<use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40"></use>
				<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
				<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
				<use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
				<use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
				<use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95"></use>
			</g>
		</svg>
	</div>
</header>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 d-flex justify-content-center flex-column">
				<div class="card d-flex blur justify-content-center p-4 shadow-lg mt-4">
					<h3 class="text-danger">404 - Página Não Encontrada</h3>
					<p>
						Acesse o menu para voltar ao site
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<img src="<?php echo URL; ?>assets/img/404.png" class="w-100">
			</div>
		</div>
	</div>
</section>

<?php include '_footer.php'; ?>