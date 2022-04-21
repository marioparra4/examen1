<?php	
	$unidades= $_POST["unidades"];
	$cantidad= $_POST["entrada"];

	function convertir($cantidad, $unidades) {
		$resultado;
                if($cantidad < 0){
                        if($unidades == "Grados Celsius a Farenheit") {
                                $resultado = ($cantidad * 9/5) + 32;
                                echo "El resultado de convertir ".$cantidad." ".$unidades." es: ".$resultado;

                        } else {
                                echo "No es posible realizar conversiones negativas con esta unidad de medida, <a href='formulario.php'>intenta otra conversión</a>";
                        }
                } else {
                        if($unidades == "Mililitros a onzas") {
                                $resultado = $cantidad/29.574;
                                
                        } elseif($unidades == "Metros a yardas"){
                                $resultado = $cantidad*1.094;
                                
                        } elseif($unidades == "Gramos a libras"){
                                $resultado = $cantidad/454;
                                
                        } elseif($unidades == "Kilometros a millas"){
                                $resultado = $cantidad/1.609;
                                
                        } elseif($unidades == "Grados Celsius a Farenheit"){
                                $resultado = ($cantidad * 9/5) + 32;
                                
                        } else{
                                $resultado= $cantidad/26.13;
                                
			}
			
			echo "El resultado de convertir ".$cantidad." ".$unidades." es: ".$resultado;
                }
        }

?>

<!DOCTYPE html>
<html>
        <head>
                <meta charset="UTF-8">
                <title>Conversiones</title>
                <link rel="stylesheet" href="styles.css">
        </head>
        <body>
                <header>
                        <div>
                                <h1>Sistemas de medición</h1>
                        </div>
                        <nav>
                                <a href="index.php">Inicio</a>
                                <a href="formulario.php">Conversor</a>
                                <a href="creditos.php">Creditos</a>
                        </nav>

		</header>
		<main class="resultado">
			<p><?php convertir($cantidad,$unidades); ?></p>
		</main>
        </body>
</html>

