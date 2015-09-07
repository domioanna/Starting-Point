<body <?php body_class(); ?>>
	<header>
		<div class="container">

			<div class="row">
	
				<div id="logo" class="col-xs-2 col-sm-1">
					<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>">
						<img src="<?php echo asset('img', 'logo.png'); ?>" alt="<?php bloginfo('name') ?>">
					</a>
				</div>
					
				<div class="col-xs-10 col-sm-11">
					
					<nav class="navbar navbar-default" role="navigation">
						
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="collapse navbar-collapse navbar-ex1-collapse">
			
							<?php 
						  	if (has_nav_menu('primary_navigation')) :
								wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right'));
							endif; 
							?>
							
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
		</div>
	</header>