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

    $aiAcom[]=0;
    $aiAsim[]=0;
    $aiConv[]=0;
    $aiDiv[]=0;

    //Atributos
    $aiRec[]=0;
    $aiProm[]=0;
    $aiSex[]=0;

    //Para las repeticiones de los valores únicos de los atributos
    $aiRecU[]=0;
    $aiPromU[]=0;
    $aiSexU[]=0;

    //Asigno a las clases un arreglo para cada atributo
    $aiAcom=$aiRec;
    $aiAcom=$aiProm;
    $aiAcom=$aiSex;

    $aiAsim=$aiRec;
    $aiAsim=$aiProm;
    $aiAsim=$aiSex;

    $aiConv=$aiRec;
    $aiConv=$aiProm;
    $aiConv=$aiSex;

    $aiDiv=$aiRec;
    $aiDiv=$aiProm;
    $aiDiv=$aiSex;

    //Asigno a las clases un arreglo para cada atributo con sus valores únicos
    $aiAcom=$aiRecU;
    $aiAcom=$aiPromU;
    $aiAcom=$aiSexU;

    $aiAsim=$aiRecU;
    $aiAsim=$aiPromU;
    $aiAsim=$aiSexU;

    $aiConv=$aiRecU;
    $aiConv=$aiPromU;
    $aiConv=$aiSexU;

    $aiDiv=$aiRecU;
    $aiDiv=$aiPromU;
    $aiDiv=$aiSexU;

    //agrego las clases al array ai
    $ai=$aiAcom;
    $ai=$aiAsim;
    $ai=$aiConv;
    $ai=$aiDiv;

    //Variables para calcular la cantidad de ocurrencias de cada clase (n)
    $ctAcom=0;
    $ctAsim=0;
    $ctConv=0;
    $ctDiv=0;

    $contador=0;
    //Selecciona los datos de la base de datos y los categoriza
    while (($row = mysqli_fetch_array($consulta , MYSQLI_ASSOC))!=NULL){
        $fila[$contador]=$row;

        //1 es acomodador
        if($row['estiloId']==1){
            //Cuenta la cantidad de instancias a la clase
            $ctAcom++;
            //Recolecta todos los valores del atributo, para esta clase
            $ai['aiAcom']['aiRec'][$contador]=$row['recinto'];
            $ai['aiAcom']['aiProm'][$contador]=$row['promedio'];
            $ai['aiAcom']['aiSex'][$contador]=$row['sexo'];

        //2 es asimilador
        }else  if($row['estiloId']==2){
            //Cuenta la cantidad de instancias a la clase
            $ctAsim++;
            //Recolecta todos los valores del atributo, para esta clase
            $ai['aiAsim']['aiRec'][$contador]=$row['recinto'];
            $ai['aiAsim']['aiProm'][$contador]=$row['promedio'];
            $ai['aiAsim']['aiSex'][$contador]=$row['sexo'];

        //3 es convergente
        }else  if($row['estiloId']==3){
            //Cuenta la cantidad de instancias a la clase
            $ctConv++;
            //Recolecta todos los valores del atributo, para esta clase
            $ai['aiConv']['aiRec'][$contador]=$row['recinto'];
            $ai['aiConv']['aiProm'][$contador]=$row['promedio'];
            $ai['aiConv']['aiSex'][$contador]=$row['sexo'];

        //4 es divergente
        }else  if($row['estiloId']==4){
            //Cuenta la cantidad de instancias a la clase
            $ctDiv++;
            //Recolecta todos los valores del atributo, para esta clase
            $ai['aiDiv']['aiRec'][$contador]=$row['recinto'];
            $ai['aiDiv']['aiProm'][$contador]=$row['promedio'];
            $ai['aiDiv']['aiSex'][$contador]=$row['sexo'];

        }

        $contador++;
    }

    //Valores posibles para cada atributo
    //van de 6 al 24, son 18 posibles
    $unicValAcom[]=0; // en la pos 1, tiene los valores de Rec , pos 2 valores de Prom... 
    $unicValAsim[]=0;
    $unicValConv[]=0;
    $unicValDiv[]=0;

    $unicValAcom[]=array_unique($ai['aiAcom']['aiRec']);
    $unicValAcom[]=array_unique($ai['aiAcom']['aiProm']);
    $unicValAcom[]=array_unique($ai['aiAcom']['aiSex']);

    $unicValAsim[]=array_unique($ai['aiAsim']['aiRec']);
    $unicValAsim[]=array_unique($ai['aiAsim']['aiProm']);
    $unicValAsim[]=array_unique($ai['aiAsim']['aiSex']);

    $unicValConv[]=array_unique($ai['aiConv']['aiRec']);
    $unicValConv[]=array_unique($ai['aiConv']['aiProm']);
    $unicValConv[]=array_unique($ai['aiConv']['aiSex']);

    $unicValDiv[]=array_unique($ai['aiDiv']['aiRec']);
    $unicValDiv[]=array_unique($ai['aiDiv']['aiProm']);
    $unicValDiv[]=array_unique($ai['aiDiv']['aiSex']);

    $probRec=1/2; 
    $probProm=1/4; 
    $probSex=1/2; 
    //1/cantidad de valores posibles que pueden tomar los atributos Rec, Prom, Sex
    //m es la cantidad de atributos
    $m=4;

//recorre cada clase, cuenta los valores distintos para cada atributo y calcula las frecuencias
foreach ($ai as $posicion => $valor) {
    if($posicion=='aiAcom'){
        //Valores para los ACOMODADORES
        foreach ($ai['aiAcom'] as $pos => $val) {
            //Cuenta la cantidad de valores únicos para Rec para los acomodadores  
            if($pos=='aiRec'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiAcom']['aiRec'] as $p => $v) {
                            if(!empty($ai['aiAcom']['aiRec'][$p])){
                                if($valorContar==$ai['aiAcom']['aiRec'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probRec); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                        $ai['aiAcom']['aiRecU'][$valorContar]=round($freq,6); 
                    }
                }
                //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiAcom']['aiRec'])){
                        array_push($ai['aiAcom']['aiRec'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probRec); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiAcom']['aiRecU'][$j]=round($freq,6);  
                    }
                }
            //Cuenta la cantidad de valores únicos para Prom para los acomodadores  
            }else if($pos=='aiProm'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiAcom']['aiProm'] as $p => $v) {
                            if(!empty($ai['aiAcom']['aiProm'][$p])){
                                if($valorContar==$ai['aiAcom']['aiProm'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probProm); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                        $ai['aiAcom']['aiPromU'][$valorContar]=round($freq,6);  
                    }
                }
                //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiAcom']['aiProm'])){
                        array_push($ai['aiAcom']['aiProm'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probProm); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiAcom']['aiPromU'][$j]=round($freq,6);  
                    }
                }
            //Cuenta la cantidad de valores únicos para Sex para los acomodadores  
            }else if($pos=='aiSex'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiAcom']['aiSex'] as $p => $v) {
                            if(!empty($ai['aiAcom']['aiSex'][$p])){
                                if($valorContar==$ai['aiAcom']['aiSex'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probSex); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                        $ai['aiAcom']['aiSexU'][$valorContar]=round($freq,6);  
                    }
                }
                //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiAcom']['aiSex'])){
                        array_push($ai['aiAcom']['aiSex'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probSex); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiAcom']['aiSexU'][$j]=round($freq,6);  
                    }
                }  
            //Cuenta la cantidad de valores únicos para OR para los acomodadores  
            }
        }
    }else if($posicion=='aiAsim'){
        //Valores para los ACOMODADORES
        foreach ($ai['aiAsim'] as $pos => $val) {
            //Cuenta la cantidad de valores únicos para Rec para los acomodadores  
            if($pos=='aiRec'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiAsim']['aiRec'] as $p => $v) {
                            if(!empty($ai['aiAsim']['aiRec'][$p])){
                                if($valorContar==$ai['aiAsim']['aiRec'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probRec); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                        $ai['aiAsim']['aiRecU'][$valorContar]=round($freq,6);  
                    }
                }
                 //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                 for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiAsim']['aiRec'])){
                        array_push($ai['aiAsim']['aiRec'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probRec); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiAsim']['aiRecU'][$j]=round($freq,6);  
                    }
                }
                
            //Cuenta la cantidad de valores únicos para Prom para los acomodadores  
            }else if($pos=='aiProm'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiAsim']['aiProm'] as $p => $v) {
                            if(!empty($ai['aiAsim']['aiProm'][$p])){
                                if($valorContar==$ai['aiAsim']['aiProm'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probProm); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                        $ai['aiAsim']['aiPromU'][$valorContar]=round($freq,6);  
                    }
                }
                //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiAsim']['aiProm'])){
                        array_push($ai['aiAsim']['aiProm'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probProm); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiAsim']['aiPromU'][$j]=round($freq,6);  
                    }
                }
            //Cuenta la cantidad de valores únicos para Sex para los acomodadores  
            }else if($pos=='aiSex'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiAsim']['aiSex'] as $p => $v) {
                            if(!empty($ai['aiAsim']['aiSex'][$p])){
                                if($valorContar==$ai['aiAsim']['aiSex'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probSex); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                        $ai['aiAsim']['aiSexU'][$valorContar]=round($freq,6);   
                    }
                }
                //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiAsim']['aiSex'])){
                        array_push($ai['aiAsim']['aiSex'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probSex); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiAsim']['aiSexU'][$j]=round($freq,6);  
                    }
                }
            //Cuenta la cantidad de valores únicos para OR para los acomodadores  
            }
        }
    }else if($posicion=='aiConv'){
        //Valores para los ACOMODADORES
        foreach ($ai['aiConv'] as $pos => $val) {
            //Cuenta la cantidad de valores únicos para Rec para los acomodadores  
            if($pos=='aiRec'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiConv']['aiRec'] as $p => $v) {
                            if(!empty($ai['aiConv']['aiRec'][$p])){
                                if($valorContar==$ai['aiConv']['aiRec'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probRec); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 
                 
                        $ai['aiConv']['aiRecU'][$valorContar]=round($freq,6);   
                    }
                }
                //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiConv']['aiRec'])){
                        array_push($ai['aiConv']['aiRec'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probRec); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiConv']['aiRecU'][$j]=round($freq,6);  
                    }
                }
            //Cuenta la cantidad de valores únicos para Prom para los acomodadores  
            }else if($pos=='aiProm'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiConv']['aiProm'] as $p => $v) {
                            if(!empty($ai['aiConv']['aiProm'][$p])){
                                if($valorContar==$ai['aiConv']['aiProm'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probProm); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 
                 
                        $ai['aiConv']['aiPromU'][$valorContar]=round($freq,6);    
                    }
                }
                //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiConv']['aiProm'])){
                        array_push($ai['aiConv']['aiProm'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probProm); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiConv']['aiPromU'][$j]=round($freq,6);  
                    }
                }
            //Cuenta la cantidad de valores únicos para Sex para los acomodadores  
            }else if($pos=='aiSex'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiConv']['aiSex'] as $p => $v) {
                            if(!empty($ai['aiConv']['aiSex'][$p])){
                                if($valorContar==$ai['aiConv']['aiSex'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probSex); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                        $ai['aiConv']['aiSexU'][$valorContar]=round($freq,6);
                    }
                }
                //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiConv']['aiSex'])){
                        array_push($ai['aiConv']['aiSex'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probSex); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiConv']['aiSexU'][$j]=round($freq,6);  
                    }
                }
            //Cuenta la cantidad de valores únicos para OR para los acomodadores  
            }
        }
    }else if($posicion=='aiDiv'){
        //Valores para los Divergentes
        foreach ($ai['aiDiv'] as $pos => $val) {
            //Cuenta la cantidad de valores únicos para Rec para los Divergentes  
            if($pos=='aiRec'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiDiv']['aiRec'] as $p => $v) {
                            if(!empty($ai['aiDiv']['aiRec'][$p])){
                                if($valorContar==$ai['aiDiv']['aiRec'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probRec); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                        $ai['aiDiv']['aiRecU'][$valorContar]=round($freq,6);
                    }
                }
                 //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiDiv']['aiRec'])){
                        array_push($ai['aiDiv']['aiRec'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probRec); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiDiv']['aiRecU'][$j]=round($freq,6);  
                    }
                }
            //Cuenta la cantidad de valores únicos para Prom para los Divergentes  
            }else if($pos=='aiProm'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiDiv']['aiProm'] as $p => $v) {
                            if(!empty($ai['aiDiv']['aiProm'][$p])){
                                if($valorContar==$ai['aiDiv']['aiProm'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                         //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probProm); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                        $ai['aiDiv']['aiPromU'][$valorContar]=round($freq,6);
                    }
                }
                  //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiDiv']['aiProm'])){
                        array_push($ai['aiDiv']['aiProm'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probProm); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiDiv']['aiPromU'][$j]=round($freq,6);  
                    }
                }
            //Cuenta la cantidad de valores únicos para Sex para los Divergentes  
            }else if($pos=='aiSex'){
                $valorContar=0;
                for ($i=0; $i < 225; $i++) { 
                    $repeticiones=0;
                    if(!empty($unicValAcom[1][$i])){
                        $valorContar = $unicValAcom[1][$i];
                        foreach ($ai['aiDiv']['aiSex'] as $p => $v) {
                            if(!empty($ai['aiDiv']['aiSex'][$p])){
                                if($valorContar==$ai['aiDiv']['aiSex'][$p]){
                                    $repeticiones++;
                                }
                            }
                        }
                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probSex); 
                        $ncplusnxp=$repeticiones+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                        $ai['aiDiv']['aiSexU'][$valorContar]=round($freq,6);
                    }
                }
                //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                for ($j=6; $j <=29; $j++) { 
                    if(!in_array($j, $ai['aiDiv']['aiSex'])){
                        array_push($ai['aiDiv']['aiSex'], $j.'');

                        //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                        $nxp=($m*$probSex); 
                        $ncplusnxp=0+$nxp; 
                        $nplusm=($ctDiv+$m); 
                        $freq=($ncplusnxp/$nplusm); 

                     $ai['aiDiv']['aiSexU'][$j]=round($freq,6);  
                    }
                }
            //Cuenta la cantidad de valores únicos para OR para los Divergentes  
            }
        }
    }
}

//quita los duplicados de las columnas que se van a insertar
$ai['aiAcom']['aiRec']=array_unique($ai['aiAcom']['aiRec'], SORT_REGULAR);
$ai['aiAcom']['aiProm']=array_unique($ai['aiAcom']['aiProm'], SORT_REGULAR);
$ai['aiAcom']['aiSex']=array_unique($ai['aiAcom']['aiSex'], SORT_REGULAR);

$ai['aiAsim']['aiRec']=array_unique($ai['aiAsim']['aiRec'], SORT_REGULAR);
$ai['aiAsim']['aiProm']=array_unique($ai['aiAsim']['aiProm'], SORT_REGULAR);
$ai['aiAsim']['aiSex']=array_unique($ai['aiAsim']['aiSex'], SORT_REGULAR);

$ai['aiConv']['aiRec']=array_unique($ai['aiConv']['aiRec'], SORT_REGULAR);
$ai['aiConv']['aiProm']=array_unique($ai['aiConv']['aiProm'], SORT_REGULAR);
$ai['aiConv']['aiSex']=array_unique($ai['aiConv']['aiSex'], SORT_REGULAR);

$ai['aiDiv']['aiRec']=array_unique($ai['aiDiv']['aiRec'], SORT_REGULAR);
$ai['aiDiv']['aiProm']=array_unique($ai['aiDiv']['aiProm'], SORT_REGULAR);
$ai['aiDiv']['aiSex']=array_unique($ai['aiDiv']['aiSex'], SORT_REGULAR);

//var_dump($ai);
$estiloId=1;

unset($ai[0]);
//Se recorre todos los valores para insertarlos en una tabla en la BD


foreach ($ai as $position => $clase) {
    if($position=='aiAcom'){
        $estiloId=1;
    }else if($position=='aiAsim'){
        $estiloId=2;
    }else if($position=='aiConv'){
        $estiloId=3;
    }else if($position=='aiDiv'){
        $estiloId=4;
    } 

   //accede a los 6 arrays con valores (estilo, promedio, recinto, estiloU, promedioU, recintoU)
    foreach ($ai[$position] as $positi => $atributo) {

        if($positi=='aiSex' || $positi=='aiSexU'){
        //rellena con 0, los valores vaciós en el arreglo
            for ($x=1; $x <=2 ; $x++) { 
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
            if($indic!='aiSexU'&& $indic!='aiPromU'&& $indic!='aiRecU'){
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

$arrayTuplas=array_unique($arrayTuplas, SORT_REGULAR);

foreach ($arrayTuplas as $posi => $valu) {
            
    $position=$valu['class'];
    $positi=$valu['atrib'];
    $value=$valu['val'];
    $freq=$valu['freq'];

    //decodifica y asigna Id a los atributos
    if($position=='iAcom'){
        $estiloId=1;
    }else if($position=='aiAsim'){
        $estiloId=2;
    }else if($position=='aiConv'){
        $estiloId=3;
    }else if($position=='aiDiv'){
        $estiloId=4;
    }

    if($positi=='aiSex'){
        $atribId=1;
    }else if($positi=='aiProm'){
        $atribId=2;
    }else if($positi=='aiRec'){
        $atribId=3;
    }

    if($value=='Paraiso'){
        $value=1;
    }else if($value=='Turrialba'){
        $value=2;
    }

    //$freq=$ai[$position][$positi.'U'][$value];


    //print_r('</br> classId: '.$estiloId.' class: '.$position.' atribId: '.$atribId.' atrib: '.$positi);
    //print_r(' val: '.$value.' freq: '.$freq);
    
    /** CONSULTA QUE INSERTA LAS FRECUENCIAS Y DEMÁS DATOS */
    $sql="Insert into tablaFrecuenciasEstiloDos(classId, class, atribId, atrib, cal, freq) VALUES ('$estiloId', '$position', '$atribId', '$positi', '$value', '$freq')";
    $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());

    $value=0;
}
//var_dump($ai);
print_r('TODO OK');


?>