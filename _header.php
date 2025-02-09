<?php $arrRecursos[] = 'aos'; ?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="auto">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Xweb">

	<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="./assets/img/favicon.png">

	<title><?php echo $strTagTitle; ?></title>
	<meta name="description" content="<?php echo $strTagDescription; ?>">
	<meta name="keywords" content="<?php echo $strTagKeywords; ?>">
	<meta name="robots" content="index">

	<!-- CSS CORE -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-icons.css" rel="stylesheet">

	<!-- CSS PLUGINS -->
	<?php if(in_array("aos", $arrRecursos)){ ?>
		<link href="assets/css/plugins/aos.css" rel="stylesheet">
	<?php } ?>

	<!-- CSS CUSTOM -->
	<link href="assets/css/custom-xweb.css?v=1.1.1" rel="stylesheet">

</head>

<body>

	<?php
	/* ajusta link de ancoras em outras paginas */
	if(isset($strIndex)){ 
		$urlAncora = null;
	}else{ 
		$urlAncora = URL;
	}
	?>

	<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light shadow">
		<div class="container-fluid container-xl p-2">
			<a class="navbar-brand me-1" href="<?php echo $urlAncora; ?>"><img src="<?php echo URL; ?>assets/img/logo-x-p.png" style="width:40px"></a>
			<a href="<?php echo $urlAncora; ?>" class="text-decoration-none"><h1 class="fs-1 text-gradient text-primary" style="padding-top:12px;">Contábil.</h1></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarScroll">
				<ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
					<li class="nav-item px-2">
						<a class="nav-link active" aria-current="page" href="<?php echo $urlAncora; ?>#">Início</a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link" href="<?php echo $urlAncora; ?>#quem-somos">Quem Somos</a>
					</li>
					<li class="nav-item px-2 dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Serviços
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
							<li><a class="dropdown-item" href="<?php echo $urlAncora; ?>#contabilidade-empresarial">Contabilidade Empresarial</a></li>
							<li><a class="dropdown-item" href="<?php echo $urlAncora; ?>#planejamento-tributario">Planejamento Tributário</a></li>
							<li><a class="dropdown-item" href="<?php echo $urlAncora; ?>#abertura-de-empresas">Abertura de Empresas</a></li>
							<li><a class="dropdown-item" href="<?php echo $urlAncora; ?>#folha-de-pagamento">Folha de Pagamento</a></li>
						</ul>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link" href="<?php echo $urlAncora; ?>#contato">Contato</a>
					</li>
				</ul>
				<div class="d-flex ps-2">
					<a href="https://wa.me/5511999999999" target="_blank" class="btn btn-success rounded-pill" type="submit"><i class="bi bi-whatsapp fs-5"></i> Whatsapp</a>
				</div>
			</div>
		</div>
	</nav>


	<header>
		<div class="page-header min-vh-50 position-relative bg-gradient-primary">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 text-center mx-auto" data-aos="fade-down" data-aos-duration="800">
						<h1 class="text-white fs-2"><?php echo $strTitulo; ?></h1>
						<?php if(isset($strSubTitulo)){ ?>
							<p class="text-white mt-2 fs-5"><?php echo $strSubTitulo; ?></p>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="position-absolute w-100 z-1 bottom-0">
				<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
					<defs>
						<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
					</defs>
					<g class="moving-waves">
						<use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
						<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
						<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
						<use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
						<use xlink:href="#gentle-wave" x="48" y="10" fill="rgba(255,255,255,0.15)" />
						<use xlink:href="#gentle-wave" x="48" y="10" fill="rgba(255,255,255,0.98)" />
					</g>
				</svg>
			</div>
		</div>
	</header>
