<?php
class circulo{
    private $raio;

    public function __construct($raio){
        $this ->raio = $raio;
    }
    public function calcularArea(){
        return pi() * $this -> raio ** 2;}
}
$circulo = new Circulo(5);
echo "Área do círculo é " . $circulo -> calcularArea();
?>