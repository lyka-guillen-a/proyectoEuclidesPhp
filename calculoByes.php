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

        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $query = mysqli_query($conexion, "SELECT class, atrib, val, freq FROM tablaFrecuencias where val=$ec_php or val=$or_php or val=$ca_php or val=$ea_php");
        $filas = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $ctValores=count($filas);  
        $producto=1;
        
        $producto1=0;
        $producto2=0;
        $producto3=0;
        $producto4=0;

        $pca=0;
        $pec=0;
        $pea=0;
        $por=0;

        $resultAcomodador='';
        $resultAsimilador='';
        $resultConvergente='';
        $resultDivergente='';

        //calcula la probabilidad total para cada atributo de la clase
        foreach ($filas as $key => $value) {
            
            foreach ($value as $k => $v) {
                if($v=='aiCA' && $value['val']== $ca_php){
                    $pca=(float)$value['freq'];
                }else if($v=='aiEC' && $value['val']== $ec_php){
                    $pec=(float)$value['freq'];
                }else if($v=='aiEA' && $value['val']== $ea_php){
                    $pea=(float)$value['freq'];
                }else if($v=='aiORR' && $value['val']== $or_php){
                    $por=(float)$value['freq'];
                }
            }

            $product=$pca*$pec;
            $produc=$pea*$por;
            $producto=(float)$product*(float)$produc;

            if($value['class']=='aiAcom'){
                $producto1=$producto;
                $resultAcomodador=' Acomodador CA: '.$pca.' EC: '.$pec.' EA: '.$pea.' OR: '.$por.' PT(): '.$producto;
            }else if($value['class']=='aiAsim'){
                $producto2=$producto;
                $resultAsimilador=' Asimilador CA: '.$pca.' EC: '.$pec.' EA: '.$pea.' OR: '.$por.' PT(): '.$producto;
            }else if($value['class']=='aiConv'){
                $producto3=$producto;
                $resultConvergente=' Convergente CA: '.$pca.' EC: '.$pec.' EA: '.$pea.' OR: '.$por.' PT(): '.$producto;
            }else if($value['class']=='aiDiv'){
                $producto4=$producto;
                $resultDivergente=' Divergente CA: '.$pca.' EC: '.$pec.' EA: '.$pea.' OR: '.$por.' PT(): '.$producto;
            }
        }
        $estiloPredicho=[];

        $estiloPredicho = array(
            "Acomodador" => $producto1,
            "Asimilador" => $producto2,
            "Convergente" => $producto3,
            "Divergente" => $producto4
        );

        $max=max($estiloPredicho);
        
        print_r($resultAcomodador.'</br>'.$resultAsimilador.'</br>'.$resultConvergente.'</br>'.$resultDivergente);

        $result='';
        foreach ($estiloPredicho as $posicion => $valor) {
            if($valor==$max){
                $result=$posicion;
            }
        }
      
        echo '</br></br>Tu estilo debe ser: '.$result;
        //DETERMINA RECINTO
    }else if(!empty($_POST['estilo']) && !empty($_POST['sexo']) && !empty($_POST['promNum'])){
        $determinarRecinto = 1;

        /** LLENA LAS VARIABLES DESDE EL FORMULARIO */
        $estilo_php = $_POST['estilo'];
        $sexo_php = $_POST['sexo'];
        $promNum_php = $_POST['promNum'];
        $promDec_php = $_POST['promDec'];

        $prom_php =  $promNum_php;// + ($promDec_php/100);

        //realiza la "traducción" de los datos
        $prom=0;
        if($prom_php==6){
            $prom=1;
        }else if($prom_php==7){
            $prom=2;
        }else if($prom_php==8){
            $prom=3;
        }else if($prom_php==9){
            $prom=4;
        }

        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $query = mysqli_query($conexion, "SELECT class, atrib, cal, freq FROM tablaFrecuenciasRecinto where cal=$estilo_php or cal=$sexo_php or cal=$prom");
        $filias = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $ctValores=count($filias);  
        $producto=1;
        
        $producto1=0;
        $producto2=0;

        $pEstilo=0;
        $pProm=0;
        $pSex=0;

        $resultParaiso='';
        $resultTurrialba='';

        //calcula la probabilidad total de cada clase
        foreach ($filias as $key => $value) {
            
            foreach ($value as $k => $v) {
                if($v=='aiEstilo' && $value['cal']== $estilo_php){
                    $pEstilo=(float)$value['freq'];
                }else if($v=='aiProm' && $value['cal']== $sexo_php){
                    $pProm=(float)$value['freq'];
                }else if($v=='aiSex' && $value['cal']== $prom){
                    $pSex=(float)$value['freq'];
                } 
            }
        
            $product=$pEstilo*$pProm;
            $produc=$pSex;
            $producto=(float)$product*(float)$produc;

            if($value['class']=='aiPara'){
                $producto1=$producto;
                $resultParaiso=' Paraíso estilo: '.$pEstilo.' promedio: '.$pProm.' Sexo: '.$pSex.' PT(): '.$producto;
            }else if($value['class']=='aiTurri'){
                $producto2=$producto;
                $resultTurrialba=' Turrialba estilo: '.$pEstilo.' promedio: '.$pProm.' Sexo: '.$pSex.' PT(): '.$producto;
            }
        }
        $recintoPredicho=[];

        
        $recintoPredicho = array(
            "Paraiso" => $producto1,
            "Turrialba" => $producto2
        );

        $max=max($recintoPredicho);
        
        print_r($resultParaiso.'</br>'.$resultTurrialba);

        $result='';
        foreach ($recintoPredicho as $posicion => $valor) {
            if($valor==$max){
                $result=$posicion;
            }
        }
      
        echo '</br></br>Tu recinto debe ser: '.$result;

        //determina sexo
    }else if(!empty($_POST['estilo']) && !empty($_POST['recinto']) && !empty($_POST['promNum']) ){
        $determinarSexo = 1;

        /** LLENA LAS VARIABLES DESDE EL FORMULARIO */
        $estilo_php = $_POST['estilo'];
        $recinto_php = $_POST['recinto'];
        $promNum_php = $_POST['promNum'];
        $promDec_php = $_POST['promDec'];

        $prom_php =  $promNum_php;// + ($promDec_php/100);

        //realiza la "traducción" de los datos
        $prom=0;
        if($prom_php==6){
            $prom=1;
        }else if($prom_php==7){
            $prom=2;
        }else if($prom_php==8){
            $prom=3;
        }else if($prom_php==9){
            $prom=4;
        }

        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $query = mysqli_query($conexion, "SELECT class, atrib, cal, freq FROM tablaFrecuenciasSexo where cal=$estilo_php or cal=$recinto_php or cal=$prom");
        $filias = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $ctValores=count($filias);  
        $producto=1;
        
        $producto1=0;
        $producto2=0;

        $pEstilo=0;
        $pProm=0;
        $pRec=0;

        $resultMasc='';
        $resultFem='';

        //calcula la probabilidad total de cada clase
        foreach ($filias as $key => $value) {
            
            foreach ($value as $k => $v) {
                if($v=='aiEstilo' && $value['cal']== $estilo_php){
                    $pEstilo=(float)$value['freq'];
                }else if($v=='aiProm' && $value['cal']== $prom){
                    $pProm=(float)$value['freq'];
                }else if($v=='aiRec' && $value['cal']== $recinto_php){
                    $pRec=(float)$value['freq'];
                } 
            }
        
            $product=$pEstilo*$pProm;
            $produc=$pRec;
            $producto=(float)$product*(float)$produc;

            if($value['class']=='aiMasc'){
                $producto1=$producto;
                $resultMasc=' Masculino estilo: '.$pEstilo.' promedio: '.$pProm.' recinto: '.$pRec.' PT(): '.$producto;
            }else if($value['class']=='aiFem'){
                $producto2=$producto;
                $resultFem=' Femenino estilo: '.$pEstilo.' promedio: '.$pProm.' recinto: '.$pRec.' PT(): '.$producto;
            }
        }
        $sexoPredicho=[];

        
        $sexoPredicho = array(
            "Masculino" => $producto1,
            "Femenino" => $producto2
        );

        $max=max($sexoPredicho);
        
        print_r($resultMasc.'</br>'.$resultFem);

        $result='';
        foreach ($sexoPredicho as $posicion => $valor) {
            if($valor==$max){
                $result=$posicion;
            }
        }
        echo '</br></br>Tu sexo debe ser: '.$result;
        //determina recinto
    }else if(!empty($_POST['sexxo']) && !empty($_POST['recinto']) && !empty($_POST['promNum'])){
        $determinarEstilo2=1;

        /** LLENA LAS VARIABLES DESDE EL FORMULARIO */
        $sexo_php = $_POST['sexxo'];
        $recinto_php = $_POST['recinto'];
        $promNum_php = $_POST['promNum'];
        $promDec_php = $_POST['promDec'];

        $prom_php =  $promNum_php; // + ($promDec_php/100);

        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $query = mysqli_query($conexion, "SELECT class, atrib, cal, freq FROM tablaFrecuenciasEstiloDos");
        $filas = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $ctValores=count($filas);  
        $producto=1;
        
        $producto1=0;
        $producto2=0;
        $producto3=0;

        $psexo=0;
        $precinto=0;
        $pprom=0;

        $resultAcomodador='';
        $resultAsimilador='';
        $resultConvergente='';
        $resultDivergente='';

        //calcula la probabilidad total para cada atributo de la clase
        foreach ($filas as $key => $value) {
            
            foreach ($value as $k => $v) {
                if($v=='aiRec' && $value['cal']== $recinto_php){
                    $precinto=(float)$value['freq'];
                }else if($v=='aiSex' && $value['cal']== $sexo_php){
                    $psexo=(float)$value['freq'];
                }else if($v=='aiProm' && $value['cal']== $prom_php){
                    $pprom=(float)$value['freq'];
                }
            }

            $product=$precinto*$psexo;
            $produc=$pprom;
            $producto=(float)$product*(float)$produc;

            if($value['class']=='aiAcom'){
                $producto1=$producto;
                $resultAcomodador=' Acomodador recinto: '.$precinto.' promedio: '.$pprom.' sexo: '.$psexo.' PT(): '.$producto;
            }else if($value['class']=='aiAsim'){
                $producto2=$producto;
                $resultAsimilador=' Asimilador recinto: '.$precinto.' promedio: '.$pprom.' sexo: '.$psexo.' PT(): '.$producto;
            }else if($value['class']=='aiConv'){
                $producto3=$producto;
                $resultConvergente=' Convergente recinto: '.$precinto.' promedio: '.$pprom.' sexo: '.$psexo.' PT(): '.$producto;
            }else if($value['class']=='aiDiv'){
                $producto4=$producto;
                $resultDivergente=' Divergente recinto: '.$precinto.' promedio: '.$pprom.' sexo: '.$psexo.' PT(): '.$producto;
            }
        }
        $estiloPredicho=[];

        $estiloPredicho = array(
            "Acomodador" => $producto1,
            "Asimilador" => $producto2,
            "Convergente" => $producto3,
            "Divergente" => $producto4
        );

        $max=max($estiloPredicho);
        
        print_r($resultAcomodador.'</br>'.$resultAsimilador.'</br>'.$resultConvergente.'</br>'.$resultDivergente);

        $result='';
        foreach ($estiloPredicho as $posicion => $valor) {
            if($valor==$max){
                $result=$posicion;
            }
        }

        echo '</br></br>Tu estilo debe ser: '.$result;

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

        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $sql="SELECT `age`,`genderId`,`evaluationId`,`times`,`expertiseId`,`skillId`,`webBasedId`,`webSiteId`, `class` FROM `profesores` order by `classId`";
        $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());
        $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC);

         /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
         $query = mysqli_query($conexion, "SELECT class, atrib, cal, freq FROM tablaFrecuenciasProfesor");
         $filas = mysqli_fetch_all($query, MYSQLI_ASSOC);
    

        $ctValores=count($filas);  
        $producto=1;
        
        $producto1=0;
        $producto2=0;
        $producto3=0;

        $pAge=0;
        $pGenderId=0;
        $pEvaluationId=0;
        $pTimes=0;
        $pExpertiseId=0;
        $pSkillId=0;
        $pWebBasedId=0;
        $pWebSiteId=0;

        $resultBeginner='';
        $resultIntermedio='';
        $resultAdvanced='';


 //calcula la probabilidad total para cada atributo de la clase
        foreach ($filas as $key => $value) {
            
            foreach ($value as $k => $v) {
                if($v=='aiAge' && $value['cal']== $edad_php){
                    $pAge=(float)$value['freq'];
                }else if($v=='aiGenderId' && $value['cal']== $genero_php){
                    $pGenderId=(float)$value['freq'];
                }else if($v=='aiEvaluationId' && $value['cal']== $impartiendo_php){
                    $pEvaluationId=(float)$value['freq'];
                }else if($v=='aiTimes' && $value['cal']== $times_php){
                    $pTimes=(float)$value['freq'];
                }else if($v=='aiExpertiseId' && $value['cal']== $expertise_php){
                    $pExpertiseId=(float)$value['freq'];
                }else if($v=='aiSkillId' && $value['cal']== $skill_php){
                    $pSkillId=(float)$value['freq'];
                }else if($v=='aiWebBasedId' && $value['cal']== $webBased_php){
                    $pWebBasedId=(float)$value['freq'];
                }else if($v=='aiWebSiteId' && $value['cal']== $webSite_php){
                    $pWebSiteId=(float)$value['freq'];
                }
            }

            $product=$pAge*$pGenderId;
            $produc=$pEvaluationId*$pWebSiteId;
            $produ=$pTimes*$pExpertiseId;
            $prod=$pSkillId*$pWebBasedId;
         
            $pro=(float)$product*(float)$produc;
            $pr=(float)$produ*(float)$prod;
            $producto=(float)$pro*(float)$pr;



            if($value['class']=='aiBeginner'){
                $producto1=$producto;
                $resultBeginner=' Beginner age: '.$pAge.' gender: '.$pGenderId.' evaluation: '.$pEvaluationId.' times: '.$pTimes.' expertised: '.$pExpertiseId.' skill: '.$pSkillId.' webBased: '.$pWebBasedId.' webSite: '.$pWebSiteId.' PT(): '.$producto.'</br>';
            }else if($value['class']=='aiIntermediate'){
                $producto2=$producto;
                $resultIntermedio=' Intermediate age: '.$pAge.' gender: '.$pGenderId.' evaluation: '.$pEvaluationId.' times: '.$pTimes.' expertised: '.$pExpertiseId.' skill: '.$pSkillId.' webBased: '.$pWebBasedId.' webSite: '.$pWebSiteId.' PT(): '.$producto.'</br>';

            }else if($value['class']=='aiAdvanced'){
                $producto3=$producto;
                $resultAdvanced=' Advanced age: '.$pAge.' gender: '.$pGenderId.' evaluation: '.$pEvaluationId.' times: '.$pTimes.' expertised: '.$pExpertiseId.' skill: '.$pSkillId.' webBased: '.$pWebBasedId.' webSite: '.$pWebSiteId.' PT(): '.$producto.'</br>';

            }
        }
        $estiloPredicho=[];

        $estiloPredicho = array(
            "Beginner" => $producto1,
            "Intermediate" => $producto2,
            "Advanced" => $producto3
        );

        $max=max($estiloPredicho);
        
        print_r($resultBeginner.'</br>'.$resultIntermedio.'</br>'.$resultAdvanced);

        $result='';
        foreach ($estiloPredicho as $posicion => $valor) {
            if($valor==$max){
                $result=$posicion;
            }
        }

        echo '</br></br>Tu tipo de profe debe ser: '.$result;
    }
}


?>