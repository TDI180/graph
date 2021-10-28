<?php
					require  '../app/Autoloader.php';
					App\Autoloader::register(); //  call classes
					
					

					if (isset($_GET['p'])) 
					{
						$p=$_GET['p'] ;
					}
						else 
						{
							$p='homeland';
							
						}
										   //object initialisation
										   $db = new App\Database ('blog','','','');
										   App\App::getDb();
										   
											ob_start ();
																if ($p=== 'homeland') 
																		{
																		 require '../pages/home.php' ;
																		 
																		}
																		elseif  ($p=== 'single' )
																		{ 
																		 require '../pages/single.php' ; 
																		}
																		elseif  ($p=== 'article' )
																		{ 
																		 require '../pages/single.php' ; 
																		}
													
											$content=ob_get_clean ();	
											require '../pages/templates/defaultpage.php' ; 					