<!DOCTYPE html>
<html>
<head>
    <title>Tiene un mensaje nuevo</title>
</head>
<body>
   
<center>
<h2 style="padding: 23px;background: #003964;border-bottom: 6px #04ADCE solid; color: white;">
    <a href="" style="color:white;">Organización Internacional de Coaching</a>
</h2>
</center>
  
<p>Hola.</p>
<p>Se ha registrado un nuevo usuario al foro</p>
<p>
	<strong>De: </strong>{{$mensaje['name']}}<br>
	<strong>Correo: </strong>{{$mensaje['email']}}<br>  
	  
	<strong>Narrativa: </strong><br>
	 {{$mensaje['bio']}}
</p>
  
<strong>Gracias por su atención ;)</strong>
  
</body>
</html>