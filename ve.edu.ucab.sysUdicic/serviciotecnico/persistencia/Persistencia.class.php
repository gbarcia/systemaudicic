<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/TransaccionBD.class.php';

/**
 * Description of Persistenciaclass
 * Clase para el manejo de la persistencia
 * @author gerardobarcia
 */
class Persistenciaclass {
    private $transaccion;

    function __construct() {
        $this->transaccion = new TransaccionBDclass();
    }

    function agregarCliente ($rif, $nombre,$clave,$telf,$direccion,$descripcion) {
        $resultado =  false;
        $query = "INSERT INTO CLIENTE VALUES ('".$rif."','".$nombre."','".$clave."',
                 '".$telf."','".$direccion."', '".$descripcion."')";
        $resultado = $this->transaccion->realizarTransaccion($query);
        return $resultado;

    }

    function editarCliente ($rif, $nombre,$clave,$telf,$direccion,$descripcion) {
        $resultado =  false;
        $query = "UPDATE CLIENTE SET nombre = '".$nombre."',
                                              clave = '".$clave."',
                                              telefono = '".$telf."',
                                              direccion = '".$direccion."',
                                              descripcion = '".$descripcion."' WHERE rif = '".$rif."'";
        echo $query;
        $resultado = $this->transaccion->realizarTransaccion($query);
        return $resultado;

    }
    function buscarCliente ($rif) {
        $resultado =  false;
        $query = "SELECT * FROM CLIENTE WHERE rif = '".$rif."'";
        $resultado = $this->transaccion->realizarTransaccion($query);
        return $resultado;

    }

    function agregarReunion ($fecha,$hora,$detalles,$idProyecto) {
        $resultado =  false;
        $query = "INSERT INTO REUNION VALUES (NULL,'".$fecha."','".$hora."','".$detalles."',
                 $idProyecto)";
        $resultado = $this->transaccion->realizarTransaccion($query);
        return $resultado;
    }
    function editarReunion ($id,$fecha,$hora,$detalles,$idProyecto) {
        $resultado =  false;
        $query = "UPDATE REUNION SET fecha= '".$fecha."',
                                     hora = '".$hora."',
                                     detalles= '".$detalles."',
                                     PROYECTO_idProyecto =$idProyecto WHERE idReunion = $id ";
        $resultado = $this->transaccion->realizarTransaccion($query);
        return $resultado;
    }

   function login ($nombre,$clave) {
        $resultado =  false;
        $can = -1;
        $query = "SELECT * FROM USUARIO WHERE nombre = '".$nombre."' AND clave = '".$clave."'";
        $resultado = $this->transaccion->realizarTransaccion($query);
        $can = mysql_num_rows($resultado);
        return $can;
   }


}
?>
