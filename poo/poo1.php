<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            color: white;
            background-color: black;
            text-align: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding-top: 100px;
        }
    </style>



        <?php 

class form { 

    public $nombres = array("Alex", "jonfranc", "madrid", "marin"); 
    public $estatusPago = array(
        1 => "pagado",
        2 => "pagar",
        3 => "procesando"
        );

    public function msg_pantalla() {
        return "<h2>Hola " .$this->nombres[0] . " Bienvenido de nuevo! <br>";
    }

    public function pagoRealizado() {
        
        switch ($this->estatusPago = rand(0, 3)) {

            case 1: 
                echo "Su pago ha sido procesado exitosamente!<br> ";
            break;

            case 2:
                echo "Usted no ha realiza ningun pago<br>";
            break;

            case 3: 
                echo "Estamos procesando su pago<br>";
            break;

            default:
                echo "Debe cancelar para continuar con el proceso<br>";
        }

    }

}

$instancia = new form();
echo $instancia->msg_pantalla();

$instancia2 = new form();
echo $instancia2->pagoRealizado();


?>


</body>
</html>



