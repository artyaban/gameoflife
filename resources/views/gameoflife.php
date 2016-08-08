
<!doctype html>
<html ng-app>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style type="text/css">
	td{border:solid #000 1px;height: 3px; width: 3px; margin: 3px; color:#fff;}
	tr{border:solid #000 3px;height: 3px; width: 3px ;margin: 5px; color :#fff;}
</style>


<script type="text/javascript">
    

  var cels=[];


  function selecc(fila,columna){
    fila = fila.toString();
    columna = columna.toString();
    id=fila+columna;
   
    
  if(  document.getElementById(id).style.backgroundColor == "black")
  {
  document.getElementById(id).style.backgroundColor = "white";
  document.getElementById(id).style.color = "white";
  cels[fila,columna]=false;
 

  }else{   
  document.getElementById(id).style.backgroundColor = "black";
  document.getElementById(id).style.color = "black";
  cels[fila,columna]=true;
  
  }
 alert(fila+' '+ columna);

 
  }


  function play(){

    for (var fila =0; i<=50; i++) {
      

      for (var i = 0; i <= 100; i++) {

        if(cels[fila,columna]==true){

          if(cels[fila+1,columna+1]){true}
        }else{


        }

        
      }

    }

  }


</script>

  </head>
  <body>
    <div name='generate' class='col-md-12' >
<hr>
    <button class="btn btn-primary" onclick='play()'>START GAME</button>
<hr>
<table>

<?for($i=1;$i<=30;$i++)// filas
{?>

<tr>
<?for($j=1;$j<=50;$j++)//columnas
{?> 

<td  onclick="selecc(<?echo $i;?>,<?echo $j;?>);" id="<?echo $i.$j;?>">
AA
</td>
<?}?>
</tr>
<?}?>


</table>
    </div>


      
    </div>


  </body>
</html>