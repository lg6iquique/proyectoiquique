<?php
require_once('../clases/cls_web_canasta.php');
require_once('../clases/cls_proc_equivalencia_unidad.php');
//require_once('../clases/cls_telas_colores.php');
//--require_once('../clases/cls_proc_marca.php');
//require_once('../clases/cls_valorizado.php');
//require_once('../clases/cls_proc_producto.php');
//require_once('../clases/cls_proc_categoria_producto.php');
//require_once('../servicio/funciones_adicionales.php');


if($_POST['funcion'] == 'insertcanasta')
    insertcanasta();
if($_POST['funcion'] == 'insertmcanasta')
    insertmcanasta();
if($_POST['funcion'] == 'cargarcanasta')
    cargarcanasta();

function cargarcanasta(){
    $me = new cls_web_canasta();
    $me->setcanasta_rut($_POST['rut']);
    $me->selecdata();
    if(count($me->arrcanasta) > 0){
         $arreglo = $me->arrcanasta;
        
         echo json_encode($arreglo);
    }else 
        echo 'null';
}



function insertmcanasta(){
    $me = new cls_web_canasta();
    $arrayproductos = json_decode($_POST['myJSON1'], false); 
        if(count($arrayproductos ) > 0){
           ;// $lente->delete();
            for($i=0; $i < count($arrayproductos);$i++){
                $me->setcanasta_codigo_prod($arrayproductos[$i][0]);
                $me->setcanasta_cantidad_prod($arrayproductos[$i][1]);
                $me->setcanasta_fecha($arrayproductos[$i][4]);
                $me->setcanasta_hora($arrayproductos[$i][5]);
                $me->setcanasta_estado(1);
                $me->setcanasta_rut($_POST['rut']);
                $me->setcanasta_precio($arrayproductos[$i][3]);
                $me->insert();
           }
        }
}
function insertcanasta(){
    $me = new cls_web_canasta();
    $me->setcanasta_codigo_prod($_POST['codigo_producto']);
    $me->setcanasta_cantidad_prod($_POST['cantidad_producto']);
    $me->setcanasta_fecha(date('Y-m-d'));
    $me->setcanasta_hora(date('h:m:s'));
    $me->setcanasta_estado(1);
    $me->setcanasta_rut($_POST['rut']);
    $me->setcanasta_precio($_POST['precio_producto']);
    $me->insert();
}
