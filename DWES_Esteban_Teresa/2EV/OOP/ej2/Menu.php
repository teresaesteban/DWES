<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Crea una clase Menu que incluya los atributos dia, fecha, primerosplatos, segundosplatos y postres. Los tres últimos serán arrays que contengan una lista de platos ofrecidos de primero, de segundo y como postre. Implementa los métodos necesarios para que se puedan añadir platos a cada uno de estos atributos.
Confecciona una página que muestre un objeto de la clase Menu bien presentado y con todos sus atributos accediendo a ellos a través de los métodos correspondientes.*/
class Menu
{
    // Atributos de la clase
    private $dia;
    private $fecha;
    private $primerosPlatos = array();
    private $segundosPlatos = array();
    private $postres = array();

    // Constructor de la clase
    public function __construct($dia, $fecha, $primerosPlatos, $segundosPlatos, $postres){
        $this->dia = $dia;
        $this->fecha = $fecha;
        $this->primerosPlatos = $primerosPlatos;
        $this->segundosPlatos = $segundosPlatos;
        $this->postres = $postres;
    public function getDia()
    {
        return $this->dia;
    }

    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getPrimerosPlatos()
    {
        return $this->primerosPlatos;
    }
    public function setPrimerosPlatos($primerosPlatos)
    {
        $this->primerosPlatos = $primerosPlatos;

        return $this;
    }

    public function getSegundosPlatos()
    {
        return $this->segundosPlatos;
    }

    public function setSegundosPlatos($segundosPlatos)
    {
        $this->segundosPlatos = $segundosPlatos;

        return $this;
    }

    public function getPostres()
    {
        return $this->postres;
    }
    public function setPostres($postres)
    {
        $this->postres = $postres;

        return $this;
    }
    public function anadirPlato($plato, $categoria)
    {
        switch ($categoria) {
            case 'primeros':
                $this->primerosPlatos[] = $plato;
                break;
            case 'segundos':
                $this->segundosPlatos[] = $plato;
                break;
            case 'postres':
                $this->postres[] = $plato;
                break;
            default:
                // Manejar categoría no válida
                break;
        }
    }
    }}

?>
</body>
</html>