 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="styles/bootstrap.css">
   
  
</head>
 <script src="scripts/jquery.min.js"></script>
 <script src="scripts/script.js" type="text/javascript" charset="utf-8" async defer></script>
 
<body>  
<header>
<style>
  .footer 
  {
  position: fixed;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
  text-align: center;
  }
</style>



<h1>Formulario Entrada Clientes JSON</h1> 
</header>
<section>
  
<div class = "container">  
  <div class="row">

    <div class="col-md-4"></div>
    <div class="col-md-4"><h4>Ingresar Nuevo Cliente</h4><br>
       <form action="ajaxsubmit.php" method="POST" class="form-horizontal" role="form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="nombre">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Entrar Nombre">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="apellido">Apellido:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="apellido" value="" name="apellido" placeholder="Entrar Apellido">
          </div>
        </div>
        <div class="form-row">
            <label class="control-label col-sm-2" for="nc"></label>
            <div class="input-group"> 
                <span class="input-group-addon">N° Cliente</span>
                <input id="nc" type="number"   name="nc" value=""  readonly />
            </div>
        </div>
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10">
          <input id="submit" type="submit" value="Invia">
         <!--  <button id="submit" type="submit" class="btn btn-default">Enviar</button>!-->
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
</section>

<div class = "container">  
  <div class="row">
      <div class="col-md-4"><div id="resultx"></div></div>
          <div class="col-md-4">
              <table>
              <tr>
              <td>Numero Automatico:</td>             
              <td id="content1">Numero Nuevo cliente : </td>             
              </tr>
              </table>
          </div>
        
      <div class="col-md-4"></div>
      </div>
</div>

<div id="footer">
  <div class="footer">
    <h4>Ejemplo Formulario Bootstrap - PHP - Ajax - HTML5 - css3 DE:Ignacio Sebastian Olivieri 21/03/2016 v0.1 </h4> 
  </div>
</div>

<script src="scripts/jquery.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="scripts/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>

<script>
 


//Ajax read file php 
 
$(document).ready( function() {
 
        $.ajax({
            type: 'POST',
            url: 'myAjaxFile.php',
            data: 'id=testdata',
            dataType: 'json',
            cache: false,
            success: function(result) {
                $('#content1').html(result[0]);
                //set rand number forminput 
                var mi = result[0];
                $('#nc').val(mi);
            },
        }); 
});

//ok
 $(document).ready( function() {

$.getJSON("myclients.php", function(result){
// alert(result.justIn[0].nombre);
        $.each(result[0].justIn, function (i, value) {
          //alert(value.nombre);
           $("#resultx").append("<p>"+ value.nombre +"</p>");
          

        }),
        $.each(result[1].Articulos, function (i, value) {
          //alert(value.nombre);
           $("#resultx").append("<p>"+ value.name_article +"</p>");

        });
    });

/* ok
$.ajax({ 
  url: 'myclients.php', 
  type: 'GET',
  dataType: 'json',
  cache: false,
  success: function (result) {

      //  alert(jQuery.dataType);

    
         $.each(result, function (i, value) {
            $("#resultx").append("<p>Cliente N°: "+ value.id );
            $("#resultx").append("<p>"+ value.nombre +"</p>");
            $("#resultx").append("<p>"+ value.name_article +"</p>");

         });
      

  },
  error: function () {
      alert("No");
  }
});*/
 

/* ok
       $.ajax({
            type: 'POST',
            url: 'myclients.php',
            data: 'id=testdata',
            dataType: 'json',
            cache: false,
            success: function(result) {
              //var mi = result;$('#resultx').html(result[i].nombre);
               // $('#nc').val(mi);
                $.each(result, function (name,value) {
                $.each(result, function (name,value) {
                   $("#resultx").append("<p>Cliente N° ");

                   $.each(this, function (name, value) {
                      //console.log(name + '=' + value);
                       $("#resultx").append(""+ value +"</p>");
                   });
                });
                });
            }
        })*/


 
 
});

</script>
 </body>
</html>