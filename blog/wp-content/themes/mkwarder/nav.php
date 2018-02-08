<?php	
	$currentFile = $_SERVER["SCRIPT_NAME"];
	$parts = Explode('/',$currentFile);
	$currentFile = $parts[count($parts) - 2];
	//print($currentFile . '<br />');
?>

<div class="menu-row" style="padding: 0 0 10px 0">
   	<nav class="wrapper" style="height: 60px;">
 			<ul class="menu">
			<?php
				switch ($currentFile) {
					case 'about':
						print('<li><a href="' . $siteRoot . '">Home</a></li>');
						print('<li><a class="active" href="' . $siteRoot . '/about">About the Author</a></li>');
						print('<li><a href="' . $siteRoot . '/books">Books</a></li>');
						print('<li><a href="' . $siteRoot . '/blog">Blog</a></li>');
						break;
					case 'books':
						print('<li><a href="' . $siteRoot . '">Home</a></li>');
						print('<li><a href="' . $siteRoot . '/about">About the Author</a></li>');
						print('<li><a class="active" href="' . $siteRoot . '/books">Books</a></li>');
						print('<li><a href="' . $siteRoot . '/blog">Blog</a></li>');
						break;
					case 'blog':
						print('<li><a href="' . $siteRoot . '">Home</a></li>');
						print('<li><a href="' . $siteRoot . '/about">About the Author</a></li>');
						print('<li><a href="' . $siteRoot . '/books">Books</a></li>');
						print('<li><a class="active" href="' . $siteRoot . '/blog">Blog</a></li>');
						break;
					default:
						print('<li><a class="active" href="' . $siteRoot . '">Home</a></li>');
						print('<li><a href="' . $siteRoot . '/about">About the Author</a></li>');
						print('<li><a href="' . $siteRoot . '/books">Books</a></li>');
						print('<li><a href="' . $siteRoot . '/blog">Blog</a></li>');
						break;
				}
			?>
      </ul>
      
     <div class="header-main">
      <div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
			</div>
      
			<div id="search-container" class="search-box-wrapper hide">
				<div class="search-box">
					<?php get_search_form(); ?>
				</div>
			</div>

    </nav>
</div> <!-- End menu-row -->
