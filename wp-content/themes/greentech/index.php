<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<!-- 
 
 
 <?php wp_head(); 


?> 

-->
</head>
<body>


<!-- Wrapper -->
			<div id="wrapper">



				<!-- Header -->
					<header id="header">
						<a href="index.php"><img src="images/logo.svg" alt="" class="logo" /></a>
						<nav class="links">
							<ul>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">Ipsum</a></li>
								<li><a href="#">Feugiat</a></li>
								<li><a href="#">Tempus</a></li>
								<li><a href="#">Adipiscing</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
                         
							<section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Lorem ipsum</h3>
											<p>Feugiat tempus veroeros dolor</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Dolor sit amet</h3>
											<p>Sed vitae justo condimentum</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="#" class="button large fit">Log In</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">

						<?php
						$posts = get_posts();


						if ($posts) :
							foreach ($posts as $post) :


						?>

						<!-- Posts -->

                        	<article class="post">
								<header>
									<div class="title">
										<h2><a href=<?php echo get_permalink($post->ID); ?>     ><?php echo $post->post_title; ?></a></h2>
										<p><?php echo $post->post_excerpt; ?></p>
									</div>
									<div class="meta">
										<time class="published" datetime="<?php echo $post->post_date; ?>"><?php echo date('F j, Y', strtotime($post->post_date)); ?></time>
										<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="single.html" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
								<p><?php echo $post->post_content; ?></p>
								<footer>
									<ul class="actions">
										<li><a href="single.html" class="button large">Continue Reading</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

						<?php
							endforeach;
						endif;
						?>

						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button large previous">Previous Page</a></li>
								<li><a href="#" class="button large next">Next Page</a></li>
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<header>
									<h2>GreenTech Solutions</h2>
									<p>Lorem ipsum</p>
								</header>
							</section>

						<!-- Mini Posts -->
							<section>
    <ul class="posts">
        <?php 
        $mini_posts = get_posts(array('numberposts' => 5));
        
        if ($mini_posts) :
            foreach ($mini_posts as $mini_post) :
                $mini_post_id = $mini_post->ID;
        ?>
        
        <li>
            <article>
                <header>
                    <h3><a href="single.html"><?php echo $mini_post->post_title; ?></a></h3>
                    <time class="published" datetime="<?php echo $mini_post->post_date; ?>"><?php echo date('F j, Y', strtotime($mini_post->post_date)); ?></time>
                </header>
                <a href="single.html" class="image">
                    <?php
                    if ( has_post_thumbnail( $mini_post_id ) ) {
                        echo get_the_post_thumbnail(
                            $mini_post_id,
                            'thumbnail',
                            array(
                                'class' => 'post-featured-img'
                            )
                        );
                    }
                    ?>
                </a>
            </article>
        </li>
        
        <?php
            endforeach;
        endif;
        ?>
    </ul>
</section>

						<!-- Posts List -->
							<section>
								<ul class="posts">
									<li>

                                    <?php 


	$mini_posts = get_posts(array('numberposts' => 5));
		
		if ($mini_posts) :
			foreach ($mini_posts as $mini_post) :
                 $mini_post_id = $mini_post->ID;
		?>


										<article>
											<header>
												<h3><a href="single.html"><?php  echo $mini_post->post_title ?></a></h3>
												<time class="published" datetime="2015-10-20">October 0, 2015</time>
											</header>
											<a href="single.php" class="image">
                                        
                                        
                                          <?php
	                         if ( has_post_thumbnail( $mini_post_id ) ) {
                                    echo '<a href="single.html" class="image featured">';
     echo get_the_post_thumbnail(
                                        $mini_post_id,
                                        'thumbnail',
                                        array(
                                            'class' => 'post-featured-img'
                                        )
                                    );
                                    // Output nothing cause there is no image
                                    echo '</a>';                       }

                                    ?>
                                        </a>


                                            
										</article>

    
									</li>

                                                                            	<?php
			endforeach;
		endif;
		?>

								

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
								<ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled.</p>
							</section>

					</section>

			</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

</body>
</html>