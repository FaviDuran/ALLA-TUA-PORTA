$(document).ready(function () {

  $("#loginForm").bind("submit",function(){

    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success:function(response ){

      if(response.estado == "true"){

        $("body").overhang({
          type: "success",
          message: "Usuario encontrado te estamos redirigiendo.. !",
          callback:function(){
            window.location.href = "admin.php";
          }
        });
      }  else{
        $("body").overhang({
          type: "error",
          message: "Usuario o password incorrecto"
      });

      }

      },
      error:function(){
        $("body").overhang({
          type: "error",
          message: "Usuario o password incorrecto"
      });

      }

    });
    return false;

  });
});
