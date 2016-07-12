<?php
require_once("../../class/postulante.class.php");
$objPostulante = new postulante();
$resulPostulante = $objPostulante->selectPostulante();

require_once("../../class/sesion.class.php"); 
$objetoSesion = new sesion();
$objetoSesion->chequearSesion();
$nivel = $objetoSesion->getNivelAcceso();

require_once("../../class/comuna.class.php");
$objComuna = new comuna();
$resultComuna = $objComuna->selectComuna();

?>
<!DOCTYPE html>
<html>
<head>
	<title>CertificaDev</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script type="text/javascript" src="../../js/script.js"></script>
</head>
<body>
	<div id="cuerpo">
	<?php
		include("header.php");
	?>
        
	<div id="contenido" class="wrapper">
        <div class="wrapper">
        	<form id="formPostulante" name="formPostulante" method="post" action="procesarPostulante.php">
    			<ul>
    				<li>
    					<p class="title">Ingreso de Solicitud</p>
    				</li>
    				<li>
    					<label>RUT</label>
    					<input type="text" name="rut_post" id="rut_post" pattern="\d{7,8}-[\d|kK]{1}" placeholder="11111111-1" onblur="validadorRut(this)" required/>
    				</li>
    				<li>
    					<label>Nombres</label>
    					<input type="text" name="nombre_post" id="nombre_post" onblur="ponerMayusculas(this)" required=""/>
    				</li>
    				<li>
    					<label>Apellido paterno</label>
    					<input type="text" name="apepaterno_post" id="apepaterno_post" onblur="ponerMayusculas(this)"  required=""/>
    				</li>
    				<li>
    					<label>Apellido Materno</label>
    					<input type="text" name="apematerno_post" id="apematerno_post" onblur="ponerMayusculas(this)" required=""/>
    				</li>
    				<li>
    					<label>Fecha de Nac.</label>
    					<input type="text" name="fechanac_post" id="fechanac_post" onblur="validaFecha(this)" placeholder="dd/mm/aaaa" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" required=""/>
    				</li>
                    <li>
                        <label>Sexo</label>
                        <input name="sexo_post" id="sexo_post" type="radio" value="H" required/>Hombre
                        <input name="sexo_post" id="sexo_post" type="radio"  value="M" required/>Mujer
                    </li>
                    <li>
                        <label>Telefono</label>
                        <input type="number" name="telefono_post" id="telefono_post" placeholder="Eje: 912345678" maxlength="9" required//>
                    </li>
                    <li>
                        <label>Email</label>
                        <input type="email" name="email_post" id="email_post" placeholder="ejempli@email.com" maxlength="100" onblur="ponerMinuscula(this)" required/>
                    </li>
                    <li>
                        <label>Dirección</label>
                        <input  type="text" name="direccion_post" id="direccion_post" placeholder="Su domicilio" onblur="ponerMayusculas(this)" maxlength="100" required/>
                    </li>
                    <li>
                        <label>Comuna</label>
                        <select name="comuna" id="comuna" required>
								<option>Seccionar Comuna</option>
								<?php
									while($filaComuna = $resultComuna->fetch_assoc()){
										echo '<option value="'.$filaComuna['comuna'].'">'.$filaComuna['comuna'].'</option>';							
									}
								?>
				        </select>	    
                    </li>
                    <li>
                        <label>Nivel de educación</label>
                        <select name="educacion_post" id="educacion_post" required>    
                            <option>Nivel de estudios</option><option>Profecional</option><option>Técnico</option><option>Media</option><option>Básico</option><option>No posee</option>
                        </select>
                    </li>
                    <li>
                        <label>Experiencia</label>
                        <input type="checkbox" name="experiencia_post" id="experiencia_post" value="si">
                    </li>
                    <li>
                        <label>Modalidad</label>
                        <select name="modalidad_post" id="modalidad_post" required>
                            <option>Modalidad</option><option>Diurna</option><option>Vespertina</option>
                        </select>
                    </li>
                    <li>
                        <label>curso</label>
                        <select name="curso_post" id="curso_post" required>
                            <option>Curso</option>
                            <option>Java</option>
                            <option>Net</option>
                            <option>PHP</option>
                        </select>
                    </li>
                    <li>
                        <input type="submit" value="Guarda" required/>
                        <input type="reset" value="Limpiar" required/>
                    </li>
    			</ul>
        	</form>
        </div>
	</div>
        
	<?php
		include("../portada/footer.php");
	?>	
	</div>
</body>
</html>	