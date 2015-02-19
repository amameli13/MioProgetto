<?php
	/*
		Controller, qui viene gestito il passaggio fra model e view 
		richiamando le funzioni delle classi utilizzate dall'utente
	*/
	
	include_once("Model/Model.php");
	include_once("Model/Vision.php");
	
	class ControllerUtente 
	{
 		public $model;	
		public $vision;
 		public function __construct()  
    	{  
 
    	} 
 
 		public function invoke($request)
 		{	
			$mod = new Model();
			$vs = new Vision();
			//qui avviene il controllo su le ricchieste dell'utente/amm
			//vien caricato il contenuto della parte richiesta dell'utente/amm tramite il file vision nel modulo
			if(isset($request['com']))
			switch ($request['com'])
			{			
				case 'utente':
					$vs->setUtente();
					break;
				case 'logout': 
					$mod->getlogout();
					break;
				case 'gallery':
					$vs ->setGalleryUtente();
					break;
				case 'eventi' :
					$vs -> setEventiUtente();
					break;
				case 'friends' :
					$vs -> setFriendsUtente();
					break;
				
				case 'carrello':
					$vs -> setCarrello();
					break;
				




				
			}
				
			
		}			
	}	

?>
