<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tarea Dos - B63199</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--Referencia al archivo CSS-->
  <link rel="stylesheet" href="style.css">

</head>
<body>
	<header class="header">
		<!--BARRA DE MENÚ PRINCIPAL-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Adivinamos tu: </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
			<li class="nav-item">
				<button class="nav-item nav-link active"  data-toggle="modal" data-target="#modalEsriloAprendizaje">Estilo por parametros</button>
			</li>
			<li class="nav-item">
				<button class="nav-item nav-link active"  data-toggle="modal" data-target="#modalCalculaRecinto">Recinto</button>
			</li>
			<li class="nav-item">
				<button class="nav-item nav-link active"  data-toggle="modal" data-target="#modalCalculaSexo">Sexo</button>
			</li>
			<li class="nav-item">
				<button class="nav-item nav-link active"  data-toggle="modal" data-target="#modalCalculaEstilo2">Estilo por recinto</button>
			</li>
			<li class="nav-item">
				<button class="nav-item nav-link active"  data-toggle="modal" data-target="#modalTipoProfesor">Tipo de Profesor</button>
			</li>
			<li class="nav-item">
				<button class="nav-item nav-link active"  data-toggle="modal" data-target="#modalClasificacionRed">Clasificación de red</button>
			</li>

			</ul>
		</div>
		</nav>



	</header>

<!--MODAL ESTILO DE APRENDIZAJE-->
<div class="modal fade" id="modalEsriloAprendizaje" role="dialog">
	<div class="modal-dialog modal-lg">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-head">
				<h4 class="modal-title">¡Determina tu estilo de aprendizaje aquí!</h4>
			</div>
		<div class="modal-body">
			
	<!-- CODIGO EXPLICATIVO PARA EL USUARIO Y LLENADO DE LA TABLA -->
		<div>
			<p class="western" align="justify" lang="es-ES"><font color="#000000"><font size="3"><b>Instrucciones:</b></font></font></p>

			<p class="western" align="justify" lang="es-ES"><font color="#000000"><font size="3"> </font></font></p>

			<p class="western" align="justify" lang="es-ES"><font color="#000000"><font size="3"> Para
			utilizar el instrumento usted debe conceder una calificación alta a
			aquellas palabras que mejor caracterizan la forma en que usted
			aprende, y una calificación baja a las palabras que menos
			caracterizan su estilo de aprendizaje.</font></font></p>

			<p class="western" lang="es-ES"> Le puede ser difícil seleccionar
			las palabras que mejor describen su estilo de aprendizaje, ya que no
			hay respuestas correctas o incorrectas.</p>

			<p class="western" align="justify" lang="es-ES"><font color="#000000"><font size="3"> Todas
			las respuestas son buenas, ya que el fin del instrumento es describir
			cómo y no juzgar su habilidad para aprender.</font></font></p>

			<p class="western" align="justify" lang="es-ES"><font color="#000000"><font size="3"> De
			inmediato encontrará nueve series o líneas de cuatro palabras cada una.
			Ordene de mayor a menor cada serie o juego de cuatro palabras que hay en cada línea,
			ubicando 4 en la palabra que mejor caracteriza su estilo de
			aprendizaje, un 3 en la palabra siguiente en cuanto a la
			correspondencia con su estilo; a la siguiente un 2, y un 1 a la
			palabra que menos caracteriza su estilo. Tenga cuidado de ubicar un
			número distinto al lado de cada palabra en la misma línea. </font></font></p>

			Yo aprendo...</big></big>
			<form name="estilo">
			<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
				<tbody>
				<tr>
					<td style="vertical-align: top; width: 25%;">
					<select name="c1">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					</select>
					discerniendo<br>
							</td>
							<td style="vertical-align: top; width: 25%;">
							<select name="c2">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					ensayando<br>
							</td>
							<td style="vertical-align: top;">
							<select name="c3">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					involucrándome</td>
							<td style="vertical-align: top;">
							<select name="c4">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					practicando</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">
							<select name="c5">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					receptivamente </td>
							<td style="vertical-align: top; width: 25%;">
							<select name="c6">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					relacionando </td>
							<td style="vertical-align: top;">
							<select name="c7">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					analíticamente </td>
							<td style="vertical-align: top;">
							<select name="c8">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					imparcialmente </td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">
							<select name="c9">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					sintiendo </td>
							<td style="vertical-align: top; width: 25%;">
							<select name="c10">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					observando </td>
							<td style="vertical-align: top;">
							<select name="c11">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					pensando </td>
							<td style="vertical-align: top;">
							<select name="c12">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					haciendo </td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">
							<select name="c13">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					aceptando </td>
							<td style="vertical-align: top; width: 25%;">
							<select name="c14">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					arriesgando </td>
							<td style="vertical-align: top;">
							<select name="c15">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					evaluando </td>
							<td style="vertical-align: top;">
							<select name="c16">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					con cautela </td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">
							<select name="c17">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					intuitivamente </td>
							<td style="vertical-align: top; width: 25%;">
							<select name="c18">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					productivamente </td>
							<td style="vertical-align: top;">
							<select name="c19">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					lógicamente </td>
							<td style="vertical-align: top;">
							<select name="c20">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					cuestionando </td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">
							<select name="c21">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					abstracto </td>
							<td style="vertical-align: top; width: 25%;">
							<select name="c22">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					observando </td>
							<td style="vertical-align: top;">
							<select name="c23">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					concreto </td>
							<td style="vertical-align: top;">
							<select name="c24">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					activo </td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">
							<select name="c25">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					orientado al presente </td>
							<td style="vertical-align: top; width: 25%;">
							<select name="c26">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					reflexivamente </td>
							<td style="vertical-align: top;">
							<select name="c27">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					orientado hacia el futuro </td>
							<td style="vertical-align: top;">
							<select name="c28">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					pragmático </td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">
							<select name="c29">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					aprendo más de la experiencia </td>
							<td style="vertical-align: top; width: 25%;">
							<select name="c30">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					aprendo más de la observación </td>
							<td style="vertical-align: top;">
							<select name="c31">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					aprendo más de la conceptualización </td>
							<td style="vertical-align: top;">
							<select name="c32">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					aprendo más de la experimentación </td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 25%;">
							<select name="c33">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					emotivo </td>
							<td style="vertical-align: top; width: 25%;">
							<select name="c34">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					reservado </td>
							<td style="vertical-align: top;">
							<select name="c35">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					racional </td>
							<td style="vertical-align: top;">
							<select name="c36">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							</select>
					abierto </td>
						</tr>

						</tbody>
					</table>
				</form>

			</div>
				<form name="final" action="estiloAprendizaje.php" method="post">

					<input name="EC" id="ECid" maxlength="12" size="12" type="hidden">
					<input name="RO" id="ROid" maxlength="12" size="12" type="hidden"> 
					<input name="CA" id="CAid" maxlength="12" size="12" type="hidden">
					<input name="EA" id="EAid" maxlength="12" size="12" type="hidden"><br>

					<input value="Calcular Estilo" type="button" class="btn btn-succes" id="btnEnviar">

				</form>
				<div id="respuesta">


				</div>

			</div>
		<div class="modal-foot">
			<button id="btnCerrarModal" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
</div>

<!--MODAL CALCULA RECINTO-->
<div class="modal fade" id="modalCalculaRecinto" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-head">
				<h4 class="modal-title">¡Calcula tu recinto de origen a partir de unos cuantos datos!</h4>
			</div>
		<div class="modal-body">
			
		<div>
			<div class="container">
				<form role="form">
					
					<!-- Example single danger button -->
					<label for="pwd">Ingrese los siguientes datos</label> 
					<br><br>

						<select class="custom-select mr-sm-2" id="slEstilo">
							<option selected >-Selecciona tu estilo-</option>
							<option value="1">Acomodador</option>
							<option value="2">Asimilador</option>
							<option value="3">Convergente</option>
							<option value="4">Divergente</option>
						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slSexo">
							<option selected >-Selecciona tu sexo-</option>
							<option value="2">Hombre</option>
							<option value="1">Mujer</option>
						</select>
						<br><br>
						<div class="form-row">
							<label >Promedio matricula: </label> 
							<div class="col-2">
								<input id="inPromNum" type="number" min="6" step="1" max="9" class="form-control" placeholder="">
							</div>
							<label > , </label> 
							<div class="col-2">
								<input id="inPromDec" type="number" min="0" step="10" max="99" class="form-control" placeholder="" disabled >
							</div>
							<label style=" font-weight: bold; font-size: 12px" >** utilice valores de entre 6 y 9 </label> 
						</div>
						<br>
						<button id="btnCalcularRecinto" type="button" class="btn btn-light">Calcular Recinto</button>
				</form>
				<div id="respuestaRecinto">
				
				</div>
			</div>
		</div>
		<div class="modal-foot">
			<button id="btnCerrarModalRecinto" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
</div>
</div>


<!--MODAL CALCULA SEXO-->
<div class="modal fade" id="modalCalculaSexo" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-head">
				<h4 class="modal-title">¡Determinamos tu sexo a partir de unos cuantos datos!</h4>
			</div>
		<div class="modal-body">
			
		<div>
			<div class="container">
				<form role="form">
					
					<!-- Example single danger button -->
					<label for="pwd">Ingrese los siguientes datos</label> 
					<br><br>

						<select class="custom-select mr-sm-2" id="slEstilo2">
							<option selected >-Selecciona tu estilo-</option>
							<option value="1">Acomodador</option>
							<option value="2">Asimilador</option>
							<option value="3">Convergente</option>
							<option value="4">Divergente</option>
						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slRecinto">
							<option selected >-Selecciona tu Recinto-</option>
							<option value="1">Paraíso</option>
							<option value="2">Turrialba</option>
						</select>
						<br><br>
						<div class="form-row">
							<label >Promedio matricula: </label> 
							<div class="col-2">
								<input id="inPromNum2" type="number" min="6" step="1" max="9" class="form-control" placeholder="" >
							</div>
							<label > , </label> 
							<div class="col-2">
								<input id="inPromDec2" type="number" min="0" step="10" max="99" class="form-control" placeholder="" disabled>
							</div>
							<label style=" font-weight: bold; font-size: 12px" >** utilice unicamente valores del 6 al 9</label> 
						</div>
						<br>
						<button id="btnCalcularSexo" type="button" class="btn btn-light">Calcular Sexo</button>
				</form>
				<div id="respuestaSexo">
				
				</div>
			</div>
		</div>
		<div class="modal-foot">
			<button id="btnCerrarModalSexo" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
</div>
</div>

<!--MODAL CALCULA Estilo-->
<div class="modal fade" id="modalCalculaEstilo2" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-head">
				<h4 class="modal-title">¡Determinamos tu estilo de aprendizaje a partir de unos cuantos datos!</h4>
			</div>
		<div class="modal-body">
			
		<div>
			<div class="container">
				<form role="form">
					
					<!-- Example single danger button -->
					<label for="pwd">Ingrese los siguientes datos</label> 
					<br><br>

						<select class="custom-select mr-sm-2" id="slRecinto3">
							<option selected >-Selecciona tu Recinto-</option>
							<option value="1">Paraíso</option>
							<option value="2">Turrialba</option>

						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slSexo3">
							<option selected >-Selecciona tu sexo-</option>
							<option value="1">Mujer</option>
							<option value="2">Hombre</option>
						</select>
						<br><br>
						<div class="form-row">
							<label >Promedio matricula: </label> 
							<div class="col-2">
								<input id="inPromNum3" type="number" min="6" step="1" max="9" class="form-control" placeholder="">
							</div>
							<label > , </label> 
							<div class="col-2">
								<input id="inPromDec3" type="number" min="0" step="10" max="99" class="form-control" placeholder="" disabled>
							</div>
							<label style=" font-weight: bold; font-size: 12px" >** utilice unicamente valores del 6 al 9</label> 
						</div>
						<br>
						<button id="btnCalcularEstilo2" type="button" class="btn btn-light">Calcular Estilo</button>
				</form>
				<div id="respuestaEstilo2">
				
				</div>
			</div>
		</div>
		<div class="modal-foot">
			<button id="btnCerrarModalEstilo2" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
</div>
</div>

<!--MODAL CALCULA TIPO DE PROFESOR-->
<div class="modal fade" id="modalTipoProfesor" role="dialog">
	<div class="modal-dialog modal-lg">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-head">
				<h4 class="modal-title">¡Determinamos el tipo de profesor que eres!</h4>
			</div>
		<div class="modal-body">
			
		<div>
			<div class="container">
				<form role="form">
					
					<!-- Example single danger button -->
					<label for="pwd">Ingresa los siguientes datos</label> 
					<br><br>

						<select class="custom-select mr-sm-2" id="slEdad">
							<option selected >-Selecciona tu rango de Edad-</option>
							<option value="1">Edad <= 30</option>
							<option value="2">Edad > 30 <= 55</option>
							<option value="3">Edad < 55</option>

						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slGenero">
							<option selected >-Selecciona tu Género-</option>
							<option value="1">Femenino</option>
							<option value="2">Masculino</option>
							<option value="3">No disponible</option>
						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slImpartiendo">
							<option selected >-Selecciona cómo evalúas tus habilidades impartiendo un curso-</option>
							<option value="1">Principiante</option>
							<option value="2">Intermedio</option>
							<option value="3">Avanzado</option>
						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slTimes">
							<option selected >-Selecciona la cantidad de veces que has impartido el curso-</option>
							<option value="1">Nunca</option>
							<option value="2">De 1 a 5 veces</option>
							<option value="3">Más de 5 veces</option>
						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slExpertise">
							<option selected >-Selecciona tu área de especialidad-</option>
							<option value="1">Marketing</option>
							<option value="2">Diseño de redes</option>
							<option value="3">Otro</option>
						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slSkill">
							<option selected >-Selecciona tu nivel de habilidad en el área de computación-</option>
							<option value="1">Baja</option>
							<option value="2">Media</option>
							<option value="3">Alta</option>
						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slwebBased">
							<option selected >-Selecciona tu nivel de experiencia impartiendo un curso sobre tecnologías basadas en web-</option>
							<option value="1">Ninguna</option>
							<option value="2">Pocas</option>
							<option value="3">Mucha</option>
						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slwebSite">
							<option selected >-Selecciona tu nivel de experiencia impartiendo un curso sobre sitios web-</option>
							<option value="1">Ninguna</option>
							<option value="2">Pocas</option>
							<option value="3">Mucha</option>
						</select>
						<br><br>
						<button id="btnCalcularTipoProfesor" type="button" class="btn btn-light">Calcular Estilo</button>
						<br>
				</form>
				<div id="respuestaTipoProfesor">
				
				</div>
			</div>
		</div>
		<div class="modal-foot">
			<button id="btnCerrarModalTipoProfesor" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
</div>
</div>

<!--MODAL CALCULA CLASIFICACIÓN DE RED-->
<div class="modal fade" id="modalClasificacionRed" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-head">
				<h4 class="modal-title">¡Determinar la clasificación de red!</h4>
			</div>
		<div class="modal-body">
			
		<div>
			<div class="container">
				<form role="form">
					
					<!-- Example single danger button -->
					<label for="pwd">Ingrese los siguientes datos</label> 
					<br><br>

						<select class="custom-select mr-sm-2" id="slReliability">
							<option selected >-Selecciona la Fiabilidad de Red-</option>
							<option value="1">2</option>
							<option value="2">3</option>
							<option value="3">4</option>
							<option value="4">5</option>
						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slLinks">
							<option selected >-Selecciona número de links-</option>
							<option value="1">7</option>
							<option value="2">8</option>
							<option value="3">9</option>
							<option value="4">10</option>
							<option value="5">11</option>
							<option value="6">12</option>
							<option value="7">13</option>
							<option value="8">14</option>
							<option value="9">15</option>
							<option value="10">16</option>
							<option value="11">17</option>
							<option value="12">18</option>
							<option value="13">19</option>
							<option value="14">20</option>
						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slCapacity">
							<option selected >-Selecciona la Capacidad-</option>
							<option value="1">Baja</option>
							<option value="2">Media</option>
							<option value="3">Alta</option>
						</select>
						<br><br>
						<select class="custom-select mr-sm-2" id="slCost">
							<option selected >-Selecciona el Costo-</option>
							<option value="1">Bajo</option>
							<option value="2">Medio</option>
							<option value="3">Alto</option>
						</select>
						<br>
						<br>
						<button id="btnClasificacionRed" type="button" class="btn btn-light">Calcular Clasificación</button>
				</form>
				<div id="respuestaClasificacion">
				
				</div>
			</div>
		</div>
		<div class="modal-foot">
			<button id="btnCerrarModalClasificacion" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
</div>
</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


<!--SCRIPTS JAVASCRIPT PARA HACER LAS LLAMADAS-->
<script type="text/javascript">

	//Botón de enviar a determinar el estilo de aprendizaje
        $('#btnEnviar').click(function(){

            ec = parseInt(document.estilo.c5.value)+parseInt(document.estilo.c9.value)+parseInt(document.estilo.c13.value)+parseInt(document.estilo.c17.value)+parseInt(document.estilo.c25.value)+parseInt(document.estilo.c29.value);
            or = parseInt(document.estilo.c2.value)+parseInt(document.estilo.c10.value)+parseInt(document.estilo.c22.value)+parseInt(document.estilo.c26.value)+parseInt(document.estilo.c30.value)+parseInt(document.estilo.c34.value);
            ca = parseInt(document.estilo.c7.value)+parseInt(document.estilo.c11.value)+parseInt(document.estilo.c15.value)+parseInt(document.estilo.c19.value)+parseInt(document.estilo.c31.value)+parseInt(document.estilo.c35.value);
            ea = parseInt(document.estilo.c4.value)+parseInt(document.estilo.c12.value)+parseInt(document.estilo.c24.value)+parseInt(document.estilo.c28.value)+parseInt(document.estilo.c32.value)+parseInt(document.estilo.c36.value);

            document.final.EC.value = ec;
            document.final.RO.value = or;
            document.final.CA.value = ca;
            document.final.EA.value = ea;

            //var ec = $('#ECid').value();
            var ec = document.getElementById("ECid").value;
            var ro = document.getElementById("ROid").value;
            var ca = document.getElementById("CAid").value;
            var ea = document.getElementById("EAid").value;

            var ruta = "ec="+ec+"&or="+ro+"&ca="+ca+"&ea="+ea;

            $.ajax({
                url:"calculoByes.php",
                type: 'POST',
                data: ruta
            })
            .done(function(res){
                $('#respuesta').html(res)
            });

        })
	
	//Botón de enviar a determinar el recinto de procedencia
	$('#btnCalcularRecinto').click(function(){


		//var ec = $('#ECid').value();
		var estilo = document.getElementById("slEstilo").selectedIndex;
		var sexo = document.getElementById("slSexo").selectedIndex;

		var promNum = document.getElementById("inPromNum").value;
		var promDec = document.getElementById("inPromDec").value;

		var ruta = "estilo="+estilo+"&sexo="+sexo+"&promNum="+promNum+"&promDec="+promDec;

		$.ajax({
			url:"calculoByes.php",
			//para cargar la tabla de frecuencias
		//	url:"determinaRecinto.php",
			type: 'POST',
			data: ruta
		})
		.done(function(res){
			$('#respuestaRecinto').html(res)
		});

	})

	//Botón de enviar a determinar el sexo
	$('#btnCalcularSexo').click(function(){
		//var ec = $('#ECid').value();
		var estilo = document.getElementById("slEstilo2").selectedIndex;
		var recinto = document.getElementById("slRecinto").selectedIndex;

		var promNum = document.getElementById("inPromNum2").value;
		var promDec = document.getElementById("inPromDec2").value;

		var ruta = "estilo="+estilo+"&recinto="+recinto+"&promNum="+promNum+"&promDec="+promDec;

		$.ajax({
			url:"calculoByes.php",
			//para cargar la tabla de frecuencias
			//url:"determinaSexo.php",
			type: 'POST',
			data: ruta
		})
		.done(function(res){
			$('#respuestaSexo').html(res)
		});

	})

	//Botón de enviar a determinar el estilo de aprendizaje
	$('#btnCalcularEstilo2').click(function(){
		//var ec = $('#ECid').value();
		var sexxo = document.getElementById("slSexo3").selectedIndex;
		var recinto = document.getElementById("slRecinto3").selectedIndex;

		var promNum = document.getElementById("inPromNum3").value;
		var promDec = document.getElementById("inPromDec3").value;

		var ruta = "recinto="+recinto+"&sexxo="+sexxo+"&promNum="+promNum+"&promDec="+promDec;

		$.ajax({
			url:"calculoByes.php",
			//calcula la tabla de frecuencias
			//url:"determinaEstiloDos.php",
			type: 'POST',
			data: ruta
		})
		.done(function(res){
			$('#respuestaEstilo2').html(res)
		});
	})

	//Botón de enviar a determinar el tipo de profesor
	$('#btnCalcularTipoProfesor').click(function(){
		//var ec = $('#ECid').value();

		var edad = document.getElementById("slEdad").selectedIndex;
		var genero = document.getElementById("slGenero").selectedIndex;
		var impartiendo = document.getElementById("slImpartiendo").selectedIndex;
		var times = document.getElementById("slTimes").selectedIndex;
		var expertise = document.getElementById("slExpertise").selectedIndex;
		var skill = document.getElementById("slSkill").selectedIndex;
		var webBased = document.getElementById("slwebBased").selectedIndex;
		var webSite = document.getElementById("slwebSite").selectedIndex;


		var ruta = "edad="+edad+"&genero="+genero+"&impartiendo="+impartiendo+"&times="+times+"&expertise="+expertise+"&skill="+skill+"&webBased="+webBased+"&webSite="+webSite;

		$.ajax({
			url:"calculoByes.php",
			//calcula la tabla de frecuencias
			//url:"determinaProfesor.php",
			type: 'POST',
			data: ruta
		})
		.done(function(res){
			$('#respuestaTipoProfesor').html(res)
		});
	})
	//Botón de enviar a determinar el tipo de profesor
	$('#btnClasificacionRed').click(function(){
		//var ec = $('#ECid').value();

		var reliability = document.getElementById("slReliability").selectedIndex;
		var links = document.getElementById("slLinks").selectedIndex;
		var capacity = document.getElementById("slCapacity").selectedIndex;
		var cost = document.getElementById("slCost").selectedIndex;

		var ruta = "reliability="+reliability+"&links="+links+"&capacity="+capacity+"&cost="+cost;

		$.ajax({
			url:"calculoEuclides.php",
			type: 'POST',
			data: ruta
		})
		.done(function(res){
			$('#respuestaClasificacion').html(res)
		});
	})

	//botón para cerrar los modales y limpiar los campos.
		$('#btnCerrarModal').click(function(){ //modalCalcularEstiloAprendizaje
			location.reload();
		})
		
		$('#btnCerrarModalRecinto').click(function(){
			location.reload();
		})

		$('#btnCerrarModalSexo').click(function(){
			location.reload();
		})

		$('#btnCerrarModalEstilo2').click(function(){
			location.reload();
		})

		$('#btnCerrarModalTipoProfesor').click(function(){
			location.reload();
		})

		$('#btnCerrarModalClasificacion').click(function(){
			location.reload();
		})

    </script>  
</html>
