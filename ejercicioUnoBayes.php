<?php
// AQUÍ SE ENCUENTRA EL CÓDIGO UTILIZADO, PARA CALCULAR LAS FRECUENCIAS DEL EJERCICIO 3.1
        /** CONEXIÓN CON LA BD ...*/
        $conexion=(mysqli_connect("remotemysql.com","sLmri09wJm","NKxZsWY6Yp"));
        mysqli_select_db($conexion,'sLmri09wJm') or die ("no se encuentra la bd");

        $arrayInsertar[]=0;
        $arrayTuplas[]=0;
            /** CONSULTA QUE TRAE LOS DATOS A EVALUAR */
            $sql="SELECT CA, EC, EA, ORR, recintoId, estiloId, estilo FROM recintoestilo";
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
            $aiCA[]=0;
            $aiEC[]=0;
            $aiEA[]=0;
            $aiORR[]=0;

            //Para las repeticiones de los valores únicos de los atributos
            $aiCAU[]=0;
            $aiECU[]=0;
            $aiEAU[]=0;
            $aiORRU[]=0;

            //Asigno a las clases un arreglo para cada atributo
            $aiAcom=$aiCA;
            $aiAcom=$aiEC;
            $aiAcom=$aiEA;
            $aiAcom=$aiORR;

            $aiAsim=$aiCA;
            $aiAsim=$aiEC;
            $aiAsim=$aiEA;
            $aiAsim=$aiORR;

            $aiConv=$aiCA;
            $aiConv=$aiEC;
            $aiConv=$aiEA;
            $aiConv=$aiORR;

            $aiDiv=$aiCA;
            $aiDiv=$aiEC;
            $aiDiv=$aiEA;
            $aiDiv=$aiORR;

            //Asigno a las clases un arreglo para cada atributo con sus valores únicos
            $aiAcom=$aiCAU;
            $aiAcom=$aiECU;
            $aiAcom=$aiEAU;
            $aiAcom=$aiORRU;

            $aiAsim=$aiCAU;
            $aiAsim=$aiECU;
            $aiAsim=$aiEAU;
            $aiAsim=$aiORRU;

            $aiConv=$aiCAU;
            $aiConv=$aiECU;
            $aiConv=$aiEAU;
            $aiConv=$aiORRU;

            $aiDiv=$aiCAU;
            $aiDiv=$aiECU;
            $aiDiv=$aiEAU;
            $aiDiv=$aiORRU;
    
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
                    $ai['aiAcom']['aiCA'][$contador]=$row['CA'];
                    $ai['aiAcom']['aiEC'][$contador]=$row['EC'];
                    $ai['aiAcom']['aiEA'][$contador]=$row['EA'];
                    $ai['aiAcom']['aiORR'][$contador]=$row['ORR'];

                //2 es asimilador
                }else  if($row['estiloId']==2){
                    //Cuenta la cantidad de instancias a la clase
                    $ctAsim++;
                    //Recolecta todos los valores del atributo, para esta clase
                    $ai['aiAsim']['aiCA'][$contador]=$row['CA'];
                    $ai['aiAsim']['aiEC'][$contador]=$row['EC'];
                    $ai['aiAsim']['aiEA'][$contador]=$row['EA'];
                    $ai['aiAsim']['aiORR'][$contador]=$row['ORR'];

                //3 es convergente
                }else  if($row['estiloId']==3){
                    //Cuenta la cantidad de instancias a la clase
                    $ctConv++;
                    //Recolecta todos los valores del atributo, para esta clase
                    $ai['aiConv']['aiCA'][$contador]=$row['CA'];
                    $ai['aiConv']['aiEC'][$contador]=$row['EC'];
                    $ai['aiConv']['aiEA'][$contador]=$row['EA'];
                    $ai['aiConv']['aiORR'][$contador]=$row['ORR'];

                //4 es divergente
                }else  if($row['estiloId']==4){
                    //Cuenta la cantidad de instancias a la clase
                    $ctDiv++;
                    //Recolecta todos los valores del atributo, para esta clase
                    $ai['aiDiv']['aiCA'][$contador]=$row['CA'];
                    $ai['aiDiv']['aiEC'][$contador]=$row['EC'];
                    $ai['aiDiv']['aiEA'][$contador]=$row['EA'];
                    $ai['aiDiv']['aiORR'][$contador]=$row['ORR'];

                }

                $contador++;
            }

            //Valores posibles para cada atributo
            //van de 6 al 24, son 18 posibles
            $unicValAcom[]=0; // en la pos 1, tiene los valores de CA , pos 2 valores de EC... 
            $unicValAsim[]=0;
            $unicValConv[]=0;
            $unicValDiv[]=0;

            $unicValAcom[]=array_unique($ai['aiAcom']['aiCA']);
            $unicValAcom[]=array_unique($ai['aiAcom']['aiEC']);
            $unicValAcom[]=array_unique($ai['aiAcom']['aiEA']);
            $unicValAcom[]=array_unique($ai['aiAcom']['aiORR']);

            $unicValAsim[]=array_unique($ai['aiAsim']['aiCA']);
            $unicValAsim[]=array_unique($ai['aiAsim']['aiEC']);
            $unicValAsim[]=array_unique($ai['aiAsim']['aiEA']);
            $unicValAsim[]=array_unique($ai['aiAsim']['aiORR']);

            $unicValConv[]=array_unique($ai['aiConv']['aiCA']);
            $unicValConv[]=array_unique($ai['aiConv']['aiEC']);
            $unicValConv[]=array_unique($ai['aiConv']['aiEA']);
            $unicValConv[]=array_unique($ai['aiConv']['aiORR']);

            $unicValDiv[]=array_unique($ai['aiDiv']['aiCA']);
            $unicValDiv[]=array_unique($ai['aiDiv']['aiEC']);
            $unicValDiv[]=array_unique($ai['aiDiv']['aiEA']);
            $unicValDiv[]=array_unique($ai['aiDiv']['aiORR']);

            $prob=1/18; //1/cantidad de valores posibles que pueden tomar los atributos CA, EC, EA, OR
            //m es la cantidad de atributos
            $m=4;

        //recorre cada clase, cuenta los valores distintos para cada atributo y calcula las frecuencias
        foreach ($ai as $posicion => $valor) {
            if($posicion=='aiAcom'){
                //Valores para los ACOMODADORES
                foreach ($ai['aiAcom'] as $pos => $val) {
                    //Cuenta la cantidad de valores únicos para CA para los acomodadores  
                    if($pos=='aiCA'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiAcom']['aiCA'] as $p => $v) {
                                    if(!empty($ai['aiAcom']['aiCA'][$p])){
                                        if($valorContar==$ai['aiAcom']['aiCA'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                                $ai['aiAcom']['aiCAU'][$valorContar]=round($freq,6); 
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiAcom']['aiCA'])){
                                array_push($ai['aiAcom']['aiCA'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiAcom']['aiCAU'][$j]=round($freq,6);  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para EC para los acomodadores  
                    }else if($pos=='aiEC'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiAcom']['aiEC'] as $p => $v) {
                                    if(!empty($ai['aiAcom']['aiEC'][$p])){
                                        if($valorContar==$ai['aiAcom']['aiEC'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
 
                                $ai['aiAcom']['aiECU'][$valorContar]=round($freq,6);  
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiAcom']['aiEC'])){
                                array_push($ai['aiAcom']['aiEC'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiAcom']['aiECU'][$j]=round($freq,6);  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para EA para los acomodadores  
                    }else if($pos=='aiEA'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiAcom']['aiEA'] as $p => $v) {
                                    if(!empty($ai['aiAcom']['aiEA'][$p])){
                                        if($valorContar==$ai['aiAcom']['aiEA'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
 
                                $ai['aiAcom']['aiEAU'][$valorContar]=round($freq,6);  
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiAcom']['aiEA'])){
                                array_push($ai['aiAcom']['aiEA'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiAcom']['aiEAU'][$j]=round($freq,6);  
                            }
                        }  
                    //Cuenta la cantidad de valores únicos para OR para los acomodadores  
                    }else if($pos=='aiORR'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiAcom']['aiORR'] as $p => $v) {
                                    if(!empty($ai['aiAcom']['aiORR'][$p])){
                                        if($valorContar==$ai['aiAcom']['aiORR'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
 
                                $ai['aiAcom']['aiORRU'][$valorContar]=round($freq,6);  
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiAcom']['aiORR'])){
                                array_push($ai['aiAcom']['aiORR'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiAcom']['aiORRU'][$j]=round($freq,6);  
                            }
                        }
                    }
                }
            }else if($posicion=='aiAsim'){
                //Valores para los ACOMODADORES
                foreach ($ai['aiAsim'] as $pos => $val) {
                    //Cuenta la cantidad de valores únicos para CA para los acomodadores  
                    if($pos=='aiCA'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiAsim']['aiCA'] as $p => $v) {
                                    if(!empty($ai['aiAsim']['aiCA'][$p])){
                                        if($valorContar==$ai['aiAsim']['aiCA'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
 
                                $ai['aiAsim']['aiCAU'][$valorContar]=round($freq,6);  
                            }
                        }
                         //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                         for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiAsim']['aiCA'])){
                                array_push($ai['aiAsim']['aiCA'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiAsim']['aiCAU'][$j]=round($freq,6);  
                            }
                        }
                        
                    //Cuenta la cantidad de valores únicos para EC para los acomodadores  
                    }else if($pos=='aiEC'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiAsim']['aiEC'] as $p => $v) {
                                    if(!empty($ai['aiAsim']['aiEC'][$p])){
                                        if($valorContar==$ai['aiAsim']['aiEC'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiAsim']['aiECU'][$valorContar]=round($freq,6);  
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiAsim']['aiEC'])){
                                array_push($ai['aiAsim']['aiEC'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiAsim']['aiECU'][$j]=round($freq,6);  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para EA para los acomodadores  
                    }else if($pos=='aiEA'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiAsim']['aiEA'] as $p => $v) {
                                    if(!empty($ai['aiAsim']['aiEA'][$p])){
                                        if($valorContar==$ai['aiAsim']['aiEA'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiAsim']['aiEAU'][$valorContar]=round($freq,6);   
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiAsim']['aiEA'])){
                                array_push($ai['aiAsim']['aiEA'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiAsim']['aiEAU'][$j]=round($freq,6);  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para OR para los acomodadores  
                    }else if($pos=='aiORR'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiAsim']['aiORR'] as $p => $v) {
                                    if(!empty($ai['aiAsim']['aiORR'][$p])){
                                        if($valorContar==$ai['aiAsim']['aiORR'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                 //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                 $nxp=($m*$prob); 
                                 $ncplusnxp=$repeticiones+$nxp; 
                                 $nplusm=($ctDiv+$m); 
                                 $freq=($ncplusnxp/$nplusm); 
                          
                                $ai['aiAsim']['aiORRU'][$valorContar]=round($freq,6);   
                            }
                        }
                        for ($j=6; $j <=28; $j++) { 
                            if(empty($ai['aiAsim']['aiORRU'][$j])){
                                    //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                    $nxp=($m*$prob); 
                                    $ncplusnxp=0+$nxp; 
                                    $nplusm=($ctDiv+$m); 
                                    $freq=($ncplusnxp/$nplusm); 
        
                                    $ai['aiAsim']['aiORRU'][$j]=round($freq,6);  
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiAsim']['aiORR'])){
                                array_push($ai['aiAsim']['aiORR'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiAsim']['aiORRU'][$j]=round($freq,6);  
                            }
                        }
                    }
                }
            }else if($posicion=='aiConv'){
                //Valores para los ACOMODADORES
                foreach ($ai['aiConv'] as $pos => $val) {
                    //Cuenta la cantidad de valores únicos para CA para los acomodadores  
                    if($pos=='aiCA'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiConv']['aiCA'] as $p => $v) {
                                    if(!empty($ai['aiConv']['aiCA'][$p])){
                                        if($valorContar==$ai['aiConv']['aiCA'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
                         
                                $ai['aiConv']['aiCAU'][$valorContar]=round($freq,6);   
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiConv']['aiCA'])){
                                array_push($ai['aiConv']['aiCA'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiConv']['aiCAU'][$j]=round($freq,6);  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para EC para los acomodadores  
                    }else if($pos=='aiEC'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiConv']['aiEC'] as $p => $v) {
                                    if(!empty($ai['aiConv']['aiEC'][$p])){
                                        if($valorContar==$ai['aiConv']['aiEC'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
                         
                                $ai['aiConv']['aiECU'][$valorContar]=round($freq,6);    
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiConv']['aiEC'])){
                                array_push($ai['aiConv']['aiEC'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiConv']['aiECU'][$j]=round($freq,6);  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para EA para los acomodadores  
                    }else if($pos=='aiEA'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiConv']['aiEA'] as $p => $v) {
                                    if(!empty($ai['aiConv']['aiEA'][$p])){
                                        if($valorContar==$ai['aiConv']['aiEA'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiConv']['aiEAU'][$valorContar]=round($freq,6);
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiConv']['aiEA'])){
                                array_push($ai['aiConv']['aiEA'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiConv']['aiEAU'][$j]=round($freq,6);  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para OR para los acomodadores  
                    }else if($pos=='aiORR'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiConv']['aiORR'] as $p => $v) {
                                    if(!empty($ai['aiConv']['aiORR'][$p])){
                                        if($valorContar==$ai['aiConv']['aiORR'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiConv']['aiORRU'][$valorContar]=round($freq,6);
                            }
                        }
                         //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                         for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiConv']['aiORR'])){
                                array_push($ai['aiConv']['aiORR'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiConv']['aiORRU'][$j]=round($freq,6);  
                            }
                        }
                    }
                }
            }else if($posicion=='aiDiv'){
                //Valores para los Divergentes
                foreach ($ai['aiDiv'] as $pos => $val) {
                    //Cuenta la cantidad de valores únicos para CA para los Divergentes  
                    if($pos=='aiCA'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiDiv']['aiCA'] as $p => $v) {
                                    if(!empty($ai['aiDiv']['aiCA'][$p])){
                                        if($valorContar==$ai['aiDiv']['aiCA'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiDiv']['aiCAU'][$valorContar]=round($freq,6);
                            }
                        }
                         //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiDiv']['aiCA'])){
                                array_push($ai['aiDiv']['aiCA'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             $ai['aiDiv']['aiCAU'][$j]=round($freq,6);  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para EC para los Divergentes  
                    }else if($pos=='aiEC'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiDiv']['aiEC'] as $p => $v) {
                                    if(!empty($ai['aiDiv']['aiEC'][$p])){
                                        if($valorContar==$ai['aiDiv']['aiEC'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                 //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiDiv']['aiECU'][$valorContar]=round($freq,6);
                            }
                        }
                          //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiDiv']['aiEC'])){
                                array_push($ai['aiDiv']['aiEC'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             //   $ai['aiDiv']['aiORR']=$j;
                             $ai['aiDiv']['aiECU'][$j]=round($freq,6);  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para EA para los Divergentes  
                    }else if($pos=='aiEA'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiDiv']['aiEA'] as $p => $v) {
                                    if(!empty($ai['aiDiv']['aiEA'][$p])){
                                        if($valorContar==$ai['aiDiv']['aiEA'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=$repeticiones+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 

                                $ai['aiDiv']['aiEAU'][$valorContar]=round($freq,6);
                            }
                        }
                        //Agrega los atributos faltantes y les calcula su frecuencia en base a 0 repeticiones
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiDiv']['aiEA'])){
                                array_push($ai['aiDiv']['aiEA'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             //   $ai['aiDiv']['aiORR']=$j;
                             $ai['aiDiv']['aiEAU'][$j]=round($freq,6);  
                            }
                        }
                    //Cuenta la cantidad de valores únicos para OR para los Divergentes  
                    }else if($pos=='aiORR'){
                        $valorContar=0;
                        for ($i=0; $i < 225; $i++) { 
                            $repeticiones=0;
                            if(!empty($unicValAcom[1][$i])){
                                $valorContar = $unicValAcom[1][$i];
                                foreach ($ai['aiDiv']['aiORR'] as $p => $v) {
                                    if(!empty($ai['aiDiv']['aiORR'][$p])){
                                        if($valorContar==$ai['aiDiv']['aiORR'][$p]){
                                            $repeticiones++;
                                        }
                                    }
                                }
                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                //print_r('</br> Valor: '.$valorContar);
                                $nxp=($m*$prob); //print_r(' (m*p): '.$nxp);
                                $ncplusnxp=$repeticiones+$nxp; //print_r(' (m*p): '.$ncplusnxp);
                                $nplusm=($ctDiv+$m); //print_r(' (n+m): '.$nplusm);
                                $freq=($ncplusnxp/$nplusm); //print_r(' (nc+(m*p))/(n+m): '.$freq);

                                $ai['aiDiv']['aiORRU'][$valorContar]=round($freq,6);
                                //print_r('</br> valor: '.$valorContar.' nc: '.$repeticiones.' m: '.$m.' p: '.$prob.' n: '.$ctDiv.' m: '.$m.' frecuencia: '.round($freq,6));
                                //print_r('</br>'.round($freq,6));
                                
                            }
                        }
                        for ($j=6; $j <=29; $j++) { 
                            if(!in_array($j, $ai['aiDiv']['aiORR'])){
                                array_push($ai['aiDiv']['aiORR'], $j.'');

                                //calcula la frecuencia para cada atributo de la clase, redondeado a 6 dígitos
                                $nxp=($m*$prob); 
                                $ncplusnxp=0+$nxp; 
                                $nplusm=($ctDiv+$m); 
                                $freq=($ncplusnxp/$nplusm); 
    
                             //   $ai['aiDiv']['aiORR']=$j;
                             $ai['aiDiv']['aiORRU'][$j]=round($freq,6);  
                            }
                        }
                    }
                }
            }
        }

        //quita los duplicados de las columnas que se van a insertar
        $ai['aiAcom']['aiCA']=array_unique($ai['aiAcom']['aiCA'], SORT_REGULAR);
        $ai['aiAcom']['aiEC']=array_unique($ai['aiAcom']['aiEC'], SORT_REGULAR);
        $ai['aiAcom']['aiEA']=array_unique($ai['aiAcom']['aiEA'], SORT_REGULAR);
        $ai['aiAcom']['aiORR']=array_unique($ai['aiAcom']['aiORR'], SORT_REGULAR);

        $ai['aiAsim']['aiCA']=array_unique($ai['aiAsim']['aiCA'], SORT_REGULAR);
        $ai['aiAsim']['aiEC']=array_unique($ai['aiAsim']['aiEC'], SORT_REGULAR);
        $ai['aiAsim']['aiEA']=array_unique($ai['aiAsim']['aiEA'], SORT_REGULAR);
        $ai['aiAsim']['aiORR']=array_unique($ai['aiAsim']['aiORR'], SORT_REGULAR);

        $ai['aiConv']['aiCA']=array_unique($ai['aiConv']['aiCA'], SORT_REGULAR);
        $ai['aiConv']['aiEC']=array_unique($ai['aiConv']['aiEC'], SORT_REGULAR);
        $ai['aiConv']['aiEA']=array_unique($ai['aiConv']['aiEA'], SORT_REGULAR);
        $ai['aiConv']['aiORR']=array_unique($ai['aiConv']['aiORR'], SORT_REGULAR);

        $ai['aiDiv']['aiCA']=array_unique($ai['aiDiv']['aiCA'], SORT_REGULAR);
        $ai['aiDiv']['aiEC']=array_unique($ai['aiDiv']['aiEC'], SORT_REGULAR);
        $ai['aiDiv']['aiEA']=array_unique($ai['aiDiv']['aiEA'], SORT_REGULAR);
        $ai['aiDiv']['aiORR']=array_unique($ai['aiDiv']['aiORR'], SORT_REGULAR);

        //var_dump($ai);
        $estiloId=1;

        //Se recorre todos los valores para insertarlos en una tabla en la BD
        foreach ($ai as $position => $clase) {
            
            if($position=='iAcom'){
                $estiloId=1;
            }else if($position=='aiAsim'){
                $estiloId=2;
            }else if($position=='aiConv'){
                $estiloId=3;
            }else if($position=='aiDiv'){
                $estiloId=4;
            }

           //accede a los 8 arrays con valores (CA, EC, EA, ORR, CAU, ECU, EAU, ORRU)
      
            foreach ($ai[$position] as $positi => $atributo) {
                //rellena con 0, los valores vaciós en el arreglo
                for ($x=6; $x <=28 ; $x++) { 
                    if(empty($ai[$position][$positi][$x])){
                        $ai[$position][$positi][$x]=0;
                    }
                }

                //decodifica y asigna Id a los atributos
                if($positi=='aiCA'){
                    $atribId=1;
                }else if($positi=='aiEC'){
                    $atribId=2;
                }else if($positi=='aiEA'){
                    $atribId=3;
                }else if($positi=='aiORR'){
                    $atribId=4;
                }

                $count=0;
                //recorre los atributos y almacena en la tabla
                foreach ($ai[$position][$positi] as $key => $value) {
                    if($positi!='aiCAU'&& $positi!='aiECU'&& $positi!='aiEAU'&& $positi!='aiORRU'&&$value>5){
                      //  print_r('</br> classId: '.$estiloId.' class: '.$position.' atribId: '.$atribId.' atrib: '.$positi);
                     //   print_r(' val: '.$value.' freq: '.$ai[$position][$positi.'U'][$value]);
                     if(!empty($ai[$position][$positi.'U'][$value])){
                        $freq=$ai[$position][$positi.'U'][$value];
                     }

                        array_push($arrayTuplas, array( "classId" => $estiloId, 
                                                        "class" => $position, 
                                                        "atribId" => $atribId, 
                                                        "atrib" => $positi, 
                                                        "val" => $value, 
                                                        "freq" => $freq
                                                    ));
                    }
                }
                
                
            }
        }
       
        unset($arrayTuplas[0]);
        
      $arrayTuplas=array_unique($arrayTuplas, SORT_REGULAR);


        foreach ($arrayTuplas as $posi => $valu) {
            
            $estiloId=$valu['classId'];
            $position=$valu['class'];
            $atribId=$valu['atribId'];
            $positi=$valu['atrib'];
            $value=$valu['val'];
            $freq=$valu['freq'];

        /*    if($estiloId==4 && $positi=='aiORR' && $value==6){
                print_r('</br> classId: '.$estiloId.' class: '.$position.' atribId: '.$atribId.' atrib: '.$positi);
                print_r(' val: '.$value.' freq: '.$ai[$position][$positi.'U'][$value]);
            }
        */
            /** CONSULTA QUE INSERTA LAS FRECUENCIAS Y DEMÁS DATOS */
            $sql="Insert into tablaFrecuencias(classId, class, atribId, atrib, val, freq) VALUES ('$estiloId', '$position', '$atribId', '$positi', '$value', '$freq')";
            $consulta=mysqli_query($conexion,$sql) or die(mysqli_error());
        }

    print_r('TODO OK');
?>