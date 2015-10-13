	<?php
		  //grab info for catagory  $variable		
		//To turn all links off set status to delete/turn on set status to live		
		$status = "live";
	    //$status = "delete";	
						$q ="SELECT l.title ,l.url, c.catagory
								FROM
								links AS l
								INNER JOIN
								catagories AS c
								INNER JOIN
								pages_catagories AS p
								WHERE
								l.link_id= p.link_id
								AND
								c.id = l.catagories_id
							    AND
							    c.id = '$c'
							    AND
							    status ='$status'
							    AND
							    public_private='public'
							    
							    ORDER BY l.title ASC
							    ";
								
								
							$r = mysqli_query($dbc, $q);
							
	
			//grab the catagory
			
							$q ="SELECT catagory FROM catagories
							WHERE
							id ='$c'";
								
								
							$c = mysqli_query($dbc, $q);
							
		
			
			
				
										//echo"ok";
					/*				  	
				
						echo '<div><h4><a href="page.php?id='. $row['id'].'">'.htmlspecialchars($row['title']).'</a></h4>
						<p>'.htmlspecialchars($row['description']). '</p></div>';
				*/
					
					
					
				
				