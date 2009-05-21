<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/Conexion.class.php';
/**
 * Description of TransaccionBDclass
 * Clase para el manejo de las transacciones con la base de datos
 * @author gerardobarcia
 */
class TransaccionBDclass {

    /*Variable para el manejo de la conexion*/
    private $conexion;

/**
 * Constructor que inicia el objeto de conexion con la bd
 */
    function __construct() {
        $this->conexion = new Conexionclass();
    }

/**
 * Metodo para realizar una transaccion con la bd
 * @param <String> $query query a enviar
 * @return <Recurso> resultado del query
 */
    function realizarTransaccion($query) {
        $link = $this->conexion->conectarBaseDatos();
        $result = mysql_query($query,$link);
        if (!$result) {
            $mensaje = $query. '  '.mysql_error();
        }
        $this->conexion->cerrarConexion();
        return $result;
    }

 /**
 * Metodo para realizar una transaccion con la bd que retorna el id autogenerado
 * @param <String> $query query a enviar
 * @return <Integer> el id ingresado en la bd
 */
    function realizarTransaccionInsertId($query) {
        $id = -1;
        $link = $this->conexion->conectarBaseDatos();
        $result = mysql_query($query,$link);
        if (!$result) {
            $mensaje = $query. '  '.mysql_error();
        }
        else if ($result) {
            $id = mysql_insert_id($this->conexion->getConexion());
        }
        $this->conexion->cerrarConexion();
        return $id;
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function setConexion($conexion) {
        $this->conexion = $conexion;
    }

}
?>
