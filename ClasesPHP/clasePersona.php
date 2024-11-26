<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>
<body>
    <?php
    class Persona{
        private $nombre;
        private $apellidos;
        public function getNombre(){
            return $this->nombre;
        }
        public function getApellidos(){
            return $this->apellidos;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function setApellidos($apellidos){
            $this->apellidos=$apellidos;
        }
    }
    class otraClase {

    }
    $unaPersona=new Persona();
    $unaPersona->setNombre("Jose Luis");
    $unaPersona->setApellidos("González");
    echo "Nombre completo: ".$unaPersona->getNombre()." ".$unaPersona->getApellidos();
    if($unaPersona instanceof OtraClase) {
        echo "<br/>".$unaPersona->getNombre()." es una Persona";
    }else{ echo "<br/>".$unaPersona->getNombre()."es de la clase ".get_class($unaPersona);

    }



    ?>
</body>
</html>