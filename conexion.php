<?php
class ConexionMysql{
    private $host;
    private $user;
    private $password;
    private $database;
    private $conn;
    public function __construct(){
        require_once "config_BD.php";
        $this->host=HOST;
        $this->user=USER;
        $this->password=PASSWORD;
        $this->database=DATABASE;
    }
    public function CrearConexion(){
        $this->conn = new mysqli($this->host,$this->user,$this->password,$this->database);
        if ($this->conn->connect_errno){
            die("Error al connectarse a MYsql: (".$this->conn->connect_errno.")".$this->connect_errno);
        }
        else{
            echo"Conexion Exitosa";
        }
    }
    public function CerrarConexion(){
        $this->conn->close();
        echo"Conexion Cerrada";
    }
    public function ObtenerFilasAfectadas(){
        return $this->conn->affected_rows;
    }
    public function EjecutarSQL($sql){
        $result=$this->conn->query($sql);
        return $result;
    }
    public function ObtenerFilas($result){
        return $result->fecht_row();
    }


}
#$conect = new ConexionMysql();
#$conect->CrearConexion();
#$conect->CerrarConexion();

?>