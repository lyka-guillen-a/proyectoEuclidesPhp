<?php
        /** CONEXIÓN CON LA BD ...*/
        $conexion=(mysqli_connect("remotemysql.com","sLmri09wJm","NKxZsWY6Yp"));
        mysqli_select_db($conexion,'sLmri09wJm') or die ("no se encuentra la bd");

        $arrayInsertar[]=0;
        $arrayTuplas[]=0;
        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $sql="SELECT `age`, `gender`, `evaluation`, `times`, `expertise`, `skill`, `webBased`, `webSite`, `class`, `classId`, `genderId`, `evaluationId`, `expertiseId`, `skillId`, `webBasedId`, `webSiteId` FROM `profesores`";
        $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());

        $row=0;
        //Inicializo variables para calcular ai
        $fila[]=0;
        $ai[]=0;

        $aiBeginner[]=0;
        $aiIntermediate[]=0;
        $aiAdvanced[]=0;

        //Atributos
        $aiAge[]=0;
        $aiGenderId[]=0;
        $aiEvaluationId[]=0;
        $aiTimes[]=0;
        $aiExpertiseId[]=0;
        $aiSkillId[]=0;
        $aiWebBasedId[]=0;
        $aiWebSiteId[]=0;
        

        //Para las repeticiones de los valores únicos de los atributos
        $aiAgeU[]=0;
        $aiGenderIdU[]=0;
        $aiEvaluationIdU[]=0;
        $aiTimesU[]=0;
        $aiExpertiseIdU[]=0;
        $aiSkillIdU[]=0;
        $aiWebBasedIdU[]=0;
        $aiWebSiteIdU[]=0;

        //Asigno a las clases un arreglo para cada atributo
        $aiBeginner=$aiAge;
        $aiBeginner=$aiGenderId;
        $aiBeginner= $aiEvaluationId;
        $aiBeginner=$aiTimes;
        $aiBeginner=$aiExpertiseId;
        $aiBeginner=$aiSkillId;
        $aiBeginner=$aiWebBasedId;
        $aiBeginner=$aiWebSiteId;

        $aiIntermediate=$aiAge;
        $aiIntermediate=$aiGenderId;
        $aiIntermediate= $aiEvaluationId;
        $aiIntermediate=$aiTimes;
        $aiIntermediate=$aiExpertiseId;
        $aiIntermediate=$aiSkillId;
        $aiIntermediate=$aiWebBasedId;
        $aiIntermediate=$aiWebSiteId;

        $aiAdvanced=$aiAge;
        $aiAdvanced=$aiGenderId;
        $aiAdvanced= $aiEvaluationId;
        $aiAdvanced=$aiTimes;
        $aiAdvanced=$aiExpertiseId;
        $aiAdvanced=$aiSkillId;
        $aiAdvanced=$aiWebBasedId;
        $aiAdvanced=$aiWebSiteId;



        //Asigno a las clases un arreglo para cada atributo con sus valores únicos
        $aiBeginner=$aiAgeU;
        $aiBeginner=$aiGenderIdU;
        $aiBeginner= $aiEvaluationIdU;
        $aiBeginner=$aiTimesU;
        $aiBeginner=$aiExpertiseIdU;
        $aiBeginner=$aiSkillIdU;
        $aiBeginner=$aiWebBasedIdU;
        $aiBeginner=$aiWebSiteIdU;

        $aiIntermediate=$aiAgeU;
        $aiIntermediate=$aiGenderIdU;
        $aiIntermediate= $aiEvaluationIdU;
        $aiIntermediate=$aiTimesU;
        $aiIntermediate=$aiExpertiseIdU;
        $aiIntermediate=$aiSkillIdU;
        $aiIntermediate=$aiWebBasedIdU;
        $aiIntermediate=$aiWebSiteIdU;

        $aiAdvanced=$aiAgeU;
        $aiAdvanced=$aiGenderIdU;
        $aiAdvanced= $aiEvaluationIdU;
        $aiAdvanced=$aiTimesU;
        $aiAdvanced=$aiExpertiseIdU;
        $aiAdvanced=$aiSkillIdU;
        $aiAdvanced=$aiWebBasedIdU;
        $aiAdvanced=$aiWebSiteIdU;


        //agrego las clases al array ai
        $ai=$aiBeginner;
        $ai=$aiIntermediate;
        $ai=$aiAdvanced;

        //Variables para calcular la cantidad de ocurrencias de cada clase (n)
        $ctBeginner=0;
        $ctIntermediate=0;
        $ctAdvanced=0;

        $contador=0;
        //Selecciona los datos de la base de datos y los categoriza
        while (($row = mysqli_fetch_array($consulta , MYSQLI_ASSOC))!=NULL){
            $fila[$contador]=$row;

            if($row['classId']==1){
                //Cuenta la cantidad de instancias a la clase
                $ctBeginner++;
                //Recolecta todos los valores del atributo, para esta clase
                $ai['aiBeginner']['aiAge'][$contador]=$row['age'];
                $ai['aiBeginner']['aiGenderId'][$contador]=$row['genderId'];
                $ai['aiBeginner']['aiEvaluationId'][$contador]=$row['evaluationId'];
                $ai['aiBeginner']['aiTimes'][$contador]=$row['times'];
                $ai['aiBeginner']['aiExpertiseId'][$contador]=$row['expertiseId'];
                $ai['aiBeginner']['aiSkillId'][$contador]=$row['skillId'];
                $ai['aiBeginner']['aiWebBasedId'][$contador]=$row['webBasedId'];
                $ai['aiBeginner']['aiWebSiteId'][$contador]=$row['webSiteId'];
              

            }else  if($row['classId']==2){
                //Cuenta la cantidad de instancias a la clase
                $ctIntermediate++;
                //Recolecta todos los valores del atributo, para esta clase
                $ai['aiIntermediate']['aiAge'][$contador]=$row['age'];
                $ai['aiIntermediate']['aiGenderId'][$contador]=$row['genderId'];
                $ai['aiIntermediate']['aiEvaluationId'][$contador]=$row['evaluationId'];
                $ai['aiIntermediate']['aiTimes'][$contador]=$row['times'];
                $ai['aiIntermediate']['aiExpertiseId'][$contador]=$row['expertiseId'];
                $ai['aiIntermediate']['aiSkillId'][$contador]=$row['skillId'];
                $ai['aiIntermediate']['aiWebBasedId'][$contador]=$row['webBasedId'];
                $ai['aiIntermediate']['aiWebSiteId'][$contador]=$row['webSiteId'];
                

            }else  if($row['classId']==3){
                //Cuenta la cantidad de instancias a la clase
                $ctAdvanced++;
                //Recolecta todos los valores del atributo, para esta clase
                $ai['aiAdvanced']['aiAge'][$contador]=$row['age'];
                $ai['aiAdvanced']['aiGenderId'][$contador]=$row['genderId'];
                $ai['aiAdvanced']['aiEvaluationId'][$contador]=$row['evaluationId'];
                $ai['aiAdvanced']['aiTimes'][$contador]=$row['times'];
                $ai['aiAdvanced']['aiExpertiseId'][$contador]=$row['expertiseId'];
                $ai['aiAdvanced']['aiSkillId'][$contador]=$row['skillId'];
                $ai['aiAdvanced']['aiWebBasedId'][$contador]=$row['webBasedId'];
                $ai['aiAdvanced']['aiWebSiteId'][$contador]=$row['webSiteId'];
            }
            $contador++;
        }

        //Valores posibles para cada atributo


            $unicValBeginner[]=0; // en la pos 1, tiene los valores de estilo, en la 2 los de promedio...
            $unicValIntermediate[]=0;
            $unicValAdvanced[]=0;

            $unicValBeginner[]=array_unique($ai['aiBeginner']['aiAge']);
            $unicValBeginner[]=array_unique($ai['aiBeginner']['aiGenderId']);
            $unicValBeginner[]=array_unique($ai['aiBeginner']['aiEvaluationId']);
            $unicValBeginner[]=array_unique($ai['aiBeginner']['aiTimes']);
            $unicValBeginner[]=array_unique($ai['aiBeginner']['aiExpertiseId']);
            $unicValBeginner[]=array_unique($ai['aiBeginner']['aiSkillId']);
            $unicValBeginner[]=array_unique($ai['aiBeginner']['aiWebBasedId']);
            $unicValBeginner[]=array_unique($ai['aiBeginner']['aiWebSiteId']);

            $unicValIntermediate[]=array_unique($ai['aiIntermediate']['aiAge']);
            $unicValIntermediate[]=array_unique($ai['aiIntermediate']['aiGenderId']);
            $unicValIntermediate[]=array_unique($ai['aiIntermediate']['aiEvaluationId']);
            $unicValIntermediate[]=array_unique($ai['aiIntermediate']['aiTimes']);
            $unicValIntermediate[]=array_unique($ai['aiIntermediate']['aiExpertiseId']);
            $unicValIntermediate[]=array_unique($ai['aiIntermediate']['aiSkillId']);
            $unicValIntermediate[]=array_unique($ai['aiIntermediate']['aiWebBasedId']);
            $unicValIntermediate[]=array_unique($ai['aiIntermediate']['aiWebSiteId']);

            $unicValAdvanced[]=array_unique($ai['aiAdvanced']['aiAge']);
            $unicValAdvanced[]=array_unique($ai['aiAdvanced']['aiGenderId']);
            $unicValAdvanced[]=array_unique($ai['aiAdvanced']['aiEvaluationId']);
            $unicValAdvanced[]=array_unique($ai['aiAdvanced']['aiTimes']);
            $unicValAdvanced[]=array_unique($ai['aiAdvanced']['aiExpertiseId']);
            $unicValAdvanced[]=array_unique($ai['aiAdvanced']['aiSkillId']);
            $unicValAdvanced[]=array_unique($ai['aiAdvanced']['aiWebBasedId']);
            $unicValAdvanced[]=array_unique($ai['aiAdvanced']['aiWebSiteId']);


            $prob=1/3; //1/cantidad de valores posibles que pueden tomar los atributos
            //m es la cantidad de atributos
            $m=8;
        $unicValMasc=[];
        $ctMasc=0;
        //recorre cada clase, cuenta los valores distintos para cada atributo y calcula las frecuencias
        foreach ($ai as $posicion => $valor) {
            if($posicion){

                //Valores para hombres
                foreach ($ai[$posicion] as $pos => $val) {
                    //Cuenta la cantidad de valores únicos para estilo para los estudiantes de hombres
                    if($pos){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValMasc[1][$i])){
                                $valorContar = $unicValMasc[1][$i];
                                foreach ($ai[$posicion][$pos] as $p => $v) {
                                    if(!empty($ai[$posicion][$pos][$p])){
                                        if($valorContar==$ai[$posicion][$pos][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctMasc+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                                $ai[$posicion][$pos][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai[$posicion][$pos])){
                                array_push($ai[$posicion][$pos], $j.'');

                                //calcula la frecuencia para cada atributo de la clase
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctMasc+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai[$posicion][$pos.'U'][$j]=$freq;  
                            }
                        }
                    }
                }
                if($posicion=='aiBeginner'){
                    $ctBeginner=$ctMasc;
                    $unicValMasc=$unicValBeginner;
                }else if($posicion=='aiIntermediate'){
                    $ctIntermediate=$ctMasc;
                    $unicValMasc=$unicValIntermediate;
                }else if($posicion=='aiAdvanced'){
                    $ctAdvanced=$ctMasc;
                    $unicValMasc=$unicValAdvanced;
                }
            }

        } //FIN: recorre cada clase, cuenta los valores distintos para cada atributo y calcula las frecuencias

        //quita los duplicados de las columnas que se van a insertar
        $ai['aiBeginner']['aiAge']=array_unique($ai['aiBeginner']['aiAge'], SORT_REGULAR);
        $ai['aiBeginner']['aiGenderId']=array_unique($ai['aiBeginner']['aiGenderId'], SORT_REGULAR);
        $ai['aiBeginner']['aiEvaluationId']=array_unique($ai['aiBeginner']['aiEvaluationId'], SORT_REGULAR);
        $ai['aiBeginner']['aiTimes']=array_unique($ai['aiBeginner']['aiTimes'], SORT_REGULAR);
        $ai['aiBeginner']['aiExpertiseId']=array_unique($ai['aiBeginner']['aiExpertiseId'], SORT_REGULAR);
        $ai['aiBeginner']['aiSkillId']=array_unique($ai['aiBeginner']['aiSkillId'], SORT_REGULAR);
        $ai['aiBeginner']['aiWebBasedId']=array_unique($ai['aiBeginner']['aiWebBasedId'], SORT_REGULAR);
        $ai['aiBeginner']['aiWebSiteId']=array_unique($ai['aiBeginner']['aiWebSiteId'], SORT_REGULAR);

        $ai['aiIntermediate']['aiAge']=array_unique($ai['aiIntermediate']['aiAge'], SORT_REGULAR);
        $ai['aiIntermediate']['aiGenderId']=array_unique($ai['aiIntermediate']['aiGenderId'], SORT_REGULAR);
        $ai['aiIntermediate']['aiEvaluationId']=array_unique($ai['aiIntermediate']['aiEvaluationId'], SORT_REGULAR);
        $ai['aiIntermediate']['aiTimes']=array_unique($ai['aiIntermediate']['aiTimes'], SORT_REGULAR);
        $ai['aiIntermediate']['aiExpertiseId']=array_unique($ai['aiIntermediate']['aiExpertiseId'], SORT_REGULAR);
        $ai['aiIntermediate']['aiSkillId']=array_unique($ai['aiIntermediate']['aiSkillId'], SORT_REGULAR);
        $ai['aiIntermediate']['aiWebBasedId']=array_unique($ai['aiIntermediate']['aiWebBasedId'], SORT_REGULAR);
        $ai['aiIntermediate']['aiWebSiteId']=array_unique($ai['aiIntermediate']['aiWebSiteId'], SORT_REGULAR);

        $ai['aiAdvanced']['aiAge']=array_unique($ai['aiAdvanced']['aiAge'], SORT_REGULAR);
        $ai['aiAdvanced']['aiGenderId']=array_unique($ai['aiAdvanced']['aiGenderId'], SORT_REGULAR);
        $ai['aiAdvanced']['aiEvaluationId']=array_unique($ai['aiAdvanced']['aiEvaluationId'], SORT_REGULAR);
        $ai['aiAdvanced']['aiTimes']=array_unique($ai['aiAdvanced']['aiTimes'], SORT_REGULAR);
        $ai['aiAdvanced']['aiExpertiseId']=array_unique($ai['aiAdvanced']['aiExpertiseId'], SORT_REGULAR);
        $ai['aiAdvanced']['aiSkillId']=array_unique($ai['aiAdvanced']['aiSkillId'], SORT_REGULAR);
        $ai['aiAdvanced']['aiWebBasedId']=array_unique($ai['aiAdvanced']['aiWebBasedId'], SORT_REGULAR);
        $ai['aiAdvanced']['aiWebSiteId']=array_unique($ai['aiAdvanced']['aiWebSiteId'], SORT_REGULAR);



        $classId=1;
        unset($ai[0]);
        //Se recorre todos los valores para insertarlos en una tabla en la BD
        foreach ($ai as $position => $clase) {
            if($position=='aiBeginner'){
                $classId=1;
            }else if($position=='aiIntermediate'){
                $classId=2;
            }else if($position=='aiAdvanced'){
                $classId=3;
            }

           //accede a los 16 arrays con valores 
            foreach ($ai[$position] as $positi => $atributo) {
                if($positi){
                //rellena con 0, los valores vaciós en el arreglo
                    for ($x=1; $x <=8 ; $x++) { 
                        if(empty($ai[$position][$positi][$x])){
                            $ai[$position][$positi][$x]=0;
                        } 
                    }      
                }
            }
        }//fin foreach


        foreach ($ai as $indice => $asociado) {
            foreach ($ai[$indice] as $indic => $asoc) {

                foreach ($ai[$indice][$indic] as $ind => $aso) {
                    
                    if($indic){
                       
                        if(!empty($ai[$indice][$indic.'U'][$ind])){                     

                            array_push($arrayTuplas, array( 
                                "class" => $indice, 
                                "atrib" => $indic, 
                                "val" => $ind, 
                                "freq" => $freq
                            ));
                        }
                    }
                }
            }

            
        }

        unset($arrayTuplas[0]);
     //   unset($arrayTuplas[3]);2
        unset($arrayTuplas[4]);

     //   $arrayTuplas=array_unique($arrayTuplas, SORT_REGULAR);


        foreach ($arrayTuplas as $posi => $valu) {
            
            $position=$valu['class'];
            $positi=$valu['atrib'];
            $value=$valu['val'];
            $freq=$valu['freq'];

            //decodifica y asigna Id a los atributos
            if($position=='aiBeginner'){
                $classId=1;
            }else if($position=='aiIntermediate'){
                $classId=2;
            }else if($position=='aiAdvanced'){
                $classId=3;
            }else{
                $classId=$position;
            }

/*
            if($positi=='aiEstilo'){
                $atribId=1;
            }else if($positi=='aiProm'){
                $atribId=2;
            }else if($positi=='aiRec'){
                $atribId=3;
            }
*/

            if($positi=='aiAge'){
                $atribId=1;
            }else if($positi=='aiGenderId'){
                $atribId=2;
            }else if($positi=='aiEvaluationId'){
                $atribId=3;
            }else if($positi=='aiTimes'){
                $atribId=4;
            }else if($positi=='aiExpertiseId'){
                $atribId=5;
            }else if($positi=='aiSkillId'){
                $atribId=6;
            }else if($positi=='aiWebBasedId'){
                $atribId=7;
            }else if($positi=='aiWebSiteId'){
                $atribId=8;
            }



            $freq=$ai[$position][$positi.'U'][$value];

   // print_r('</br> classId: '.$classId.' class: '.$position.' atribId: '.$atribId.' atrib: '.$positi);
    //print_r(' val: '.$value.' freq: '.$ai[$position][$positi.'U'][$value]);

            /** CONSULTA QUE INSERTA LAS FRECUENCIAS Y DEMÁS DATOS */
            $sql="Insert into tablaFrecuenciasProfesor(classId, class, atribId, atrib, cal, freq) VALUES ('$classId', '$position', '$atribId', '$positi', '$value', '$freq')";
            $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());
        }


    print_r('TODO OKo');

?>