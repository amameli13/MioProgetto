<!DOCTYPE html>
 <html>
   <head>
     <title>Truman_FM</title>
       <link rel="icon" type="image/icon" href="../Immagini/icon.png" />
       <link href="../css/MioStile.css" rel="stylesheet" type="text/css" media="screen" />	
   </head>
       <body> 
         <div id="header">
            <header> 
               <p><img src="../Immagini/truman.png" class="scala" alt=""></p>
                 <h1><div class="socialnet">
                    <ul>
                       <li id="facebook"><a href="https://www.facebook.com/TrumanfmArt" target="_blank"><img src="../Immagini/fcb.jpg" border="0" 				alt="facebbok"></a></li>
 			<li id="blogspot"><a href="http://trumanfmart.blogspot.it/" target="_blank"><img src="../Immagini/index.png" border="0" 			alt="blogspot"></a></li> <li id="email"><a href ="https://www.gmail.com" target="_blank"><img src="../Immagini/email.jpg" 				boder="0" alt="e-mail"></a></li>
 			<li id="instagram"><a href ="http://instagram.com/trumanfmart" target="_blank"><img src="../Immagini/insta.jpeg" 				border="0" alt="instagram"></a></li>
		</h1></div>
 <div "clear: both; width: 0px; height: 0px;"></div>
 	    </header>
 	</div>


	<div id="sidebar">
 		
			<div class="menu">
			<ul>
				<li><a href="HomePage.html"> HOME </a></li>
				<li><a href="home_biografia.html">Bio</a></li>
				<li><a href="home_galleria.html">Gallery</a></li>
				<li><a href="home_eventi.html">Events</a></li>
				<li><a href="home_friends.html">Friends</a></li>	
			</div>
			<?php if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]){ ?>
			<h1>Benvenuto</h1>  <p>Truman</p>
			<form action="Login.php" method="request"><input type="submit"	name="logout"	value="Logout"/> </form>
				
 	</div>
	<div id="content">
content
  
	</div>
 		<div id="clear" "clear: both; width: 0px; height: 0px;"></div>
</div>
	


 <footer>
	 <div id="footer">
	      <div class="validator">
                    <p>
                        <a href="http://validator.w3.org/check/referer" class="xhtml" title="Questa pagina contiene HTML valido">
                            <abbr title="eXtensible HyperText Markup Language">HTML</abbr></a>
                        <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css" title="Questa pagina ha CSS validi">
                            <abbr title="Cascading Style Sheets">CSS</abbr></a>
                    </p>
              </div>
 	 </div>
 </footer>

</body> 
 </html>
