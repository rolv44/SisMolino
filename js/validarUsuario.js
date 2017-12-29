$(document).ready(function(){
  
  $("#formLogin").submit(function(e){
    e.preventDefault();
    var nombre=document.getElementById('inEmail').value;
    var pass=document.getElementById('inPass').value;
    var parametros={
        "nombre":nombre,
        "password":pass
    }
    $.ajax({
        type:'POST',
        url:'ajax/traeUsuario.php',
        data:parametros,
        dataType:'json',
        success: function(data){
            var valor=eval(data);
            var v=new Array();
            var cont=0;
            console.log(valor);
               if(valor[0].res=="ok"){
               if(valor[0].tipo="0"){
                 location.href="Pagina1.php";
               }
             }else if (valor[0].res=="fail") {
               if(valor[0].id=="usu"){
                 swal({
           				title: 'Contraseña Incorrecto!',
           				text: valor[0].nombre+', la contraseña ingresada es incorrecta!',
           				type: 'warning',
           				showCancelButton: true,
           				confirmButtonColor: '#3085d6',
           				cancelButtonColor: '#d33',
           				confirmButtonText: 'Cerrar Sesion'
           			});
              }else if (valor[0].id=="pass") {
                swal({
                 title: 'Usuario Incorrecto!',
                 text: 'El usuario ingresado es incorrecto!',
                 type: 'warning',
                 showCancelButton: true,
                 confirmButtonColor: '#3085d6',
                 cancelButtonColor: '#d33',
                 confirmButtonText: 'Cerrar Sesion'
               });
              }
             }
        },
         error: function (xhr, ajaxOptions, thrownError) {
               alert("Error al conseguir datos: "+ajaxOptions+" "+thrownError);
           }
    });
    
  });
  $('#cerrar_sesion').click(function() {
			
		});
  
});


function validar(){
    
}