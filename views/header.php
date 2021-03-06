<?php if (!defined('BASE_DIR')) {
	die("Cheating?");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo get_option("site_name"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="Description" content="<?php echo get_option('seo_description'); ?>">
	<link rel="stylesheet" id="bootstrap-css" type="text/css" href="assets/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.min.css" />
	<meta property="og:title" content="<?php echo get_option('seo_title'); ?>" />
	<meta property="og:description" content="<?php echo get_option('seo_description'); ?>" />
	<meta property="og:image" content="<?php echo get_option('seo_image'); ?>" />
	<meta property="og:url" content="<?php echo site_url(); ?>" />
	<script src="assets/vendor/jquery.min.js" defer></script>
	<script src="assets/vendor/bootstrap.bundle.min.js" defer></script>
	<script src="assets/js/theme-switch.min.js" defer></script>
	<?php echo get_option('tracking_code_1'); ?>
</head>
<body>
	<header id="site-header">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="site-logo">
						<a href="<?php echo site_url(); ?>">
							<svg viewBox="0 0 29 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g transform="translate(0.979236, 0.000000)" fill-rule="nonzero">
										<path d="M10.7907645,12.33 L10.7907645,11.11 C10.3672629,11.0428887 9.93950674,11.0061284 9.51076448,10.9999786 C5.35996549,10.9912228 1.68509679,13.6810205 0.438667694,17.6402658 C-0.807761399,21.5995112 0.663505842,25.9093887 4.07076448,28.28 C1.51848484,25.5484816 0.809799545,21.5720834 2.26126817,18.1270053 C3.71273679,14.6819273 7.05329545,12.4115428 10.7907645,12.33 L10.7907645,12.33 Z" fill="#25F4EE"/>
										<path d="M11.0207645,26.15 C13.3415287,26.1468776 15.2491662,24.3185414 15.3507645,22 L15.3507645,1.31 L19.1307645,1.31 C19.0536068,0.877682322 19.0167818,0.439130992 19.0207645,0 L13.8507645,0 L13.8507645,20.67 C13.764798,23.0003388 11.8526853,24.846212 9.52076448,24.85 C8.82390914,24.844067 8.13842884,24.6726969 7.52076448,24.35 C8.33268245,25.4749154 9.63346203,26.1438878 11.0207645,26.15 Z" fill="#25F4EE"/>
										<path d="M26.1907645,8.33 L26.1907645,7.18 C24.79964,7.18047625 23.4393781,6.76996242 22.2807645,6 C23.2964446,7.18071769 24.6689622,7.99861177 26.1907645,8.33 L26.1907645,8.33 Z" fill="#25F4EE"/>
										<path d="M22.2807645,6 C21.1394675,4.70033161 20.5102967,3.02965216 20.5107645,1.3 L19.1307645,1.3 C19.4909812,3.23268519 20.6300383,4.93223067 22.2807645,6 L22.2807645,6 Z" fill="#FE2C55"/>
										<path d="M9.51076448,16.17 C7.51921814,16.1802178 5.79021626,17.544593 5.31721201,19.4791803 C4.84420777,21.4137677 5.74860956,23.4220069 7.51076448,24.35 C6.55594834,23.0317718 6.42106871,21.2894336 7.16162883,19.8399613 C7.90218896,18.3904889 9.39306734,17.4787782 11.0207645,17.48 C11.4547752,17.4854084 11.8857908,17.5527546 12.3007645,17.68 L12.3007645,12.42 C11.8769919,12.3565056 11.4492562,12.3230887 11.0207645,12.32 L10.7907645,12.32 L10.7907645,16.32 C10.3736368,16.2081544 9.94244934,16.1576246 9.51076448,16.17 Z" fill="#FE2C55"/>
										<path d="M26.1907645,8.33 L26.1907645,12.33 C23.61547,12.3250193 21.107025,11.5098622 19.0207645,10 L19.0207645,20.51 C19.0097352,25.7544158 14.7551919,30.0000116 9.51076448,30 C7.56312784,30.0034556 5.66240321,29.4024912 4.07076448,28.28 C6.72698674,31.1368108 10.8608257,32.0771989 14.4914706,30.6505586 C18.1221155,29.2239183 20.5099375,25.7208825 20.5107645,21.82 L20.5107645,11.34 C22.604024,12.8399663 25.1155724,13.6445013 27.6907645,13.64 L27.6907645,8.49 C27.1865925,8.48839535 26.6839313,8.43477816 26.1907645,8.33 Z" fill="#FE2C55"/>
										<path d="M19.0207645,20.51 L19.0207645,10 C21.1134087,11.5011898 23.6253623,12.3058546 26.2007645,12.3 L26.2007645,8.3 C24.6792542,7.97871265 23.3034403,7.17147491 22.2807645,6 C20.6300383,4.93223067 19.4909812,3.23268519 19.1307645,1.3 L15.3507645,1.3 L15.3507645,22 C15.2751521,23.8467664 14.0381991,25.4430201 12.268769,25.9772302 C10.4993389,26.5114403 8.58570942,25.8663815 7.50076448,24.37 C5.73860956,23.4420069 4.83420777,21.4337677 5.30721201,19.4991803 C5.78021626,17.564593 7.50921814,16.2002178 9.50076448,16.19 C9.934903,16.1938693 10.3661386,16.2612499 10.7807645,16.39 L10.7807645,12.39 C7.0223379,12.4536691 3.65653929,14.7319768 2.20094561,18.1976761 C0.745351938,21.6633753 1.47494493,25.6617476 4.06076448,28.39 C5.66809542,29.4755063 7.57158782,30.0378224 9.51076448,30 C14.7551919,30.0000116 19.0097352,25.7544158 19.0207645,20.51 Z" fill="#000000"/>
									</g>
								</g>
							</svg>
							<span>TikTok Downloader</span>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="dropdown" id="bootstrap-theme">
						<button class="btn btn-secondary btn-md dropdown-toggle btn-block" type="button" data-toggle="dropdown">
							Select Theme
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>