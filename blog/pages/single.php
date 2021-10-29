
    <h2> i am on the SINGLE-PAGE <h2>				  
				  
    <p><a href="index.php?p=homeland"> PAGE---HOME </a></p>
				 
	<?php
			
			echo 'here the id----> '. $_GET['id'].'<br>' ;
			  
			$tabdata=$db->query('SELECT * FROM articles','App\Table\article');
			
			//----------------echo  $tabdata[$_GET['id']]->contenu;
			//echo $tabdata[$_GET['id']]-> getExtrait_full(); the first index array = 0--d ou le décalage du contenu
			//echo $tabdata[0]-> getExtrait_full();
			
			//var_dump ($tabdata);
			//var_dump ($tabdata[ $_GET['id']]);
			//echo $tabdata[ $_GET['id']];			
			// var_dump ($tabdata[$_GET['id']]->contenu);
			
			$post = $db->prepare ('SELECT * FROM articles WHERE id=?',[$_GET['id']],'App\Table\Article',true);
			
	?>
	
	<p><?= $post->titre;?></p>
	
	<p><?= $post->contenu;?></p>
	
	
			
			
			