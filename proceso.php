<?php

require "requests/library/Requests.php";
Requests::register_autoloader();
require "culqi-php/lib/culqi.php";

// Configurar tu API Key y autenticación
$SECRET_KEY = "sk_test_nvr2gkPiYGSFVZ4v";
$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

//Crear cargo único
$charge = $culqi->Charges->create(
    array(
        "amount" => $_POST['precio'],
        "currency_code" => "PEN",
        "description" => $_POST['producto'],
        "email" => $_POST['email'],
        "source_id" => $_POST['token']
    )
);

//Listar cargos

//$lista = $culqi->Charges->getList(array("country_code" => "US"));

/*foreach($lista as $value){
    echo $value . "<br>";
};*/

echo "exito";

exit;