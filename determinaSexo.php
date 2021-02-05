<?php
        /** CONEXIÓN CON LA BD ...*/
        $conexion=(mysqli_connect("remotemysql.com","sLmri09wJm","NKxZsWY6Yp"));
        mysqli_select_db($conexion,'sLmri09wJm') or die ("no se encuentra la bd");

        $arrayInsertar[]=0;
        $arrayTuplas[]=0;
        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $sql="SELECT `recinto`, `sexoId`, `estilo`, `estiloId`, `promedio`, `sexo`, `sexoId` FROM `recisexpromDos`";
        $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());

        $row=0;
        //Inicializo variables para calcular ai
        $fila[]=0;
        $ai[]=0;

        $aiMasc[]=0;
        $aiFem[]=0;

        //Atributos
        $aiEstilo[]=0;
        $aiProm[]=0;
        $aiRec[]=0;

        //Para las repeticiones de los valores únicos de los atributos
        $aiEstiloU[]=0;
        $aiPromU[]=0;
        $aiRecU[]=0;

        //Asigno a las clases un arreglo para cada atributo
        $aiMasc=$aiEstilo;
        $aiMasc=$aiProm;
        $aiMasc=$aiRec;

        $aiFem=$aiEstilo;
        $aiFem=$aiProm;
        $aiFem=$aiRec;

        //Asigno a las clases un arreglo para cada atributo con sus valores únicos
        $aiMasc=$aiEstiloU;
        $aiMasc=$aiPromU;
        $aiMasc=$aiRecU;

        $aiFem=$aiEstiloU;
        $aiFem=$aiPromU;
        $aiFem=$aiRecU;

        //agrego las clases al array ai
        $ai=$aiMasc;
        $ai=$aiFem;

        //Variables para calcular la cantidad de ocurrencias de cada clase (n)
        $ctMasc=0;
        $ctFem=0;

        $contador=0;
        //Selecciona los datos de la base de datos y los categoriza
        while (($row = mysqli_fetch_array($consulta , MYSQLI_ASSOC))!=NULL){
            $fila[$contador]=$row;

            //1 es Paraíso
            if($row['sexoId']==1){
                //Cuenta la cantidad de instancias a la clase
                $ctMasc++;
                //Recolecta todos los valores del atributo, para esta clase
                $ai['aiMasc']['aiEstilo'][$contador]=$row['estiloId'];
                $ai['aiMasc']['aiProm'][$contador]=$row['promedio'];
                $ai['aiMasc']['aiRec'][$contador]=$row['sexoId'];

            //2 es Turrialba
            }else  if($row['sexoId']==2){
                //Cuenta la cantidad de instancias a la clase
                $ctFem++;
                //Recolecta todos los valores del atributo, para esta clase
                $ai['aiFem']['aiEstilo'][$contador]=$row['estiloId'];
                $ai['aiFem']['aiProm'][$contador]=$row['promedio'];
                $ai['aiFem']['aiRec'][$contador]=$row['sexoId'];
            }
            $contador++;
        }

        //Valores posibles para cada atributo
            //van de 1 a 4,  son 4 posibles para estilo
            //van de 6 al 9, son 4 posibles para prom
            //van de 1 a 2, son 2 posibles para rec

            $unicValMasc[]=0; // en la pos 1, tiene los valores de estilo, en la 2 los de promedio...
            $unicValFem[]=0;

            $unicValMasc[]=array_unique($ai['aiMasc']['aiEstilo']);
            $unicValMasc[]=array_unique($ai['aiMasc']['aiProm']);
            $unicValMasc[]=array_unique($ai['aiMasc']['aiRec']);

            $unicValFem[]=array_unique($ai['aiFem']['aiEstilo']);
            $unicValFem[]=array_unique($ai['aiFem']['aiProm']);
            $unicValFem[]=array_unique($ai['aiFem']['aiRec']);

            $probEstilo=1/4; //1/cantidad de valores posibles que pueden tomar el atributo estilo
            $probProm=1/4; //1/cantidad de valores posibles que pueden tomar el atributo promedio
            $probRec=1/2; //1/cantidad de valores posibles que pueden tomar el atributo recinto
            //m es la cantidad de atributos
            $m=3;

        //recorre cada clase, cuenta los valores distintos para cada atributo y calcula las frecuencias
        foreach ($ai as $posicion => $valor) {
            if($posicion=='aiMasc'){
                //Valores para hombres
                foreach ($ai['aiMasc'] as $pos => $val) {
                    //Cuenta la cantidad de valores únicos para estilo para los estudiantes de hombres
                    if($pos=='aiEstilo'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValMasc[1][$i])){
                                $valorContar = $unicValMasc[1][$i];
                                foreach ($ai['aiMasc']['aiEstilo'] as $p => $v) {
                                    if(!empty($ai['aiMasc']['aiEstilo'][$p])){
                                        if($valorContar==$ai['aiMasc']['aiEstilo'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase
                                $nxp=($m*$probEstilo); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctMasc+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                                $ai['aiMasc']['aiEstiloU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai['aiMasc']['aiEstilo'])){
                                array_push($ai['aiMasc']['aiEstilo'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase
                                $nxp=($m*$probEstilo); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctMasc+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiMasc']['aiEstiloU'][$j]=$freq;  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para promedio para los estudiantes hombres
                    }else if($pos=='aiProm'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValMasc[1][$i])){
                                $valorContar = $unicValMasc[1][$i];
                                foreach ($ai['aiMasc']['aiProm'] as $p => $v) {
                                    if(!empty($ai['aiMasc']['aiProm'][$p])){
                                        if($valorContar==$ai['aiMasc']['aiProm'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase
                                $nxp=($m*$probProm); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctMasc+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                                $ai['aiMasc']['aiPromU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai['aiMasc']['aiProm'])){
                                array_push($ai['aiMasc']['aiProm'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probProm); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctMasc+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                                $ai['aiMasc']['aiPromU'][$j]=$freq;  
                            }
                        }
                        //Cuenta la cantidad de valores únicos para sexo para los estudiantes hombres
                    }else if($pos=='aiRec'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValMasc[1][$i])){
                                $valorContar = $unicValMasc[1][$i];
                                foreach ($ai['aiMasc']['aiRec'] as $p => $v) {
                                    if(!empty($ai['aiMasc']['aiRec'][$p])){
                                        if($valorContar==$ai['aiMasc']['aiRec'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probRec); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctMasc+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                                $ai['aiMasc']['aiRecU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai['aiMasc']['aiRec'])){
                                array_push($ai['aiMasc']['aiRec'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probRec); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctMasc+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiMasc']['aiRecU'][$j]=$freq;  
                            }
                        }
                    }
                }
            }else if($posicion=='aiFem'){
                //Valores para los estudiantes de Paraíso
                foreach ($ai['aiFem'] as $pos => $val) {
                    //Cuenta la cantidad de valores únicos para estilo para los estudiantes mujeres
                    if($pos=='aiEstilo'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValFem[1][$i])){
                                $valorContar = $unicValFem[1][$i];
                                foreach ($ai['aiFem']['aiEstilo'] as $p => $v) {
                                    if(!empty($ai['aiFem']['aiEstilo'][$p])){
                                        if($valorContar==$ai['aiFem']['aiEstilo'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probEstilo); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctFem+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiFem']['aiEstiloU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai['aiFem']['aiEstilo'])){
                                array_push($ai['aiFem']['aiEstilo'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probEstilo); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctFem+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                            $ai['aiFem']['aiEstiloU'][$j]=$freq;  
                            }
                        }
                        //Cuenta la cantidad de valores únicos para promedio para los estudiantes de Paraíso
                    }else if($pos=='aiProm'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValFem[1][$i])){
                                $valorContar = $unicValFem[1][$i];
                                foreach ($ai['aiFem']['aiProm'] as $p => $v) {
                                    if(!empty($ai['aiFem']['aiProm'][$p])){
                                        if($valorContar==$ai['aiFem']['aiProm'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probProm); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctFem+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiFem']['aiPromU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai['aiFem']['aiProm'])){
                                array_push($ai['aiFem']['aiProm'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probProm); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctFem+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                            $ai['aiFem']['aiPromU'][$j]=$freq;  
                            }
                        }
                        //Cuenta la cantidad de valores únicos para sexo para los estudiantes de Paraíso
                    }else if($pos=='aiRec'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValFem[1][$i])){
                                $valorContar = $unicValFem[1][$i];
                                foreach ($ai['aiFem']['aiRec'] as $p => $v) {
                                    if(!empty($ai['aiFem']['aiRec'][$p])){
                                        if($valorContar==$ai['aiFem']['aiRec'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probRec); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctFem+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiFem']['aiRecU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=2; $j++) { 
                            if(!in_array($j, $ai['aiFem']['aiRec'])){
                                array_push($ai['aiFem']['aiRec'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probRec); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctFem+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                            $ai['aiFem']['aiRecU'][$j]=$freq;  
                            }
                        }
                    }
                }
            }//fin turri
        } //FIN: recorre cada clase, cuenta los valores distintos para cada atributo y calcula las frecuencias

        //quita los duplicados de las columnas que se van a insertar
        $ai['aiMasc']['aiEstilo']=array_unique($ai['aiMasc']['aiEstilo'], SORT_REGULAR);
        $ai['aiMasc']['aiProm']=array_unique($ai['aiMasc']['aiProm'], SORT_REGULAR);
        $ai['aiMasc']['aiRec']=array_unique($ai['aiMasc']['aiRec'], SORT_REGULAR);

        $ai['aiFem']['aiEstilo']=array_unique($ai['aiFem']['aiEstilo'], SORT_REGULAR);
        $ai['aiFem']['aiProm']=array_unique($ai['aiFem']['aiProm'], SORT_REGULAR);
        $ai['aiFem']['aiRec']=array_unique($ai['aiFem']['aiRec'], SORT_REGULAR);

        $sexoId=1;
        unset($ai[0]);
        //Se recorre todos los valores para insertarlos en una tabla en la BD
        foreach ($ai as $position => $clase) {
            if($position=='aiMasc'){
                $sexoId=1;
            }else if($position=='aiFem'){
                $sexoId=2;
            }
           //accede a los 6 arrays con valores (estilo, promedio, recinto, estiloU, promedioU, recintoU)
            foreach ($ai[$position] as $positi => $atributo) {

                if($positi=='aiEstilo' || $positi=='aiEstiloU'){
                //rellena con 0, los valores vaciós en el arreglo
                    for ($x=1; $x <=4 ; $x++) { 
                        if(empty($ai[$position][$positi][$x])){
                            $ai[$position][$positi][$x]=0;
                        } 
                    }      
                }else if($positi=='aiProm' || $positi=='aiPromU'){
                    //rellena con 0, los valores vaciós en el arreglo
                    for ($x=1; $x <=4 ; $x++) { 
                        if(empty($ai[$position][$positi][$x])){
                            $ai[$position][$positi][$x]=0;
                        }
                    } 
                }else if($positi=='aiRec' || $positi=='aiRecU'){
                    //rellena con 0, los valores vaciós en el arreglo
                    for ($x=1; $x <=2 ; $x++) { 
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
                    if($indic!='aiEstiloU'&& $indic!='aiPromU'&& $indic!='aiRecU'){
                        if(!empty($ai[$indice][$indic.'U'][$ind])){

/*
                            print_r('</br>indice: '.$indice.'');
                            print_r(' indic: '.$indic);
                            print_r(' ind: '.$ind);
                            print_r(' valor: '.$aso);
                            print_r(' freq: '.$ai[$indice][$indic.'U'][$ind]);
*/                           
        
                            array_push($arrayTuplas, array( 
                                "sexo" => $indice, 
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

     //   $arrayTuplas=array_unique($arrayTuplas, SORT_REGULAR);


        foreach ($arrayTuplas as $posi => $valu) {
            
            $position=$valu['sexo'];
            $positi=$valu['atrib'];
            $value=$valu['val'];
            $freq=$valu['freq'];

            //decodifica y asigna Id a los atributos
            if($position=='aiMasc'){
                $sexoId=1;
            }else if($position=='aiFem'){
                $sexoId=2;
            }

            if($positi=='aiEstilo'){
                $atribId=1;
            }else if($positi=='aiProm'){
                $atribId=2;
            }else if($positi=='aiRec'){
                $atribId=3;
            }

            $freq=$ai[$position][$positi.'U'][$value];

    //print_r('</br> classId: '.$sexoId.' class: '.$position.' atribId: '.$atribId.' atrib: '.$positi);
    //print_r(' val: '.$value.' freq: '.$ai[$position][$positi.'U'][$value]);

            /** CONSULTA QUE INSERTA LAS FRECUENCIAS Y DEMÁS DATOS */
            $sql="Insert into tablaFrecuenciasSexo(classId, class, atribId, atrib, cal, freq) VALUES ('$sexoId', '$position', '$atribId', '$positi', '$value', '$freq')";
            $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());
        }


    print_r('TODO OK');

?>