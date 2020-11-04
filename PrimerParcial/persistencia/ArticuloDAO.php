<?php
class ArticuloDAO{
    private $idArticulo;
    private $titulo;
    private $descripcion;
    private $fecha;
    
    function ArticuloDAO($idArticulo, $titulo, $descripcion, $fecha) {
        $this -> idArticulo = $idArticulo;
        $this -> titulo = $titulo;
        $this -> descripcion = $descripcion;
        $this -> fecha= $fecha;
    }
    
    function consultar () {
        return "select titulo, descripcion, fecha
                from articulo
                where idArticulo = '" . $this -> idArticulo . "'";
    }
    
    function crear () {
        return "insert into articulo (titulo, descripcion, fecha)
                values ('" . $this -> titulo . "', '" . $this -> descripcion . "', '" . $this -> fecha ."')";
    }
}
?>