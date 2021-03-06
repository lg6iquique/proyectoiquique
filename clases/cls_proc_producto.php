<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        cls_proc_producto
* GENERATION DATE:  17.01.2020
* CLASS FILE:       C:\xampp\htdocs\generator/generated_classes/class.cls_proc_producto.php
* FOR MYSQL TABLE:  proc_producto
* FOR MYSQL DB:     erp
* -------------------------------------------------------
* CODE GENERATED BY:
* MY PHP-MYSQL-CLASS GENERATOR
* from: >> www.voegeli.li >> (download for free!)
* -------------------------------------------------------
*
*/

require_once("../conexion/conexion.php");

// **********************
// CLASS DECLARATION
// **********************

class cls_proc_producto
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $prod_codigo;   // KEY ATTR. WITH AUTOINCREMENT

var $marca_id;   // (normal Attribute)
var $umed_codigo;   // (normal Attribute)
var $cat_id;   // (normal Attribute)
var $prod_codigobarra;   // (normal Attribute)
var $prod_nombre;   // (normal Attribute)
var $prod_tipo;   // (normal Attribute)
var $prod_informacionadic;   // (normal Attribute)
var $prod_codigoarancelario;   // (normal Attribute)
var $prod_precio1;   // (normal Attribute)
var $prod_precio2;   // (normal Attribute)
var $prod_ley18211;   // (normal Attribute)
var $prod_fabricadozf;   // (normal Attribute)
var $prod_descripcion;   // (normal Attribute)
var $prod_modelo;   // (normal Attribute)
var $prod_umedida_cant;   // (normal Attribute)
var $prod_sist_medida;   // (normal Attribute)
var $prod_color;   // (normal Attribute)
var $prod_peso_ctrol;   // (normal Attribute)
var $prod_largo;   // (normal Attribute)
var $prod_ancho;   // (normal Attribute)
var $prod_alto;   // (normal Attribute)
var $prod_estado;
var $prod_servicio;
var $arrproducto;
var $total_producto;
var $total_servicio;


var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function cls_proc_producto()
{

$this->database = new Database();

}


// **********************
// GETTER METHODS
// **********************


function getprod_codigo()
{
return $this->prod_codigo;
}

function getmarca_id()
{
return $this->marca_id;
}

function getumed_codigo()
{
return $this->umed_codigo;
}

function getcat_id()
{
return $this->cat_id;
}

function getprod_codigobarra()
{
return $this->prod_codigobarra;
}

function getprod_nombre()
{
return $this->prod_nombre;
}

function getprod_tipo()
{
return $this->prod_tipo;
}

function getprod_informacionadic()
{
return $this->prod_informacionadic;
}

function getprod_codigoarancelario()
{
return $this->prod_codigoarancelario;
}

function getprod_precio1()
{
return $this->prod_precio1;
}

function getprod_precio2()
{
return $this->prod_precio2;
}

function getprod_ley18211()
{
return $this->prod_ley18211;
}

function getprod_fabricadozf()
{
return $this->prod_fabricadozf;
}

function getprod_descripcion()
{
return $this->prod_descripcion;
}

function getprod_modelo()
{
return $this->prod_modelo;
}

function getprod_umedida_cant()
{
return $this->prod_umedida_cant;
}

function getprod_sist_medida()
{
return $this->prod_sist_medida;
}

function getprod_color()
{
return $this->prod_color;
}

function getprod_peso_ctrol()
{
return $this->prod_peso_ctrol;
}

function getprod_largo()
{
return $this->prod_largo;
}

function getprod_ancho()
{
return $this->prod_ancho;
}

function getprod_alto()
{
return $this->prod_alto;
}
function getprod_estado()
{
return $this->prod_estado;
}
function getprod_servicio()
{
return $this->prod_servicio;
}
function gettotal_producto()
{
return $this->total_producto;
}
function getprod_equiv_id()
{
return $this->prod_equiv_id;
}
// **********************
// SETTER METHODS
// **********************


function setprod_codigo($val)
{
$this->prod_codigo =  $val;
}

function setmarca_id($val)
{
$this->marca_id =  $val;
}

function setumed_codigo($val)
{
$this->umed_codigo =  $val;
}

function setcat_id($val)
{
$this->cat_id =  $val;
}

function setprod_codigobarra($val)
{
$this->prod_codigobarra =  $val;
}

function setprod_nombre($val)
{
$this->prod_nombre =  $val;
}

function setprod_tipo($val)
{
$this->prod_tipo =  $val;
}

function setprod_informacionadic($val)
{
$this->prod_informacionadic =  $val;
}

function setprod_codigoarancelario($val)
{
$this->prod_codigoarancelario =  $val;
}

function setprod_precio1($val)
{
$this->prod_precio1 =  $val;
}

function setprod_precio2($val)
{
$this->prod_precio2 =  $val;
}

function setprod_ley18211($val)
{
$this->prod_ley18211 =  $val;
}

function setprod_fabricadozf($val)
{
$this->prod_fabricadozf =  $val;
}

function setprod_descripcion($val)
{
$this->prod_descripcion =  $val;
}

function setprod_modelo($val)
{
$this->prod_modelo =  $val;
}

function setprod_umedida_cant($val)
{
$this->prod_umedida_cant =  $val;
}

function setprod_sist_medida($val)
{
$this->prod_sist_medida =  $val;
}

function setprod_color($val)
{
$this->prod_color =  $val;
}

function setprod_peso_ctrol($val)
{
$this->prod_peso_ctrol =  $val;
}

function setprod_largo($val)
{
$this->prod_largo =  $val;
}

function setprod_ancho($val)
{
$this->prod_ancho =  $val;
}

function setprod_alto($val)
{
$this->prod_alto =  $val;
}
function setprod_estado($val)
{
$this->prod_estado=  $val;
}
function setprod_servicio($val)
{
$this->prod_servicio =  $val;
}
function settotal_producto($val)
{
$this->total_producto =  $val;
}
function setprod_equiv_id($val)
{
$this->prod_equiv_id =  $val;
}
// **********************
// SELECT METHOD / LOAD
// **********************
function getasociadoxid()
{
//$prod_equiv_nombre = $this->getprod_equiv_nombre();
$prod_equiv_id = $this->getprod_equiv_id();
//$pro_prod_equiv_id = 3;

$sql =  "SELECT * FROM equivalencia_prod e inner join proc_producto p "
        . "left join telas_colores t on t.color_id = prod_color where e.prod_equiv_id = '$prod_equiv_id' ";
$result =  $this->database->query($sql);
$i=0;
    while($datos = $this->database->fetch_array($result)){
        
        $this->arrproducto[$i]['prod_equiv_id'] = $datos['prod_equiv_id']; 
        $this->arrproducto[$i]['prod_equiv_nombre'] = $datos['prod_equiv_nombre']; 
        $this->arrproducto[$i]['prod_equiv_descripcion'] = $datos['prod_equiv_descripcion'];
        $this->arrproducto[$i]['prod_equiv_valor'] = $datos['prod_equiv_valor']; 
        $this->arrproducto[$i]['prod_equiv_unidad'] = $datos['prod_equiv_unidad']; 
        
        $this->arrproducto[$i]['prod_codigo'] = $datos['prod_codigo']; 
        $this->arrproducto[$i]['marca_id'] = $datos['marca_id']; 
        $this->arrproducto[$i]['umed_codigo'] = $datos['umed_codigo']; 
        $this->arrproducto[$i]['cat_id'] = $datos['cat_id']; 
        $this->arrproducto[$i]['prod_codigobarra'] = $datos['prod_codigobarra']; 
        $this->arrproducto[$i]['prod_nombre'] = $datos['prod_nombre']; 
        $this->arrproducto[$i]['prod_tipo'] = $datos['prod_tipo']; 
        $this->arrproducto[$i]['prod_informacionadic'] = $datos['prod_informacionadic']; 
        $this->arrproducto[$i]['prod_codigoarancelario'] = $datos['prod_codigoarancelario']; 
        $this->arrproducto[$i]['prod_precio1'] = $datos['prod_precio1']; 
        $this->arrproducto[$i]['prod_precio2'] = $datos['prod_precio2']; 
        $this->arrproducto[$i]['prod_ley18211'] = $datos['prod_ley18211']; 
        $this->arrproducto[$i]['prod_fabricadozf'] = $datos['prod_fabricadozf']; 
        $this->arrproducto[$i]['prod_descripcion'] = $datos['prod_descripcion']; 
        $this->arrproducto[$i]['prod_modelo'] = $datos['prod_modelo']; 
        $this->arrproducto[$i]['prod_umedida_cant'] = $datos['prod_umedida_cant']; 
        $this->arrproducto[$i]['prod_sist_medida'] = $datos['prod_sist_medida']; 
        $this->arrproducto[$i]['prod_color'] = $datos['prod_color']; 
        $this->arrproducto[$i]['prod_peso_ctrol'] = $datos['prod_peso_ctrol']; 
        $this->arrproducto[$i]['prod_largo'] = $datos['prod_largo']; 
        $this->arrproducto[$i]['prod_ancho'] = $datos['prod_ancho']; 
        $this->arrproducto[$i]['prod_alto'] = $datos['prod_alto']; 
        $this->arrproducto[$i]['prod_estado'] = $datos['prod_estado']; 
        $this->arrproducto[$i]['prod_servicio'] = $datos['prod_servicio']; 
        
        $this->arrproducto[$i]['color_nombre'] = $datos['color_nombre']; 
         
     $i++;
    } 
} 
function totalxproducto($opc)
{
$cat_id = $this->getcat_id();
$prod_codigo = $this->getprod_codigo();
$prod_servicio = $this->getprod_servicio();
if($opc == 1) 
     $sql =  "SELECT count(*) as total_producto FROM proc_producto WHERE   prod_servicio = '$prod_servicio' and cat_id is null ";
else if($opc == 2) 
     $sql =  "SELECT count(*) as total_producto FROM proc_producto WHERE  prod_codigo = '$prod_codigo' and prod_servicio = '$prod_servicio'";
else if($opc == 3) 
     $sql =  "SELECT count(*) as total_producto FROM proc_producto WHERE  cat_id = '$cat_id' and prod_servicio = '$prod_servicio'";
$result = $this->database->query($sql);
 $i=0;
    while($datos = $this->database->fetch_array($result)){
       
      $this->total_producto = $datos['total_producto'];  
        $this->settotal_producto($datos['total_producto']); 
         $i++;
    } 
}
function totalxcat()
{
$cat_id = $this->getcat_id();
 
     $sql =  "SELECT count(*) as total_producto FROM proc_producto WHERE  cat_id = '$cat_id'";
$result = $this->database->query($sql);
 $i=0;
    while($datos = $this->database->fetch_array($result)){
       
        $this->total_producto = $datos['total_producto'];  
         $i++;
    } 
}
function selectdataxcat()
{
$cat_id = $this->getcat_id();
 
     $sql =  "SELECT * FROM proc_producto WHERE  cat_id = '$cat_id'";
$result = $this->database->query($sql);
 $i=0;
    while($datos = $this->database->fetch_array($result)){
        $this->arrproducto[$i]['prod_codigo'] = $datos['prod_codigo']; 
     /*   $this->arrproducto[$i]['marca_id'] = $datos['marca_id']; 
        $this->arrproducto[$i]['umed_codigo'] = $datos['umed_codigo']; 
        $this->arrproducto[$i]['cat_id'] = $datos['cat_id']; 
        $this->arrproducto[$i]['prod_codigobarra'] = $datos['prod_codigobarra']; 
        $this->arrproducto[$i]['prod_nombre'] = $datos['prod_nombre']; 
        $this->arrproducto[$i]['prod_tipo'] = $datos['prod_tipo']; 
        $this->arrproducto[$i]['prod_informacionadic'] = $datos['prod_informacionadic']; 
        $this->arrproducto[$i]['prod_codigoarancelario'] = $datos['prod_codigoarancelario']; 
        $this->arrproducto[$i]['prod_precio1'] = $datos['prod_precio1']; 
        $this->arrproducto[$i]['prod_precio2'] = $datos['prod_precio2']; 
        $this->arrproducto[$i]['prod_ley18211'] = $datos['prod_ley18211']; 
        $this->arrproducto[$i]['prod_fabricadozf'] = $datos['prod_fabricadozf']; 
        $this->arrproducto[$i]['prod_descripcion'] = $datos['prod_descripcion']; 
        $this->arrproducto[$i]['prod_modelo'] = $datos['prod_modelo']; 
        $this->arrproducto[$i]['prod_umedida_cant'] = $datos['prod_umedida_cant']; 
        $this->arrproducto[$i]['prod_sist_medida'] = $datos['prod_sist_medida']; 
        $this->arrproducto[$i]['prod_color'] = $datos['prod_color']; 
        $this->arrproducto[$i]['prod_peso_ctrol'] = $datos['prod_peso_ctrol']; 
        $this->arrproducto[$i]['prod_largo'] = $datos['prod_largo']; 
        $this->arrproducto[$i]['prod_ancho'] = $datos['prod_ancho']; 
        $this->arrproducto[$i]['prod_alto'] = $datos['prod_alto']; 
        $this->arrproducto[$i]['prod_estado'] = $datos['prod_estado']; 
        $this->arrproducto[$i]['prod_servicio'] = $datos['prod_servicio']; */
         $i++;
    } 
}
///q1 necesito filtrar por codigo de modelo 
function selectdata($search,$opc)
{
$prod_codigo = $this->getprod_codigo();
$prod_equiv_id = $this->getprod_equiv_id();
$cat_id = $this->getcat_id();
$prod_color = $this->getprod_color();
$search = $search.'%';
$prod_servicio = $this->getprod_servicio();
$prod_modelo= $this->getprod_modelo();
 if($opc == 1)
     $sql =  "prod_modelo ='$prod_modelo'";   
 else  if($opc == 2)
     $sql =  "p.prod_nombre LIKE '$search' and p.prod_servicio ='$prod_servicio' ";   
 else  if($opc == 3)
      $sql =  " p.prod_nombre LIKE '$search' and p.prod_servicio ='$prod_servicio' ";
 else  if($opc == 4)
      $sql =  " p.cat_id ='$cat_id' and p.prod_servicio ='$prod_servicio' group by p.prod_codigo ";
 else  if($opc == 5 ){
   if(intval($cat_id) > 0)
      $sql =  " p.cat_id ='$cat_id' and p.prod_color = '$prod_color' and p.prod_servicio ='$prod_servicio' "; 
   else
       $sql =  " p.prod_color = '$prod_color' and p.prod_servicio ='$prod_servicio' ";
 }
 
 if($opc < 7){
   $sql = "SELECT * FROM proc_producto p left join telas_colores t on t.color_id = prod_color "
         . " left join equivalencia_prod e on e.prod_codigo = p.prod_codigo "
           . " "
         . " WHERE  ".$sql." order by p.prod_nombre";
 }
 
 if($opc == 7){
     if(!$prod_equiv_id)
           $condicion=   " where 1 group by p.cat_id, eq.prod_equiv_id ";
     else
           $condicion= " where eq.prod_equiv_id= '$prod_equiv_id'  group by p.cat_id, eq.prod_equiv_id ";
 }else if($opc == 8){
   $flag = true;
   if($prod_codigo ){
        $condicion= " where p.prod_codigo= '$prod_codigo'  group by p.cat_id, eq.prod_equiv_id ";
   } 
 }   
        
  if($opc >  6){ 
   
   $sql =  " SELECT   p.cat_id,c.cat_nombre, count(p.prod_codigo) as cantsel ,eq.prod_equiv_nombre,eq.prod_equiv_valor,u.umed_sigla, "
         . " (SELECT  count(*)  FROM proc_producto  WHERE cat_id = p.cat_id) as total ,"
 . "  (SELECT  count(*)  FROM equivalencia_prod ex  left join proc_producto px on ex.prod_codigo = px.prod_codigo   WHERE px.cat_id = p.cat_id and ex.prod_equiv_id  = eq.prod_equiv_id) as total1 "
           . " FROM equivalencia_prod e "
         . " left join proc_producto p on e.prod_codigo = p.prod_codigo "
         . " left join telas_colores t on t.color_id = p.prod_color  "
         . " left join equivalencia_prod ep on ep.prod_codigo = p.prod_codigo "
         . " left join proc_categoria_producto c on c.cat_id = p.cat_id "
         . " left join proc_equivalencia_unidad eq on eq.prod_equiv_id = ep.prod_equiv_id "
        . " left join proc_umedida u on u.umed_codigo = eq.prod_equiv_unidad "
        .$condicion;
       //  . " where eq.prod_equiv_id= '$prod_equiv_id'  group by p.cat_id, eq.prod_equiv_id ";
 }
$result = $this->database->query($sql);
 $i=0;
    while($datos = $this->database->fetch_array($result)){
        
        $this->arrproducto[$i]['cat_nombre'] = $datos['cat_nombre']; 
        $this->arrproducto[$i]['cantsel'] = $datos['cantsel']; 
        $this->arrproducto[$i]['total'] = $datos['total'];
          $this->arrproducto[$i]['total1'] = $datos['total1'];
        $this->arrproducto[$i]['umed_sigla'] = $datos['umed_sigla']; 
        
        $this->arrproducto[$i]['prod_equiv_id'] = $datos['prod_equiv_id']; 
        $this->arrproducto[$i]['prod_equiv_nombre'] = $datos['prod_equiv_nombre']; 
        $this->arrproducto[$i]['prod_equiv_descripcion'] = $datos['prod_equiv_descripcion'];
        $this->arrproducto[$i]['prod_equiv_valor'] = $datos['prod_equiv_valor']; 
        $this->arrproducto[$i]['prod_equiv_unidad'] = $datos['prod_equiv_unidad']; 
        
        $this->arrproducto[$i]['prod_codigo'] = $datos['prod_codigo']; 
        $this->arrproducto[$i]['marca_id'] = $datos['marca_id']; 
        $this->arrproducto[$i]['umed_codigo'] = $datos['umed_codigo']; 
        $this->arrproducto[$i]['cat_id'] = $datos['cat_id']; 
        $this->arrproducto[$i]['prod_codigobarra'] = $datos['prod_codigobarra']; 
        $this->arrproducto[$i]['prod_nombre'] = $datos['prod_nombre']; 
        $this->arrproducto[$i]['prod_tipo'] = $datos['prod_tipo']; 
        $this->arrproducto[$i]['prod_informacionadic'] = $datos['prod_informacionadic']; 
        $this->arrproducto[$i]['prod_codigoarancelario'] = $datos['prod_codigoarancelario']; 
        $this->arrproducto[$i]['prod_precio1'] = $datos['prod_precio1']; 
        $this->arrproducto[$i]['prod_precio2'] = $datos['prod_precio2']; 
        $this->arrproducto[$i]['prod_ley18211'] = $datos['prod_ley18211']; 
        $this->arrproducto[$i]['prod_fabricadozf'] = $datos['prod_fabricadozf']; 
        $this->arrproducto[$i]['prod_descripcion'] = $datos['prod_descripcion']; 
        $this->arrproducto[$i]['prod_modelo'] = $datos['prod_modelo']; 
        $this->arrproducto[$i]['prod_umedida_cant'] = $datos['prod_umedida_cant']; 
        $this->arrproducto[$i]['prod_sist_medida'] = $datos['prod_sist_medida']; 
        $this->arrproducto[$i]['prod_color'] = $datos['prod_color']; 
        $this->arrproducto[$i]['prod_peso_ctrol'] = $datos['prod_peso_ctrol']; 
        $this->arrproducto[$i]['prod_largo'] = $datos['prod_largo']; 
        $this->arrproducto[$i]['prod_ancho'] = $datos['prod_ancho']; 
        $this->arrproducto[$i]['prod_alto'] = $datos['prod_alto']; 
        $this->arrproducto[$i]['prod_estado'] = $datos['prod_estado']; 
        $this->arrproducto[$i]['prod_servicio'] = $datos['prod_servicio']; 
        
        $this->arrproducto[$i]['color_nombre'] = $datos['color_nombre']; 
         $i++;
    } 
}

function select($id)
{

$sql =  "SELECT * FROM proc_producto WHERE prod_codigo = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = mysql_fetch_object($result);


$this->prod_codigo = $row->prod_codigo;

$this->marca_id = $row->marca_id;

$this->umed_codigo = $row->umed_codigo;

$this->cat_id = $row->cat_id;

$this->prod_codigobarra = $row->prod_codigobarra;

$this->prod_nombre = $row->prod_nombre;

$this->prod_tipo = $row->prod_tipo;

$this->prod_informacionadic = $row->prod_informacionadic;

$this->prod_codigoarancelario = $row->prod_codigoarancelario;

$this->prod_precio1 = $row->prod_precio1;

$this->prod_precio2 = $row->prod_precio2;

$this->prod_ley18211 = $row->prod_ley18211;

$this->prod_fabricadozf = $row->prod_fabricadozf;

$this->prod_descripcion = $row->prod_descripcion;

$this->prod_modelo = $row->prod_modelo;

$this->prod_umedida_cant = $row->prod_umedida_cant;

$this->prod_sist_medida = $row->prod_sist_medida;

$this->prod_color = $row->prod_color;

$this->prod_peso_ctrol = $row->prod_peso_ctrol;

$this->prod_largo = $row->prod_largo;

$this->prod_ancho = $row->prod_ancho;

$this->prod_alto = $row->prod_alto;

}

// **********************
// DELETE
// **********************
function eliminaxcodigo()
{
$prod_codigo = $this->getprod_codigo();
$sql = "DELETE FROM proc_producto WHERE prod_codigo = '$prod_codigo';";
$result = $this->database->query($sql);

}

function delete($id)
{
$sql = "DELETE FROM proc_producto WHERE prod_codigo = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************
function insert_servicio()
{
//$this->prod_codigo = ""; // clear key for autoincrement

$sql = "INSERT INTO proc_producto (prod_codigo,prod_nombre,  "
        . "prod_tipo,prod_codigobarra,prod_servicio , prod_descripcion"
      
        . "  ) VALUES "
        . "('$this->prod_codigo',  '$this->prod_nombre', "
        . "'$this->prod_tipo','$this->prod_codigobarra','$this->prod_servicio', '$this->prod_descripcion'   )";
$result = $this->database->query($sql);
//$this->prod_codigo = mysql_insert_id();

}
function insert11()
{
 
//sin mcarca
$sql = "INSERT INTO proc_producto ( prod_codigo,prod_codigobarra,prod_nombre,"
        . "prod_tipo,prod_precio1,"
         . "prod_precio2,prod_descripcion"  
       . ",prod_umedida_cant,prod_sist_medida,prod_color"
        . ",prod_peso_ctrol,prod_largo,prod_ancho,prod_alto,"
        . "prod_servicio ) VALUES "
        . "('$this->prod_codigo' ,'$this->prod_codigobarra','$this->prod_nombre',"
        . "'$this->prod_tipo','$this->prod_precio1',"
   . "'$this->prod_precio2','$this->prod_descripcion',"  
       . "'$this->prod_umedida_cant','$this->prod_sist_medida','$this->prod_color',"
        . "'$this->prod_peso_ctrol','$this->prod_largo','$this->prod_ancho','$this->prod_alto',"
        . "'$this->prod_servicio' )";
$result = $this->database->query($sql);
 

}
function insert12()
{
 
//sin mcarca
$sql = "INSERT INTO proc_producto ( prod_codigo,prod_codigobarra,prod_nombre,"
        . "prod_tipo,prod_precio1,cat_id,"
         . "prod_precio2,prod_descripcion"  
       . ",prod_umedida_cant,prod_sist_medida,prod_color"
        . ",prod_peso_ctrol,prod_largo,prod_ancho,prod_alto,"
        . "prod_servicio ) VALUES "
        . "('$this->prod_codigo' ,'$this->prod_codigobarra','$this->prod_nombre',"
        . "'$this->prod_tipo','$this->prod_precio1','$this->cat_id',"
   . "'$this->prod_precio2','$this->prod_descripcion',"  
       . "'$this->prod_umedida_cant','$this->prod_sist_medida','$this->prod_color',"
        . "'$this->prod_peso_ctrol','$this->prod_largo','$this->prod_ancho','$this->prod_alto',"
        . "'$this->prod_servicio' )";
$result = $this->database->query($sql);
 

}
function insert2()
{
 
//sin categoria
$sql = "INSERT INTO proc_producto ( prod_codigo,marca_id,umed_codigo,prod_codigobarra,prod_nombre,prod_tipo,prod_informacionadic,"
        . "prod_codigoarancelario,prod_precio1,prod_precio2,prod_ley18211,prod_fabricadozf,prod_descripcion,prod_modelo"
        . ",prod_umedida_cant,prod_sist_medida,prod_color,prod_peso_ctrol,prod_largo,prod_ancho,prod_alto) VALUES "
        . "('$this->prod_codigo', '$this->marca_id','$this->umed_codigo','$this->prod_codigobarra','$this->prod_nombre',"
        . "'$this->prod_tipo','$this->prod_informacionadic','$this->prod_codigoarancelario','$this->prod_precio1',"
        . "'$this->prod_precio2','$this->prod_ley18211','$this->prod_fabricadozf','$this->prod_descripcion',"
        . "'$this->prod_modelo','$this->prod_umedida_cant','$this->prod_sist_medida','$this->prod_color',"
        . "'$this->prod_peso_ctrol','$this->prod_largo','$this->prod_ancho','$this->prod_alto' )";
$result = $this->database->query($sql);
 

}
// **********************
// UPDATE
// **********************
function updatexcod()
{
$prod_codigo = $this->getprod_codigo();
$prod_servicio = $this->getprod_servicio();


$sql = " UPDATE proc_producto SET "
         . "prod_nombre = '$this->prod_nombre'"
        //. ",prod_tipo = '$this->prod_tipo'"
         . ",prod_precio1 = '$this->prod_precio1',prod_precio2 = '$this->prod_precio2'"
         . ",prod_descripcion = '$this->prod_descripcion'"
          . " WHERE prod_codigo = '$prod_codigo' and prod_servicio = '$prod_servicio' ";

$result = $this->database->query($sql);



}
function updateprod()
{
$prod_codigo = $this->getprod_codigo();
$prod_servicio = $this->getprod_servicio();


$sql = " UPDATE proc_producto SET  "
        . " cat_id = '$this->cat_id',prod_codigobarra = '$this->prod_codigobarra',"
        . "prod_nombre = '$this->prod_nombre',prod_tipo = '$this->prod_tipo',prod_informacionadic = '$this->prod_informacionadic',"
        . "prod_codigoarancelario = '$this->prod_codigoarancelario',prod_precio1 = '$this->prod_precio1',prod_precio2 = '$this->prod_precio2',"
        . "prod_ley18211 = '$this->prod_ley18211',prod_fabricadozf = '$this->prod_fabricadozf',prod_descripcion = '$this->prod_descripcion',"
        . "prod_modelo = '$this->prod_modelo',prod_umedida_cant = '$this->prod_umedida_cant',prod_sist_medida = '$this->prod_sist_medida',"
        . "prod_color = '$this->prod_color',prod_peso_ctrol = '$this->prod_peso_ctrol',prod_largo = '$this->prod_largo',"
        . "prod_ancho = '$this->prod_ancho',prod_alto = '$this->prod_alto' "
          . "  WHERE prod_codigo = '$prod_codigo' and prod_servicio = '$prod_servicio' ";

        

$result = $this->database->query($sql);



}
function update($id)
{



$sql = " UPDATE proc_producto SET  "
        . "marca_id = '$this->marca_id',umed_codigo = '$this->umed_codigo',cat_id = '$this->cat_id',prod_codigobarra = '$this->prod_codigobarra',"
        . "prod_nombre = '$this->prod_nombre',prod_tipo = '$this->prod_tipo',prod_informacionadic = '$this->prod_informacionadic',"
        . "prod_codigoarancelario = '$this->prod_codigoarancelario',prod_precio1 = '$this->prod_precio1',prod_precio2 = '$this->prod_precio2',"
        . "prod_ley18211 = '$this->prod_ley18211',prod_fabricadozf = '$this->prod_fabricadozf',prod_descripcion = '$this->prod_descripcion',"
        . "prod_modelo = '$this->prod_modelo',prod_umedida_cant = '$this->prod_umedida_cant',prod_sist_medida = '$this->prod_sist_medida',"
        . "prod_color = '$this->prod_color',prod_peso_ctrol = '$this->prod_peso_ctrol',prod_largo = '$this->prod_largo',"
        . "prod_ancho = '$this->prod_ancho',prod_alto = '$this->prod_alto' "
        . "WHERE prod_codigo = $id ";

$result = $this->database->query($sql);



}


} ?>