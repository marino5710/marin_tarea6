<?php
require_once 'Conexion.php';

class Cliente extends Conexion{
    public $cliente_id;
    public $cliente_nombre;
    public $cliente_nit;
    public $cliente_situacion;


    public function __construct($args = [] )
    {
        $this->cliente_id = $args['cliente_id'] ?? null;
        $this->cliente_nombre = $args['cliente_nombre'] ?? '';
        $this->cliente_nit = $args['cliente_nit'] ?? '';
        $this->cliente_situacion = $args['cliente_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO clientes(cliente_nombre, cliente_nit) values('$this->cliente_nombre','$this->cliente_nit')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from clientes where cliente_situacion = 1 ";

        if($this->cliente_nombre != ''){
            $sql .= " and cliente_nombre like '%$this->cliente_nombre%' ";
        }

        if($this->cliente_nit != ''){
            $sql .= " and cliente_nit = $this->cliente_nit ";
        }

        if($this->cliente_id != null){
            $sql .= " and cliente_id = $this->cliente_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE clientes SET cliente_nombre = '$this->cliente_nombre', cliente_nit = $this->cliente_nit where cliente_id = $this->cliente_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE clientes SET cliente_situacion = 0 where cliente_id = $this->cliente_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}