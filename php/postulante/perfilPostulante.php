<?php
require_once("../../class/sesion.class.php"); 
$objetoSesion = new sesion();
$objetoSesion->chequearSesion();
$nivel = $objetoSesion->getNivelAcceso();

require_once("../../class/postulante.class.php");
$registros = new postulante();

?>
<!DOCTYPE html>
<html>
<head>
	<title>CertificaDev</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
	<div id="cuerpo">
	<?php
		include("header.php");
	?>
        
	<div id="contenido" class="wrapper">
        <div class="wrapper">
            <p class="title">Cuenta de usuario</p>
        </div>
        <div id="panelSolicitudes">
            <p align="center">
                <table align="center" border="1" width="100%" class="wrapper">
                    <tr>
                       <th>RUT</th>				   
                       <th>Apellido paterno</th>
                       <th>Apellido materno</th>
                       <th>Nombre</th>				   
                       <th>Modalidad</th>
                       <th>Curso</th>
                    </tr>
                    <?php
                        $result = $registros->selectPostulante();
                        if($result->num_rows > 0){
                           while($fila = $result->fetch_assoc()){
                               echo "<tr>";
                               echo "   <td align='center'>".$fila["rut_post"]."</td>";						  
                               echo "   <td>".$fila["nombre_post"]."</td>";
                               echo "   <td>".$fila["apepaterno_post"]."</td>";
                               echo "   <td>".$fila["apematerno_post"]."</td>";
                               echo "   <td>".$fila["modalidad_post"]."</td>";
                               echo "   <td>".$fila["curso_post"]."</td>";	
                               echo "<tr>";
                           }
                        }else{
                           echo "<tr>";
                           echo "   <td colspan='15' align='center'>No se encontraron registros</td>";
                           echo "<tr>";
                        }
                    ?>
                </table>
            </p>
        </div>
        <div id="panelAdministradror" class="wrapper">
            <ul>
                <?php if ($nivel == 'null'){?>
                
                <li>
                    <p><h4>Menu de administrador</h4></p>
                </li>
        
                <?php } ?>
            </ul>
        </div>
	</div>
        
	<?php
		include("../portada/footer.php");
	?>	
	</div>
</body>
</html>	
