
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



  </head>
  <body>
    <div name='generate' class='col-md-12'>
<hr>
    <button class="btn btn-primary" onclick='play()'>START GAME</button>
<hr>
<table>

<?for($i=0;$i<=100;$i++){?>

<tr>
<?for($j=0;$j<=100;$j++){?>

<td  onclick="selecc(<?echo $i.$j;?>);" id="<?echo $i.$j;?>">
AA
</td>
<?}?>
</tr>
<?}?>


</table>
    </div>


      
    </div>


<script type="text/javascript">
    
  var arr=[];

  function selecc(id){
    
  document.getElementById(id).style.backgroundColor = "black";
  document.getElementById(id).style.color = "black";
 
  }


  function play(){


    for (var i = Things.length - 1; i >= 0; i--) {
      Things[i]
    }

  }
</script>
  </body>
</html>