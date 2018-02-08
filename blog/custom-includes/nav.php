<?php	
	$currentFile = $_SERVER["SCRIPT_NAME"];
	$parts = Explode('/',$currentFile);
	$currentFile = $parts[count($parts) - 2];
	//print($currentFile . '<br />');
?>

<div class="menu-row">
 	<div class="main zerogrid">
   	<nav class="wrapper">
 			<ul class="menu">
			<?php
				switch ($currentFile) {
					case 'about':
						print('<li><a href="' . $siteRoot . '../">Home</a></li>');
						print('<li><a class="active" href="' . $siteRoot . '/../about">About the Author</a></li>');
						print('<li><a href="' . $siteRoot . '/../books">Books</a></li>');
						print('<li><a href="' . $siteRoot . '/../blog">Blog</a></li>');
						break;
					case 'books':
						print('<li><a href="' . $siteRoot . '">Home</a></li>');
						print('<li><a href="' . $siteRoot . '/about">About the Author</a></li>');
						print('<li><a class="active" href="' . $siteRoot . '/books">Books</a></li>');
						print('<li><a href="' . $siteRoot . '/blog">Blog</a></li>');
						break;
					case 'blog':
						print('<li><a href="' . $siteRoot . '/..">Home</a></li>');
						print('<li><a href="' . $siteRoot . '/../about">About the Author</a></li>');
						print('<li><a href="' . $siteRoot . '/../books">Books</a></li>');
						print('<li><a class="active" href="' . $siteRoot . '/../blog">Blog</a></li>');
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
    </nav>
  </div> <!-- End main zerogrid -->
</div> <!-- End menu-row -->
