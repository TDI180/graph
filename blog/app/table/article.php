<?php
namespace App\Table;

use App\App;

use zebi\zebi;

$foo= new zebi();
$foo->choufZEBI();

class article {
	           
				/*TEST DE LA BRANCHE */

				/* La surcharge magique en PHP permet de "créer" dynamiquement des propriétés et des méthodes. 
				    Ces entités dynamiques sont traitées via des méthodes magiques établies que l'on peut positionner dans une classe pour divers types d'actions.
                    Les méthodes magiques de surcharge sont appelées lors de l'interaction avec des propriétés ou des méthodes qui n'ont pas été déclarées 
				    ou ne sont pas visibles dans le contexte courant. 
				    Le reste de cette section utilise les termes de "propriétés inaccessibles" et de "méthodes inaccessibles"
				    pour se référer à cette combinaison de déclaration et de visibilité. 
				 */
				 
				/*
				   __set() est sollicitée lors de l'écriture de données vers des propriétés inaccessibles (protégées ou privées) ou non existante. 
				*/ 
				
				
				 public static function getLast() {

													return App::getDb()->query ('SELECT * FROM articles',__CLASS__);
												   } 				
				
				 
				 public function __get($key) //methode magik a revoir
				 
				   {
					var_dump ($key);
					
					$method = 'get'.ucfirst($key);	
				    //echo '-------------------';
					//var_dump ($this);
					//echo '-------------------';
					
					$key=$this->$method();/* on rajoute les accolade et ca donne un appel de getURL() ou getExtrait()*/
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