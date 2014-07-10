<html>
<head>
<meta charset="utf-8">
<title>Validando E-Mail</title>
<script type="text/javascript">
function validarEmail(valor) {
  if (/(\w+)(\.?)(\w*)(\@{1})(\w+)(\.?)(\w*)(\.{1})(\w{2,3})/.test(valor)){
    return true;
  } else {
    return false;
  }
}
</script>
<body>

<form name="frmregistro" id="frmregistro" method="post">
    <label>Nombre:</label> <input type="text" name="nombre" id="nombre" />
    <label>Apellido:</label> <input type="text" name="apellido" id="apellido" />
    <label>Correo:</label> <input type="text" name="correo" id="correo" />
    <input type="button" value="Registrar" onclick="validarregistro()" />
</form>

<script type="text/javascript">
    function validarregistro(){
        if(document.getElementById("nombre").value=="")
            alert("Ingrese Nombre");
        else if(document.getElementById("apellido").value=="")
            alert("Ingrese Apellido");
        else if(!validarEmail(document.getElementById("correo").value))
            alert("Ingrese un correo valido");
        else
            document.frmregistro.submit();
    }
</script>


</body>
</html>
 