
 <h2> i am on the HOME-PAGE <h2>
				  
 

 <p>
 <a>-----ZEBI-kbir bezef-------VOILA-GIT </a>
 
 </p>
 
    <ul>

		<?php	
				$tabdata=$db->query('SELECT * FROM articles','App\Table\article');
				//var_dump ($tabdata[0]);
				echo $tabdata[0]-> id;
				
				
				foreach ($db->query('SELECT * FROM articles','App\Table\article') as $post):
				//var_dump ($post);
		?>
				
				<h2> <a href="<?php echo $post->url ?>"> <?= $post->titre; ?> </a></h2>
				<p>
				    <?php echo $post->Extrait;?> 
				</p>
			
	   <?php endforeach; ?>

   </ul>


				  
 
  
 ;