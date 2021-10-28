<?php
   namespace App;
   use \PDO ; // permet l instanciation sans erreur de l objet PDO partout en evitant  de placer l antislash partout dans le code.
  // require 'blog\App\Table\Article.php';
   
    class Database {
							private $pdo;
							private $db_name;
							private $db_user;
							private $db_pass;
							private $db_host;								
		
		                    public function __construct ( $db_name,$db_user='root',$db_pass='',$db_host='localhost') 
																{
																	$this->db_name = $db_name;
																	$this->db_user = $db_user;
																	$this->db_pass = $db_pass;
																	$this->db_host = $db_host;
														        }											     
			  
			                private function getPDO ()
							{
								//l objet PDO SE TROUVE à la racine ...à preciser sinon error au niveau de l instanciation.
			                        // statement = requete sql= 'mysql:dbname=articles;host=localhost','root',' '
			                       // die(var_dump (PDO::ATTR_ERRMODE));	
									//var_dump ($this->pdo) ;	
									//echo ('zebi----');
								
								  if ( $this->pdo === null) // cette condition "if" permet d initier une seule & unik connexion à la data-base ---> diminue l allocation de memoire
								  {								 																																// pas de fuite de memoire
									 $pdo=new \PDO ( 'mysql:dbname=blog;host=localhost','root',''); //l objet PDO SE TROUVE à la racine ...à preciser sinon error au niveau de l instanciation.
									 $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									 $this->pdo = $pdo;
									 
								  }
							  
							     //var_dump ( $this->pdo) ; // CHECK IF CONNEXION IS UNIQUE
							  return   $this->pdo;			
			                  }
			                    
								public function query ($statement,$class_name)
												{
													//require '..\App\Table\Article.php';
													// DECLENCHE UNE ERREUR --->Fatal error: Cannot declare class article, because the name is already in use...
													// THE REASON WHY : the autoloader detects  the declaration of the class article --> require '..\App\Table\Article.php';
													$req = $this->getPDO()->query($statement);
													//$datas =$req->fetchAll ( PDO::FETCH_CLASS, 'Article');
													$datas =$req->fetchAll ( PDO::FETCH_CLASS, $class_name);
													// on range les données en instanciant la class article autant de fois qu il y a des données envoyeés
													 //var_dump ( $datas); // apercu 
													//echo ("zooooobi");
													return $datas;
												}  
	
					public function prepare ($statement, $attributes, $class_name, $one=false)					
					{
						$req=$this->getPDO()->prepare ($statement);
						$req->execute ($attributes);
					    $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
						if($one){
							      $datas=$req->fetch();
						        }  
								 else {
									    $datas = $req->fetchAll();
								      } 	
	                 return $datas;								  


					}
								
		
	}	
		
		
		
		
		