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
		<main>
			<div class="contenedor-formulario">
				<h3 class="titulo-formulario">Conversor de unidades del sistema métrico decimal al sistema inglés</h3>
				<form name="converter" action="converter.php" method="POST">
					<label for="unidades">Selecciona la conversión a realizar:</label>
					<select name="unidades">
						<option>Mililitros a onzas</option>
						<option>Metros a yardas</option>
						<option>Gramos a libras</option>
						<option>Grados Celsius a Farenheit</option>
						<option>Kilometros a millas</option>
						<option>Pesos a libras esterlinas</option>
					</select>
					<br/>
					<label for="entrada">Ingresa el número: </label>
					<input type="number" name="entrada">
					<br/>
					<input type="submit" value="Convertir">
				</form>
			</div>
		</main>
        </body>
</html>

