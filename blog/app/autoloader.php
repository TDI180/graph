<?php namespace App ;
/**
 * Created by PhpStorm.
 * User: capta
 * Date: 05/05/2019
 * Time: 16:30
 */
 
 
  class autoloader 					
                     {		  
					  static function  autoload ($class)
														   {					
															 $class=str_replace( __NAMESPACE__ .'\\','',$class);	
															 /*tout placer dans le namespace zebi...permet d uiliser la constante magik __NAMESPACE__*/
															 /*le namespace zebi contient toute nos classe...*/
															 /* le nom de la classe et du fichier contenant cette classe est identik c trés important de comprendre cela*/
															 /*autoload charge le fichier et ensuite on peut acceder à la classe du meme nom*/
															
															 require  __DIR__ .  '/'.$class.'.php';
															 //var_dump ($class);
																
													      }
															
					 static function register ()
								                  { 
													var_dump(array (__CLASS__, 'autoload'));
																		
													spl_autoload_register (array (__CLASS__, 'autoload',)) ;	
													//spl_autoload_register  ( __CLASS__ , 'autoload') ;	
													/* le tableau array () contiendra le nom des classes  suivantes : ' zebi/HTML/form' & ' zebi/HTML/bootstrap'
												   sous forme de string...qui sera ensuite nettoyé par str replace du 'namespace''...*/	
										 		}	
						   }
