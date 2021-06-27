<?php
class AdminModel{
    
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function obtenerTodosLosUsuarios(){
        $sql = "SELECT * FROM usuario 
                INNER JOIN empleado
                ON usuario.id = empleado.usuario_id";
        $resultado =  $this->devolverResultadoConsulta($sql);
        //obtener roles
        $loginModel = new LoginModel($this->database);
        for ($i=0; $i <count($resultado) ; $i++) { 
            $rol = $loginModel->buscarRolPorIdUsuario($resultado[$i]["id"]);
            $resultado[$i]["rol"] = $rol;
        }
        return $resultado;
    }

    private function devolverResultadoConsulta($sql){
        $resultado = $this->ejecutarConsulta($sql);
        return $this->convertirArrayAsociativo($resultado);
    }

    private function ejecutarConsulta($sql){
        return $this->database->execute($sql);
    }

    private function convertirArrayAsociativo($resultado_consulta){
        if($this->existeMasDeUnRegistro($resultado_consulta)){
            $data = array();
            while ($rows = $resultado_consulta->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    private function existeMasDeUnRegistro($resultado_consulta){
        if ($resultado_consulta->num_rows > 0) {
            return true;
        }
            return false;
    }

    public function obtenerUsuarioPorId($id){
        $data = array();

        $sql_admin = "SELECT * FROM administrador 
                      INNER JOIN empleado 
                      ON administrador.legajo = empleado.legajo
                      INNER JOIN usuario ON empleado.usuario_id = usuario.id
                      WHERE usuario.id =" .$id;
        $resultado = $this->database->execute($sql_admin);
        if($resultado->num_rows > 0){
            while ($rows = $resultado->fetch_assoc()) {
                $data = $rows;
            }
            $data["rol"] = "Administrador";
            return $data;
        }

        $sql_chofer = "SELECT * FROM chofer 
                      INNER JOIN empleado 
                      ON chofer.legajo = empleado.legajo
                      INNER JOIN usuario ON empleado.usuario_id = usuario.id
                      WHERE usuario.id =" .$id;
        $resultado = $this->database->execute($sql_chofer);
        if($resultado->num_rows > 0){
            while ($rows = $resultado->fetch_assoc()) {
                $data = $rows;
            }
            $data["rol"] = "Chofer";
            return $data;
        }

        $sql_supervisor = "SELECT * FROM supervisor 
                      INNER JOIN empleado 
                      ON supervisor.legajo = empleado.legajo
                      INNER JOIN usuario ON empleado.usuario_id = usuario.id
                      WHERE usuario.id =" .$id;
        $resultado = $this->database->execute($sql_supervisor);
        if($resultado->num_rows > 0){
            while ($rows = $resultado->fetch_assoc()) {
                $data = $rows;
            }
            $data["rol"] = "Supervisor";
            return $data;
        }
        
        $sql_mecanico = "SELECT * FROM mecanico 
                      INNER JOIN empleado 
                      ON mecanico.legajo = empleado.legajo
                      INNER JOIN usuario ON empleado.usuario_id = usuario.id
                      WHERE usuario.id =" .$id;
        $resultado = $this->database->execute($sql_mecanico);
        if($resultado->num_rows > 0){
            while ($rows = $resultado->fetch_assoc()) {
                $data = $rows;
            }
            $data["rol"] = "Mecanico";
            return $data;
        }
        return "sinRol";
    }

    public function editarUsuario($id = null,$data = array()){
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        $sql = "UPDATE empleado 
                SET legajo =$legajo,
                    dni = $dni,
                    fecha_nacimiento = '$fecha_nacimiento', 
                WHERE usuario_id =" . $id;

        return $this->devolverResultadoConsulta($sql);
    }
    
    public function eliminarUsuario($id = null){
            $sql = "DELETE FROM usuario WHERE id =" . $id;
            return $this->devolverResultadoConsulta();
        }
}