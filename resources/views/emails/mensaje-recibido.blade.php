<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Mensaje recibido </title>
  {{-- el usuario envia al servidor o servicio de correo: en este caso al log file --}}
  {{--  Mensaje recibido es la plantilla que recibe el destinatario, ya que no se está enviando --}}
  {{-- datos crudos como mensaje de correo sino una vista completa al servidor --}}
</head>
<body>
  <table>
    <tr><td colspan="2"> Recibiste un correo del sistema automatizado</td></tr>
    <tr>
      <td> <b>Nombre:</b>  </td> <td> {{ $mensaje['nombre'] }} </td>
    </tr>
    <tr>
      <td> <b>Correo: </b> </td> <td> {{ $mensaje['email'] }}</td>
    </tr>
    <tr>
      <td> <b>Asunto: </b> </td>  <td> {{ $mensaje['asunto'] }} </td>
    </tr>
    <tr>
      <td> <b>Descripcion: </b> </td> <td> {{ $mensaje['mensaje'] }}</td>
    </tr>
  </table>
</body>
</html>