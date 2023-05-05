<?php
    class Transporte {
        protected int $ruedas;
        protected int $capacidad;
        public function __construct(int $ruedas, int $capacidad)
        {
            $this->ruedas = $ruedas;
            $this->capacidad = $capacidad;
        }
        public function getInfo() : string {
            return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
        }

        public function getRuedas() : int {
            return $this->ruedas;
        }
    }
    class Bicicleta extends Transporte {
        public function getInfo() : string{
            return "el transporte tiene " . $this->ruedas . " ruedas y una capacidad de" . $this->capacidad . " persona-s y no gasta gasolina";
        }
    }

    class Automovil extends Transporte {
        protected string $transmision;
        public function __construct(int $ruedas, int $capacidad, string $transmision)
        {
            $this->ruedas = $ruedas;
            $this->capacidad = $capacidad;
            $this->transmision = $transmision;
        }
        public function getTransmision() : string {
            return $this->transmision;
        }
        public function getInfo() : string {
            return "El transporte tiene " . $this->ruedas . " ruedas , una capacidad de " . $this->capacidad . " personas y es de transmision ";
        }
    }
    //instancia del primer objeto
    $bicicleta = new Bicicleta(2,1);
    //ejecucion del metodo heredado de transporte
    echo $bicicleta->getInfo();

    echo "<hr>";
    //instancia del segundo objeto
    $auto = new Automovil(4,4,'manual');
    //metodo heredado de transporte
    echo $auto->getInfo();
    //metodo  de clase automovil
    echo $auto->getTransmision();