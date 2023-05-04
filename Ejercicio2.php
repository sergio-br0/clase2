
<?php
class Producto{
    #definicion de los atributos
    protected string $nombre;
    public int $precio;
    public bool $disponible;

    #metodo constructor, se ejecuta al efectuar la instancia
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> disponible = $disponible;
        
    }

    #Definir metodo
    public function mostrarProducto(){
        echo "El Producto es: " .$this->nombre ." y su precio es de: " .$this->precio;
    }
    #metodo Getter para la propiedad protegida de nombre
    public function getNombre() : string{
        return $this->nombre;
    }
    #metodo setter para propiedad protegida de nombre
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

//primer objeto
$producto = new Producto('Tablet',200, true);
//$producto ->mostrarProducto();
//echo $producto->nombre; // Produce un error
echo"El nombre acutal es: "."<br>";
echo $producto->getNombre();// obtine el nombre
echo"<br>";
echo"El nuevo nombre es: "."<br>";
$producto->setNombre('Telefono'); // setea el nombre
echo $producto->getNombre(); //obtiene el nombre




