$(document).ready(function(){
$("#submit").click(function(){
var nombre = $("#nombre").val();
var apellido = $("#apellido").val();
var nc = $("#nc").val();
 
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'nombre='+ nombre + '&apellido='+ apellido + '&nc='+ nc;
if(nombre==''||apellido==''||nc=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
data: dataString,
cache: false,
success: function(result){
location.reload();
}
});
}
return false;
});
});