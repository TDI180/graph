<?php

			// On récupère les variables envoyées par le formulaire
			//$login = $_POST['login'];
			//$password = $_POST['password'];

			// Connexion à la BDD en PDO
			try { $bdd = new PDO('mysql:host=localhost;dbname=zebi','root',''); 
					foreach ( $bdd->query('SELECT * FROM zebi_0' ) as $row) { print_r($row);echo '</br>'; }
			
		          }
			catch (Exeption $e) { die('Erreur : ' .$e->getMessage())  or die(print_r($bdd->errorInfo())); }

			// Requête SQL
			//$req = $bdd->query("SELECT * FROM zebi_0 WHERE login='LOGIN' AND password='PASSWORD' ");
			//$req = $bdd->query("SELECT * FROM 'zebi_0'  ");
			
			//foreach ( $bdd->query("SELECT * FROM 'zebi_0'  " ) as $row) { print_r($row); }
			
			die ();
			
			try {
                          $dbh = new PDO('mysql:host=localhost;dbname=zebi', 'root', '');
                          foreach($dbh->query('SELECT * from zebi_0') as $row) {
                           //print_r($row);
                  }
           $dbh = null;
					} catch (PDOException $e) {
						                                         print "Erreur !: " . $e->getMessage() . "<br/>";
					                                        	die();
					                                           }
?>