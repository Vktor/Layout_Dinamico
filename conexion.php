<?php
class Conexion {
   
    private $server="localhost";
    private $usr="";
    private $pass="";
    private $db="";
    
    public function objConexion(){
        $con=  mysqli_connect($this->server,$this->usr,$this->pass);
        mysqli_select_db($con,$this->db);
                
        return $con;
        
    }
    
    public function cud($query){
        
        if ($consulta = mysqli_query($this->objconexion(), $query) == TRUE){
            return true;
        }  else {
            return false;
        }   
    }
    
    public function extraer($query){
        $respuesta=  mysqli_query($this->objconexion(),$query);
        return $respuesta;
    }

    public function cerrarConexion()
    {
        mysqli_close($this->objconexion());
    }

    public function login($user,$pass)
    {
        $password = md5($pass);
        $sql = "select password from usuarios where usuario = '".$user."'";
        $passw = $this->extraer($sql);
        while($fila=mysqli_fetch_array($passw))
        {
            if($password==$fila[0])
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
    }

    public function obtenerArticulos($user)
    {
        $sql = "select titulo,previa,contenido,url from articulos where idusuario = (select idusuario from usuarios where usuario='".$user."')";
        return $this->extraer($sql);
    }

    public function insertarArticulo($tit,$desc,$cont,$url,$user)
    {
        $sql = "insert into articulos(titulo,previa,contenido,url,idusuario) values('".$tit."','".$desc."','".$cont."','".$url."',(select idusuario from usuarios where usuario='".$user."'))";
        $this->cud($sql);
    }

    public function obtenerTodos()
    {
        $sql = "select titulo,previa,contenido,url from articulos";
        return $this->extraer($sql);
    }

}
?>