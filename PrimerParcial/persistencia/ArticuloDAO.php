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
                where i_articulo = '" . $this -> idArticulo . "'";
    }
    
    function crear () {
        return "insert into articulo (titulo, descripcion, fecha)
                values ('" . $this -> titulo . "', '" . $this -> descripcion . "', '" . $this -> fecha ."')";
    }
    
    function consultarTodos () {
        return "select id_articulo, titulo, descripcion, fecha
                from articulo";
    }
    
    function consultarPorPagina ($cantidad, $pagina) {
        return "select id_articulo, titulo, apellido
                from Autor
                limit " . strval(($pagina - 1) * $cantidad) . ", " . $cantidad;
    }
    
    function consultarTotalRegistros () {
        return "select count(id_articulo)
                from articulo";
    }
}
?>