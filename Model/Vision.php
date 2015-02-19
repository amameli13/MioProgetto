<?php

	/*
		Vision,qua gestisco le view da parte del'utente/amm' così da facilitarmi
		la gestione delle pagine diverse per utente
	*/
	
	include_once("Model/Vision.php");

	class Vision 
	{

		public function setUtente()
		{       echo "utente";
			$login_logout = "View/Generale/logout.php";
			$content = "View/Homepage/content.php";
			$sidebar ="View/Utente/sidebar.php";
			$_SESSION['pagina']='utente';
			include ("View/Master.php");
		}

		public function setAmm()
		{	echo "amministratore";
			$login_logout = "View/Generale/logout.php";
			$content = "View/Amministratore/content.php";
			$sidebar ="View/Amministratore/sidebar_generale.php";
			$_SESSION['pagina']='amm';
			include ("View/Master.php");
		}

		public function setLogin()
		{       //echo"master";
			$login_logout = "View/Generale/login.php";
			$sidebar ="View/Homepage/sidebar.php";
			$content = "View/Homepage/content.php";
			$_SESSION['pagina']='login';
			include ("View/Master.php");
		}

		public function setGalleryUtente()
		{
			$login_logout ="View/Generale/logout.php";
			$sidebar ="View/Utente/sidebar.php";
			$content ="View/Utente/contentGallery.php";
			$_SESSION['pagina']='gallery';
			include ("View/Master.php");
		}
		
		public function setEventiUtente()
		{     
			$login_logout ="View/Generale/logout.php";
			$sidebar ="View/Utente/sidebar.php";
			$content ="View/Utente/contentEventi.php";
			$_SESSION['pagina']='eventi';
			include ("View/Master.php");
			

		}

		public function setFriendsUtente(){
			
			$login_logout ="View/Generale/logout.php";
			$sidebar ="View/Utente/sidebar.php";
			$content ="View/Utente/contentFriends.php";
			$_SESSION['pagina']='eventi';
			include ("View/Master.php");
		}

		public function setFriendsAmm(){
		
			$login_logout ="View/Generale/logout.php";
			$sidebar ="View/Generale/sidebar_generale.php";
			$content ="View/Amministratore/contentFriends.php";
			$_SESSION['pagina']='eventi';
			include ("View/Master.php");


		}

		public function setEventiAmm()
		{     
			$login_logout ="View/Generale/logout.php";
			$sidebar ="View/Amministratore/sidebar_generale.php";
			$content ="View/Amministratore/contentEventi.php";
			$_SESSION['pagina']='eventi';
			include ("View/Master.php");
			

		}	
		
		public function setGalleryAmm()
		{
			$login_logout ="View/Generale/logout.php";
			$sidebar ="View/Amministratore/sidebar_generale.php";
			$content ="View/Amministratore/contentGallery.php";
			$_SESSION['pagina']='gallery';
			include ("View/Master.php");
		}

		
		public function setCarrello()
		{
			$login_logout ="View/Generale/logout.php";
			$sidebar ="View/Utente/sidebar.php";
			$content ="View/Utente/contentCarrello.php";
			$_SESSION['pagina']='carrello';
			include ("View/Master.php");

		}

		
		
	}

?>
