<?php
require "persistencia/ArticuloDAO.php";

class Articulo{
    private $idArticulo;
    private $titulo;
    private $descripcion;
    private $fecha;
    private $conexion;
    private $articuloDAO;
    
    
    /**
     * @return mixed
     */
    public function getIdArticulo()
    {
        return $this->idArticulo;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    
    function Articulo ($pidArticulo="", $ptitulo="", $pdescripcion="", $pfecha=""){
        $this -> idArticulo = $pidArticulo;
        $this -> titulo = $ptitulo;
        $this -> descripcion = $pdescripcion;
        $this -> fecha = $pfecha;
        $this -> conexion = new Conexion();
        $this -> articuloDAO = new ArticuloDAO($pidArticulo, $ptitulo, $pdescripcion, $pfecha);
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> articuloDAO -> consultar());
        $this -> conexion -> cerrar();
        $resultado = $this -> conexion -> extraer();
        $this -> titulo = $resultado[0];
        $this -> descripcion = $resultado[1];
        $this -> fecha = $resultado[2];
    }
    
    function crear(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> articuloDAODAO -> crear());
        $this -> conexion -> cerrar();
    }
    
}

?>