

<div class="gallery">
                  <p align="center">
    <a href="javascript:indietro()">INDIETRO</a> |
    <a href="javascript:avanti()">AVANTI</a>
    <br><br>
    <img src="galleria/1.jpg" name="immagine">
</p>

 
	</div>
 		<div id="clear" "clear: both; width: 0px; height: 0px;"></div>

<script>
var foto = new Array();

foto[0] = "galleria/1.jpg"
foto[1] = "galleria/2.jpg"
foto[2] = "galleria/3.jpg"
foto[3] = "galleria/4.jpg"
foto[4] = "galleria/5.jpg"
foto[5] = "galleria/6.jpg"
foto[6] = "galleria/7.jpg"
foto[7] = "galleria/8.jpg"
foto[8] = "galleria/9.jpg"
foto[9] = "galleria/10.jpg"
foto[10] = "galleria/11.jpg"
foto[11] = "galleria/12.jpg"
foto[12] = "galleria/13.jpg"
foto[13] = "galleria/14.jpg"
foto[14] = "galleria/15.jpg"


var i = 0;

function indietro()
{
    if (i == 0)
    {
        i = foto.length - 1;
    }
    else
    {
        i--;
    }
    document.immagine.src = foto[i];
}

function avanti()
{
    if (i < foto.length - 1)
    {
        i++;
    }
    else
    {
        i=0;
    }
    document.immagine.src = foto[i];
}
</script>
