<?php
	$link_array = array();
	$name_array = array();
	
	$link_array[0] = 'default.php';
	$link_array[1] = 'product.php';
	$link_array[2] = 'demos.php';
	$link_array[3] = 'download.php';
	$link_array[4] = 'learningcenter/';
	$link_array[5] = 'http://osqa.theformspider.com/';
	$link_array[6] = 'blog/index.php';
	$link_array[7] = 'license.php';
	$link_array[8] = 'aboutus.php';
	
	$name_array[0] = 'Home';
	$name_array[1] = 'Product';
	$name_array[2] = 'Demos';
	$name_array[3] = 'Download';
	$name_array[4] = 'Learn';
	$name_array[5] = 'Q&amp;A';
	$name_array[6] = 'Blog';
	$name_array[7] = 'License';
	$name_array[8] = 'About Us';
	
	echo '<div style="width:220px; float:left;"><a href="default.php"><img src="images/logo2.png" alt="Formspider Logo"></a></div>';
	echo '<ul class="menu">';
		for($i=0; $i<9; $i++)
		{
			echo '<li><a ';
			if($link_name == $name_array[$i] )
			{
				echo 'class="active"';
			}
	    	echo 'href="'; echo $link_array[$i]; echo '"> '; echo $name_array[$i]; echo '</a></li>';
	    	
	    	if($i == 2)
	    		echo '<li><a target="_blank" href="http://online.theformspider.com/formspider/main.html?name=FormspiderIDE">Online IDE</a></li>';
	    }
    echo '</ul>' 
?>
