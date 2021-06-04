<?php
namespace App\Table;

class article {
	           
				 
				 public function __get($key) //methode magik a revoir
				 {
					var_dump ($key);
					
					$method = 'get'.ucfirst($key);	
				    //echo '-------------------';
					//var_dump ($this);
					//echo '-------------------';
					
					$key=$this->$method();
					//echo '*****************';
					//var_dump ($key);
					//echo '*****************';
					return $key;
				 }
				 
				 
				 public function getUrl()
				 {
                    //var_dump ($this);
					return 'index.php?p=article&id='. $this->id; 
				 }
				  public function getExtrait()
				 {
					$html='<p>'. substr ($this->contenu,0,300) .'....</p>';
					$html .= '<p><a href="'.$this->getURL() .'"> Voir la suite</a> </p>';
					
					return $html;
				 }
				 
				   public function getExtrait_full()
				 {
					$html='<p>'. $this->contenu .'....</p>';
					//$html .= '<p><a href="'.$this->getURL() .'"> Voir la suite</a> </p>';
					
					return $html;
				 }
	
	
              }

?>

//samedi 27 mars 2021