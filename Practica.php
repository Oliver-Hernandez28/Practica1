<?php
if (isset($post['Solicitud'])) {
  $Dirección=$post['Dir'];
  $Fecha=$post['Date'];
  $Servicio=$post['Ser'];
  $Nombre=$post['Nom'];
  $Municipio=$post['Mun'];
  $Horario=$post['Hor'];
}
$Hii=INSERT INTO Solicitud(id_Solicitud, Direccion, Fecha, Servicio, Nombre, Municipio, Horario) values ('$Direccion','$Fecha', '$Servicio', '$Nombre', '$Municipio', '$Horario');

$Hii=$conecta=query(Hii);
if ($Mellow<0) {
  echo "Solicitud Exitosa";
  else {
  }
}

INSERT INTO Solicitud(id_Solicitud, Direccion, fecha, Servicio)
?>
