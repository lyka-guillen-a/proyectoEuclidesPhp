<?php
        /** CONEXIÓN CON LA BD ...*/
        $conexion=(mysqli_connect("remotemysql.com","sLmri09wJm","NKxZsWY6Yp"));
        mysqli_select_db($conexion,'sLmri09wJm') or die ("no se encuentra la bd");

        $arrayInsertar[]=0;
        $arrayTuplas[]=0;
        /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
        $sql="SELECT `recinto`, `recintoId`, `estilo`, `estiloId`, `promedio`, `sexo`, `sexoId` FROM `recisexpromDos`";
        $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());

        $row=0;
        //Inicializo variables para calcular ai
        $fila[]=0;
        $ai[]=0;

        $aiPara[]=0;
        $aiTurri[]=0;

        //Atributos
        $aiEstilo[]=0;
        $aiProm[]=0;
        $aiSex[]=0;

        //Para las repeticiones de los valores únicos de los atributos
        $aiEstiloU[]=0;
        $aiPromU[]=0;
        $aiSexU[]=0;

        //Asigno a las clases un arreglo para cada atributo
        $aiPara=$aiEstilo;
        $aiPara=$aiProm;
        $aiPara=$aiSex;

        $aiTurri=$aiEstilo;
        $aiTurri=$aiProm;
        $aiTurri=$aiSex;

        //Asigno a las clases un arreglo para cada atributo con sus valores únicos
        $aiPara=$aiEstiloU;
        $aiPara=$aiPromU;
        $aiPara=$aiSexU;

        $aiTurri=$aiEstiloU;
        $aiTurri=$aiPromU;
        $aiTurri=$aiSexU;

        //agrego las clases al array ai
        $ai=$aiPara;
        $ai=$aiTurri;

        //Variables para calcular la cantidad de ocurrencias de cada clase (n)
        $ctPara=0;
        $ctTurri=0;

        $contador=0;
        //Selecciona los datos de la base de datos y los categoriza
        while (($row = mysqli_fetch_array($consulta , MYSQLI_ASSOC))!=NULL){
            $fila[$contador]=$row;

            //1 es Paraíso
            if($row['recintoId']==1){
                //Cuenta la cantidad de instancias a la clase
                $ctPara++;
                //Recolecta todos los valores del atributo, para esta clase
                $ai['aiPara']['aiEstilo'][$contador]=$row['estiloId'];
                $ai['aiPara']['aiProm'][$contador]=$row['promedio'];
                $ai['aiPara']['aiSex'][$contador]=$row['sexoId'];

            //2 es Turrialba
            }else  if($row['recintoId']==2){
                //Cuenta la cantidad de instancias a la clase
                $ctTurri++;
                //Recolecta todos los valores del atributo, para esta clase
                $ai['aiTurri']['aiEstilo'][$contador]=$row['estiloId'];
                $ai['aiTurri']['aiProm'][$contador]=$row['promedio'];
                $ai['aiTurri']['aiSex'][$contador]=$row['sexoId'];
            }
            $contador++;
        }

        //Valores posibles para cada atributo
            //van de 1 a 4,  son 4 posibles para estilo
            //van de 6 al 9, son 4 posibles para prom
            //van de 1 a 2, son 2 posibles para sexo

            $unicValPara[]=0; // en la pos 1, tiene los valores de estilo, en la 2 los de promedio...
            $unicValTurri[]=0;

            $unicValPara[]=array_unique($ai['aiPara']['aiEstilo']);
            $unicValPara[]=array_unique($ai['aiPara']['aiProm']);
            $unicValPara[]=array_unique($ai['aiPara']['aiSex']);

            $unicValTurri[]=array_unique($ai['aiTurri']['aiEstilo']);
            $unicValTurri[]=array_unique($ai['aiTurri']['aiProm']);
            $unicValTurri[]=array_unique($ai['aiTurri']['aiSex']);

            $probEstilo=1/4; //1/cantidad de valores posibles que pueden tomar el atributo estilo
            $probProm=1/4; //1/cantidad de valores posibles que pueden tomar el atributo promedio
            $probSex=1/2; //1/cantidad de valores posibles que pueden tomar el atributo sexo
            //m es la cantidad de atributos
            $m=3;

        //recorre cada clase, cuenta los valores distintos para cada atributo y calcula las frecuencias
        foreach ($ai as $posicion => $valor) {
            if($posicion=='aiPara'){
                //Valores para los estudiantes de Paraíso
                foreach ($ai['aiPara'] as $pos => $val) {
                    //Cuenta la cantidad de valores únicos para estilo para los estudiantes de Paraíso
                    if($pos=='aiEstilo'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValPara[1][$i])){
                                $valorContar = $unicValPara[1][$i];
                                foreach ($ai['aiPara']['aiEstilo'] as $p => $v) {
                                    if(!empty($ai['aiPara']['aiEstilo'][$p])){
                                        if($valorContar==$ai['aiPara']['aiEstilo'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase
                                $nxp=($m*$probEstilo); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctPara+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                                $ai['aiPara']['aiEstiloU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai['aiPara']['aiEstilo'])){
                                array_push($ai['aiPara']['aiEstilo'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase
                                $nxp=($m*$probEstilo); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctPara+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiPara']['aiEstiloU'][$j]=$freq;  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para promedio para los estudiantes de Paraíso
                    }else if($pos=='aiProm'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValPara[1][$i])){
                                $valorContar = $unicValPara[1][$i];
                                foreach ($ai['aiPara']['aiProm'] as $p => $v) {
                                    if(!empty($ai['aiPara']['aiProm'][$p])){
                                        if($valorContar==$ai['aiPara']['aiProm'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase
                                $nxp=($m*$probProm); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctPara+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                                $ai['aiPara']['aiPromU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai['aiPara']['aiProm'])){
                                array_push($ai['aiPara']['aiProm'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probProm); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctPara+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                                $ai['aiPara']['aiPromU'][$j]=$freq;  
                            }
                        }
                        //Cuenta la cantidad de valores únicos para sexo para los estudiantes de Paraíso
                    }else if($pos=='aiSex'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValPara[1][$i])){
                                $valorContar = $unicValPara[1][$i];
                                foreach ($ai['aiPara']['aiSex'] as $p => $v) {
                                    if(!empty($ai['aiPara']['aiSex'][$p])){
                                        if($valorContar==$ai['aiPara']['aiSex'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probSex); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctPara+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                                $ai['aiPara']['aiSexU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai['aiPara']['aiSex'])){
                                array_push($ai['aiPara']['aiSex'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probSex); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctPara+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiPara']['aiSexU'][$j]=$freq;  
                            }
                        }
                    }
                }
            }else if($posicion=='aiTurri'){
                //Valores para los estudiantes de Paraíso
                foreach ($ai['aiTurri'] as $pos => $val) {
                    //Cuenta la cantidad de valores únicos para estilo para los estudiantes de Paraíso
                    if($pos=='aiEstilo'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValTurri[1][$i])){
                                $valorContar = $unicValTurri[1][$i];
                                foreach ($ai['aiTurri']['aiEstilo'] as $p => $v) {
                                    if(!empty($ai['aiTurri']['aiEstilo'][$p])){
                                        if($valorContar==$ai['aiTurri']['aiEstilo'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probEstilo); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctTurri+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiTurri']['aiEstiloU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai['aiTurri']['aiEstilo'])){
                                array_push($ai['aiTurri']['aiEstilo'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probEstilo); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctTurri+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                            $ai['aiTurri']['aiEstiloU'][$j]=$freq;  
                            }
                        }
                        //Cuenta la cantidad de valores únicos para promedio para los estudiantes de Paraíso
                    }else if($pos=='aiProm'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValTurri[1][$i])){
                                $valorContar = $unicValTurri[1][$i];
                                foreach ($ai['aiTurri']['aiProm'] as $p => $v) {
                                    if(!empty($ai['aiTurri']['aiProm'][$p])){
                                        if($valorContar==$ai['aiTurri']['aiProm'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probProm); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctTurri+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiTurri']['aiPromU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai['aiTurri']['aiProm'])){
                                array_push($ai['aiTurri']['aiProm'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probProm); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctTurri+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                            $ai['aiTurri']['aiPromU'][$j]=$freq;  
                            }
                        }
                        //Cuenta la cantidad de valores únicos para sexo para los estudiantes de Paraíso
                    }else if($pos=='aiSex'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValTurri[1][$i])){
                                $valorContar = $unicValTurri[1][$i];
                                foreach ($ai['aiTurri']['aiSex'] as $p => $v) {
                                    if(!empty($ai['aiTurri']['aiSex'][$p])){
                                        if($valorContar==$ai['aiTurri']['aiSex'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probSex); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctTurri+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiTurri']['aiSexU'][$valorContar]=$freq; 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=1; $j <=4; $j++) { 
                            if(!in_array($j, $ai['aiTurri']['aiSex'])){
                                array_push($ai['aiTurri']['aiSex'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$probSex); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctTurri+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                            $ai['aiTurri']['aiSexU'][$j]=$freq;  
                            }
                        }
                    }
                }
            }//fin turri
        } //FIN: recorre cada clase, cuenta los valores distintos para cada atributo y calcula las frecuencias

        //quita los duplicados de las columnas que se van a insertar
        $ai['aiPara']['aiEstilo']=array_unique($ai['aiPara']['aiEstilo'], SORT_REGULAR);
        $ai['aiPara']['aiProm']=array_unique($ai['aiPara']['aiProm'], SORT_REGULAR);
        $ai['aiPara']['aiSex']=array_unique($ai['aiPara']['aiSex'], SORT_REGULAR);

        $ai['aiTurri']['aiEstilo']=array_unique($ai['aiTurri']['aiEstilo'], SORT_REGULAR);
        $ai['aiTurri']['aiProm']=array_unique($ai['aiTurri']['aiProm'], SORT_REGULAR);
        $ai['aiTurri']['aiSex']=array_unique($ai['aiTurri']['aiSex'], SORT_REGULAR);

        $recintoId=1;
        unset($ai[0]);
        //Se recorre todos los valores para insertarlos en una tabla en la BD
        foreach ($ai as $position => $clase) {
            if($position=='aiPara'){
                $recintoId=1;
            }else if($position=='aiTurri'){
                $recintoId=2;
            }
           //accede a los 6 arrays con valores (estilo, promedio, sexo, estiloU, promedioU, sexoU)
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
                }else if($positi=='aiSex' || $positi=='aiSexU'){
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
                    if($indic!='aiEstiloU'&& $indic!='aiPromU'&& $indic!='aiSexU'){
                        if(!empty($ai[$indice][$indic.'U'][$ind])){

/*
                            print_r('</br>indice: '.$indice.'');
                            print_r(' indic: '.$indic);
                            print_r(' ind: '.$ind);
                            print_r(' valor: '.$aso);
                            print_r(' freq: '.$ai[$indice][$indic.'U'][$ind]);
*/                           
        
                            array_push($arrayTuplas, array( 
                                "recinto" => $indice, 
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
            
            $position=$valu['recinto'];
            $positi=$valu['atrib'];
            $value=$valu['val'];
            $freq=$valu['freq'];

            //decodifica y asigna Id a los atributos
            if($position=='aiPara'){
                $recintoId=1;
            }else if($position=='aiTurri'){
                $recintoId=2;
            }

            if($positi=='aiEstilo'){
                $atribId=1;
            }else if($positi=='aiProm'){
                $atribId=2;
            }else if($positi=='aiSex'){
                $atribId=3;
            }

            $freq=$ai[$position][$positi.'U'][$value];

//    print_r('</br> classId: '.$recintoId.' class: '.$position.' atribId: '.$atribId.' atrib: '.$positi);
//    print_r(' val: '.$value.' freq: '.$ai[$position][$positi.'U'][$value]);

            /** CONSULTA QUE INSERTA LAS FRECUENCIAS Y DEMÁS DATOS */
            $sql="Insert into tablaFrecuenciasRecinto(classId, class, atribId, atrib, cal, freq) VALUES ('$recintoId', '$position', '$atribId', '$positi', '$value', '$freq')";
            $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());
        }


    print_r('TODO OK');

?>