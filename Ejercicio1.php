
<?php
class Producto{
    #definicion de los atributos
    public string $nombre;
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
}
//primer objeto
$producto = new Producto('Tablet',200, true);
$producto ->mostrarProducto();

//impresion del primer objeto
echo "<pre>";
var_dump($producto);
echo "</pre>";

//segundo objeto
$producto2 = new Producto('Monitor Curvo',300, true);
$producto2 ->mostrarProducto();

//impresion del segundo objeto
echo "<pre>";
var_dump($producto2);
echo "</pre>";





