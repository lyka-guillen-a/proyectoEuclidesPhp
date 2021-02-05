<?php

$determinarEstilo = 0;
$determinarRecinto = 0;
$determinarSexo = 0;
$determinarEstilo2 = 0;

$determinarTipoProfesor = 0;
$determinarCapacidadRed = 0;

if(!empty($_POST)){

    /** CONEXIÓN CON LA BD ...*/
    $conexion=(mysqli_connect("remotemysql.com","sLmri09wJm","NKxZsWY6Yp"));
    mysqli_select_db($conexion,'sLmri09wJm') or die ("no se encuentra la bd");

    //CALCULA EL ESTILO DE APRENDIZAJE
    if(!empty($_POST['ec']) && !empty($_POST['or']) && !empty($_POST['ca']) && !empty($_POST['ea'])){
        $determinarEstilo = 1;

        /** LLENA LAS VARIABLES DESDE EL FORMULARIO */
        $ec_php = $_POST['ec'];
        $or_php = $_POST['or'];
        $ca_php = $_POST['ca'];
        $ea_php = $_POST['ea'];

        $estudianteAEvaluar[0] = $ec_php;
        $estudianteAEvaluar[1] = $or_php;
        $estudianteAEvaluar[2] = $ca_php;
        $estudianteAEvaluar[3] = $ea_php;

        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $sql="SELECT CA, EC, EA, ORR, estilo FROM recintoestilo order by CA";
        $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());
        $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC);

    //CALCULA EL RECINTO DE PROCEDENCIA
    }else if(!empty($_POST['estilo']) && !empty($_POST['sexo']) && !empty($_POST['promNum']) && !empty($_POST['promDec'])){
        $determinarRecinto = 1;

        /** LLENA LAS VARIABLES DESDE EL FORMULARIO */
        $estilo_php = $_POST['estilo'];
        $sexo_php = $_POST['sexo'];
        $promNum_php = $_POST['promNum'];
        $promDec_php = $_POST['promDec'];

        $prom_php =  $promNum_php + ($promDec_php/100);

        $estudianteAEvaluar[0] = $estilo_php;
        $estudianteAEvaluar[1] = $sexo_php;
        $estudianteAEvaluar[2] = $prom_php;

        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $sql="SELECT `estiloId`, `sexoId`, `promedio`, `recinto` estilo FROM estilosexpromrec order by `promedio`";
        $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());
        $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
      
    //CALCULA EL SEXO DEL ESTUDIANTE
    }else if(!empty($_POST['estilo']) && !empty($_POST['recinto']) && !empty($_POST['promNum']) && !empty($_POST['promDec'])){
        $determinarSexo = 1;

        /** LLENA LAS VARIABLES DESDE EL FORMULARIO */
        $estilo_php = $_POST['estilo'];
        $recinto_php = $_POST['recinto'];
        $promNum_php = $_POST['promNum'];
        $promDec_php = $_POST['promDec'];

        $prom_php =  $promNum_php + ($promDec_php/100);

        $estudianteAEvaluar[0] = $estilo_php;
        $estudianteAEvaluar[1] = $recinto_php;
        $estudianteAEvaluar[2] = $prom_php;

         /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
         $sql="SELECT `estiloId`, `recintoId`, `promedio`, `sexo` FROM estilosexpromrec order by `promedio`";
         $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());
         $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
    
    //CALCULA EL ESTILO DEL ESTUDIANTE
    }else if(!empty($_POST['sexxo']) && !empty($_POST['recinto']) && !empty($_POST['promNum']) && !empty($_POST['promDec'])){
        $determinarEstilo2=1;

        /** LLENA LAS VARIABLES DESDE EL FORMULARIO */
        $sexo_php = $_POST['sexxo'];
        $recinto_php = $_POST['recinto'];
        $promNum_php = $_POST['promNum'];
        $promDec_php = $_POST['promDec'];

        $prom_php =  $promNum_php + ($promDec_php/100);

        $estudianteAEvaluar[0] = $sexo_php;
        $estudianteAEvaluar[1] = $recinto_php;
        $estudianteAEvaluar[2] = $prom_php;

        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $sql="SELECT `sexoId`, `recintoId`, `promedio`, `estilo` FROM estilosexpromrec order by `promedio`";
        $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());
        $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC);

    //CALCULA EL TIPO DE PROFESOR
    }else if(!empty($_POST['edad']) && !empty($_POST['genero']) && !empty($_POST['impartiendo']) && !empty($_POST['times'])&& !empty($_POST['expertise'])&& !empty($_POST['skill'])&& !empty($_POST['webBased'])&& !empty($_POST['webSite'])){
        $determinarTipoProfesor = 1;

         /** LLENA LAS VARIABLES DESDE EL FORMULARIO */
         $edad_php = $_POST['edad'];
         $genero_php = $_POST['genero'];
         $impartiendo_php = $_POST['impartiendo'];
         $times_php = $_POST['times'];
         $expertise_php = $_POST['expertise'];
         $skill_php = $_POST['skill'];
         $webBased_php = $_POST['webBased'];
         $webSite_php = $_POST['webSite'];

        $estudianteAEvaluar[0] = $edad_php;
        $estudianteAEvaluar[1] = $genero_php;
        $estudianteAEvaluar[2] = $impartiendo_php;
        $estudianteAEvaluar[3] = $times_php;
        $estudianteAEvaluar[4] = $expertise_php;
        $estudianteAEvaluar[5] = $skill_php;
        $estudianteAEvaluar[6] = $webBased_php;
        $estudianteAEvaluar[7] = $webSite_php;

        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $sql="SELECT `age`,`genderId`,`evaluationId`,`times`,`expertiseId`,`skillId`,`webBasedId`,`webSiteId`, `class` FROM `profesores` order by `classId`";
        $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());
        $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
    
    
    }
    //CALCULA LA CLASIFICACIÓN DE RED
    else if(!empty($_POST['reliability']) && !empty($_POST['links']) && !empty($_POST['capacity']) && !empty($_POST['cost'])){
        $determinarCapacidadRed =1; 

         /** LLENA LAS VARIABLES DESDE EL FORMULARIO */
         $reliability_php = $_POST['reliability'];
         $links_php = $_POST['links'];
         $capacity_php = $_POST['capacity'];
         $cost_php = $_POST['cost'];

        $estudianteAEvaluar[0] = $reliability_php;
        $estudianteAEvaluar[1] = $links_php;
        $estudianteAEvaluar[2] = $capacity_php;
        $estudianteAEvaluar[3] = $cost_php;

          /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
          $sql="SELECT `reliability`, `numLines`, `capacityId`, `costoId`, `capacity` FROM `redes` order by `classId`";
          $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());
          $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
    }

    //Calcula la cantidad de elementos que va a comparar
    $cantidad = count($estudianteAEvaluar);

    /** RECORRE LOS ELEMENTOS DE LA CONSULTA Y LOS ENVÍA A EVALUAR AL ALGORITMO DE EUCLIDES, RETORNA LAS DISTANCIAS Y ESTILOS */
    $distanciasEuclides = [];  $distancias = [];  $dist = [];  $result = []; 
    while ($fila = mysqli_fetch_array($consulta)){
        //llama al algoritmo de euclides
       $distanciasEuclides[] = calcularDistanciaEuclides($fila, $cantidad, $estudianteAEvaluar);
    }

    /** SEPARA DEL ARREGLO ANTERIOR, UNO PARA LAS DISTANCIAS Y OTRO PARA LOS resultados */
    $cant = count($distanciasEuclides);
    for ($i=0; $i < $cant; $i++) { 
        $distancias = $distanciasEuclides[$i];

        for ($j=0; $j < count($distancias); $j++) { 
            if($j==0){
                $dist []=$distancias[$j];
            }else{
                $result[] = $distancias[$j];
            }
        }
    }

    /** DETERMINA LA DISTANCIA MÁS CORTA Y SU ESTILO ASOCIADO */
    $min=min($dist);
    $posMin=0;
    //determina la posición de la distancia mínima, para ubicar el nombre del dato a buscar
    for($i=0;$i<count($dist);$i++){
        if($dist[$i]==$min)
            $posMin=$i;
    }

    //Manda a imprimir el resultado final.

    //RESULTADO ESTILO DE APRENDIZAJE
    if( $determinarEstilo == 1){
        print_r("Tu estilo de aprendizaje, según el algoritmo de euclides es: ".$result[$posMin]);
        $determinarEstilo = 0;
    //RESULTADO RECINTO
    }else if($determinarRecinto==1){
        print_r("Tu recinto, según el algoritmo de euclides es: ".$result[$posMin]);
        $determinarRecinto = 0;
    }else if($determinarSexo==1){
        print_r("Tu sexo, según el algoritmo de euclides es: ".$result[$posMin]);
        $determinarSexo = 0;
    }else if($determinarEstilo2==1){
        print_r("Tu estilo de aprendizaje, según el algoritmo de euclides es: ".$result[$posMin]);
        $determinarEstilo2 = 0;
    }else if($determinarTipoProfesor==1){
        print_r("Tu tipo de profesor, según el algoritmo de euclides es: ".$result[$posMin]);
        $determinarTipoProfesor = 0;
    }else if($determinarCapacidadRed==1){
        print_r("La clasificacion de red debe ser: ".$result[$posMin]);
        $determinarCapacidadRed = 0;
    }

}else{
	mysqli_close($conexion);
	echo "Datos invalidos";
}

// EXPLICACIÓN DEL ALGORITMO DE EUCLIDES REALIZADO
//1. Recibe la fila a comparar (la fila que trar de la base de datos), la cantidad de registros a comparar (cantidad de variables que ingresó el usuario), 
//   y el estudiante que se toma como base de comparación (los datos que ingresó el usuario)
//2. Determina si la fila posee datos.
//3. Evalúa las coloumnas, menos una. (porque la última posee el estilo, solo se incluye para posterirmente dar el resultado)
//4. Utiliza la fórmula de euclides para determinar la distancia, resta cada valor traído de la consulta, contra el valor del estudiante a evaluar y eleva el resultado al cuadrado. 
//   Luego suma los resultado, y a la suma total le saca raíz. 
//5. Guarda en un arreglo la distancia obtenida, seguida del estilo al que corresponde. 
//6. Retorna el arreglo del punto 5. 
function calcularDistanciaEuclides ($fila, $cantidad, $estudianteAEvaluar) {

    if ($fila !=NULL) {

        $res=0;

        for ($i=0; $i < $cantidad-1; $i++) { 
            if($i<$cantidad){
                //agrega en el arreglo del resultados la distancia obtenida
                $res += pow($fila[$i]-$estudianteAEvaluar[$i] ,2);
            }
        }
        $euc = sqrt($res);

        //crea un arreglo con el resultado de la distancia obtenida y el estilo en la columna evaluada
        $distancias [] = $res;
        $distancias []= $fila[$cantidad];
        return $distancias;
    }
}
?>