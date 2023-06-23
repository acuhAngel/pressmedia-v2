<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 1;

switch ($page) {
  case 1:
    $view = "principal.php";
    $title = "Inicio";
    break;
  case 2:
    $view = "qs.php";
    $title = "¿Quienes Somos?";
    break;
  case 3:
    $view = "servicios.php";
    $title = "Servicios";
    break;

  case 4:
    $view = "infraestructura.php";
    $title = "Infraestructura";
    break;
  case 5:
    $view = "contacto.php";
    $title = "Contacto";
    break;

  default:
    $view = "principal.php";
    $title = "Inicio";
}
?>