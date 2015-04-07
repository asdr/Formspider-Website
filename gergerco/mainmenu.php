<?php
	$link_array = array();
	$name_array = array();
	
	
	
	$link_array[0] = 'contact.php';
	$link_array[1] = 'references.php' /*'http://www.gergerconsulting.blogspot.com/index.html'*/;
	//$link_array[2] = 'blog/' /*'http://www.gergerconsulting.blogspot.com/index.html'*/;
	//$link_array[3] = 'aboutus.php' /*'wordpress/index.php'*/;
	/*$link_array[3] = 'wordpress/index.php'*/;
	//$link_array[4] = 'services.php';
	$link_array[2] = 'default.php';
	
	$name_array[0] = 'Contact';
	//$name_array[1] = 'Yalim&#39;s Lodge';
	//$name_array[2] = 'Blog';
	$name_array[1] = 'References';
	//$name_array[3] = 'About Us';
	//$name_array[4] = 'Our Services';
	$name_array[2] = 'Home';
	
	
	echo '<div style=" float:left;"><a href="default.php"><img height="88" width="250" src="images/gerger_logo.png" /></a></div>';
	echo '<div style=" float:right; align:right;" ><ul class="menu">';
		for($i=0; $i<3; $i++)
		{   echo '<li><a ';
			if($link_name == $name_array[$i] )
			{
				echo 'class="active" style="text-decoration: none;"';
			}
	    	echo 'href="'; echo $link_array[$i]; echo '"> '; echo '<u class="inneractive">'; echo $name_array[$i]; echo '</u>'; 
            echo '</a></li>';
	    	
	    	/*if($i == 2)
	    		echo '<li><a target="_blank" href="http://online.theformspider.com">Try Online</a></li>';*/
	    }
	    
	
    echo '</ul></div>' ;
    echo '<div style="width:980px; float:left;"><hr></div>';
?>