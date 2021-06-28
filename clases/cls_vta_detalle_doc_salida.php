
<!-- begin of generated class -->
<?php
/*
 *
 * -------------------------------------------------------
 * CLASSNAME:        cls_vta_detalle_doc_salida
 * GENERATION DATE:  28.06.2021
 * CLASS FILE:       C:\xampp\htdocs\generator/generated_classes/class.cls_vta_detalle_doc_salida.php
 * FOR MYSQL TABLE:  vta_detalle_doc_salida
 * FOR MYSQL DB:     pyventas
 * -------------------------------------------------------
 * CODE GENERATED BY:
 * MY PHP-MYSQL-CLASS GENERATOR
 * from: >> www.voegeli.li >> (download for free!)
 * -------------------------------------------------------
 *
 */

include_once('../conexion/conexion.php');

// **********************
// CLASS DECLARATION
// **********************

class cls_vta_detalle_doc_salida { // class : begin
// **********************
// ATTRIBUTE DECLARATION
// **********************

    var $SAL_ITEM2;   // KEY ATTR. WITH AUTOINCREMENT
    var $SAL_IDENT;   // (normal Attribute)
    var $SAL_TIPODOC2;   // (normal Attribute)
    var $SAL_BODEGAORIGEN;   // (normal Attribute)
    var $SAL_CANTIDAD1;   // (normal Attribute)
    var $SAL_CANTIDAD2;   // (normal Attribute)
    var $SAL_VALOR_UNITARIO;   // (normal Attribute)
    var $SAL_CODIGO_PRODUCTO;   // (normal Attribute)
    var $SAL_VALOR_TOTAL;   // (normal Attribute)
    var $SAL_ESTADO_SALIDA;   // (normal Attribute)
    var $SAL_CANTIDAD_SALIDA;   // (normal Attribute)
    var $SAL_DESC;   // (normal Attribute)
    var $SAL_DESC_VALOR;   // (normal Attribute)
    var $SAL_DETALLEITEM;   // (normal Attribute)
    var $SAL_UMEDIDA;   // (normal Attribute)
    var $SAL_EQUIVALE;   // (normal Attribute)
    var $database; // Instance of class database

// **********************
// CONSTRUCTOR METHOD
// **********************

    function cls_vta_detalle_doc_salida() {

        $this->database = new Database();
    }

// **********************
// GETTER METHODS
// **********************


    function getSAL_ITEM2() {
        return $this->SAL_ITEM2;
    }

    function getSAL_IDENT() {
        return $this->SAL_IDENT;
    }

    function getSAL_TIPODOC2() {
        return $this->SAL_TIPODOC2;
    }

    function getSAL_BODEGAORIGEN() {
        return $this->SAL_BODEGAORIGEN;
    }

    function getSAL_CANTIDAD1() {
        return $this->SAL_CANTIDAD1;
    }

    function getSAL_CANTIDAD2() {
        return $this->SAL_CANTIDAD2;
    }

    function getSAL_VALOR_UNITARIO() {
        return $this->SAL_VALOR_UNITARIO;
    }

    function getSAL_CODIGO_PRODUCTO() {
        return $this->SAL_CODIGO_PRODUCTO;
    }

    function getSAL_VALOR_TOTAL() {
        return $this->SAL_VALOR_TOTAL;
    }

    function getSAL_ESTADO_SALIDA() {
        return $this->SAL_ESTADO_SALIDA;
    }

    function getSAL_CANTIDAD_SALIDA() {
        return $this->SAL_CANTIDAD_SALIDA;
    }

    function getSAL_DESC() {
        return $this->SAL_DESC;
    }

    function getSAL_DESC_VALOR() {
        return $this->SAL_DESC_VALOR;
    }

    function getSAL_DETALLEITEM() {
        return $this->SAL_DETALLEITEM;
    }

    function getSAL_UMEDIDA() {
        return $this->SAL_UMEDIDA;
    }

    function getSAL_EQUIVALE() {
        return $this->SAL_EQUIVALE;
    }

// **********************
// SETTER METHODS
// **********************


    function setSAL_ITEM2($val) {
        $this->SAL_ITEM2 = $val;
    }

    function setSAL_IDENT($val) {
        $this->SAL_IDENT = $val;
    }

    function setSAL_TIPODOC2($val) {
        $this->SAL_TIPODOC2 = $val;
    }

    function setSAL_BODEGAORIGEN($val) {
        $this->SAL_BODEGAORIGEN = $val;
    }

    function setSAL_CANTIDAD1($val) {
        $this->SAL_CANTIDAD1 = $val;
    }

    function setSAL_CANTIDAD2($val) {
        $this->SAL_CANTIDAD2 = $val;
    }

    function setSAL_VALOR_UNITARIO($val) {
        $this->SAL_VALOR_UNITARIO = $val;
    }

    function setSAL_CODIGO_PRODUCTO($val) {
        $this->SAL_CODIGO_PRODUCTO = $val;
    }

    function setSAL_VALOR_TOTAL($val) {
        $this->SAL_VALOR_TOTAL = $val;
    }

    function setSAL_ESTADO_SALIDA($val) {
        $this->SAL_ESTADO_SALIDA = $val;
    }

    function setSAL_CANTIDAD_SALIDA($val) {
        $this->SAL_CANTIDAD_SALIDA = $val;
    }

    function setSAL_DESC($val) {
        $this->SAL_DESC = $val;
    }

    function setSAL_DESC_VALOR($val) {
        $this->SAL_DESC_VALOR = $val;
    }

    function setSAL_DETALLEITEM($val) {
        $this->SAL_DETALLEITEM = $val;
    }

    function setSAL_UMEDIDA($val) {
        $this->SAL_UMEDIDA = $val;
    }

    function setSAL_EQUIVALE($val) {
        $this->SAL_EQUIVALE = $val;
    }

// **********************
// SELECT METHOD / LOAD
// **********************

    function select() {

        $SAL_ITEM2 = $this->SAL_ITEM2;

        $sql = "SELECT * FROM vta_detalle_doc_salida WHERE SAL_ITEM2 = $SAL_ITEM2;";
        $result = $this->database->query($sql);
        $row = mysql_fetch_object($result);


        $this->SAL_ITEM2 = $row->SAL_ITEM2;

        $this->SAL_IDENT = $row->SAL_IDENT;

        $this->SAL_TIPODOC2 = $row->SAL_TIPODOC2;

        $this->SAL_BODEGAORIGEN = $row->SAL_BODEGAORIGEN;

        $this->SAL_CANTIDAD1 = $row->SAL_CANTIDAD1;

        $this->SAL_CANTIDAD2 = $row->SAL_CANTIDAD2;

        $this->SAL_VALOR_UNITARIO = $row->SAL_VALOR_UNITARIO;

        $this->SAL_CODIGO_PRODUCTO = $row->SAL_CODIGO_PRODUCTO;

        $this->SAL_VALOR_TOTAL = $row->SAL_VALOR_TOTAL;

        $this->SAL_ESTADO_SALIDA = $row->SAL_ESTADO_SALIDA;

        $this->SAL_CANTIDAD_SALIDA = $row->SAL_CANTIDAD_SALIDA;

        $this->SAL_DESC = $row->SAL_DESC;

        $this->SAL_DESC_VALOR = $row->SAL_DESC_VALOR;

        $this->SAL_DETALLEITEM = $row->SAL_DETALLEITEM;

        $this->SAL_UMEDIDA = $row->SAL_UMEDIDA;

        $this->SAL_EQUIVALE = $row->SAL_EQUIVALE;
    }

// **********************
// DELETE
// **********************

    function delete() {
        $SAL_ITEM2 = $this->SAL_ITEM2;
        $sql = "DELETE FROM vta_detalle_doc_salida WHERE SAL_ITEM2 = $SAL_ITEM2;";
        $result = $this->database->query($sql);
    }

// **********************
// INSERT
// **********************

    function insert() {
      //  $this->SAL_ITEM2 = ""; // clear key for autoincrement

        $sql = "INSERT INTO vta_detalle_doc_salida ( SAL_IDENT,SAL_TIPODOC2,SAL_BODEGAORIGEN,SAL_CANTIDAD1,SAL_CANTIDAD2,SAL_VALOR_UNITARIO,SAL_CODIGO_PRODUCTO,SAL_VALOR_TOTAL,SAL_ESTADO_SALIDA,SAL_CANTIDAD_SALIDA,SAL_DESC,SAL_DESC_VALOR,SAL_DETALLEITEM,SAL_UMEDIDA,SAL_EQUIVALE ) VALUES ( '$this->SAL_IDENT','$this->SAL_TIPODOC2','$this->SAL_BODEGAORIGEN','$this->SAL_CANTIDAD1','$this->SAL_CANTIDAD2','$this->SAL_VALOR_UNITARIO','$this->SAL_CODIGO_PRODUCTO','$this->SAL_VALOR_TOTAL','$this->SAL_ESTADO_SALIDA','$this->SAL_CANTIDAD_SALIDA','$this->SAL_DESC','$this->SAL_DESC_VALOR','$this->SAL_DETALLEITEM','$this->SAL_UMEDIDA','$this->SAL_EQUIVALE' )";
        $result = $this->database->query($sql);
    }

// **********************
// UPDATE
// **********************

    function update() {

        $SAL_ITEM2 = $this->SAL_ITEM2;

        $sql = " UPDATE vta_detalle_doc_salida SET  SAL_IDENT = '$this->SAL_IDENT',SAL_TIPODOC2 = '$this->SAL_TIPODOC2',SAL_BODEGAORIGEN = '$this->SAL_BODEGAORIGEN',SAL_CANTIDAD1 = '$this->SAL_CANTIDAD1',SAL_CANTIDAD2 = '$this->SAL_CANTIDAD2',SAL_VALOR_UNITARIO = '$this->SAL_VALOR_UNITARIO',SAL_CODIGO_PRODUCTO = '$this->SAL_CODIGO_PRODUCTO',SAL_VALOR_TOTAL = '$this->SAL_VALOR_TOTAL',SAL_ESTADO_SALIDA = '$this->SAL_ESTADO_SALIDA',SAL_CANTIDAD_SALIDA = '$this->SAL_CANTIDAD_SALIDA',SAL_DESC = '$this->SAL_DESC',SAL_DESC_VALOR = '$this->SAL_DESC_VALOR',SAL_DETALLEITEM = '$this->SAL_DETALLEITEM',SAL_UMEDIDA = '$this->SAL_UMEDIDA',SAL_EQUIVALE = '$this->SAL_EQUIVALE' WHERE SAL_ITEM2 = $SAL_ITEM2 ";

        $result = $this->database->query($sql);
    }

}

// class : end
?>
<!-- end of generated class -->