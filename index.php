<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>PHP</title>

		<style>
      body {
        width: 1200px;
        background: blue;
        color: white;
        display: flex;
        align-items:flex-start;
        justify-content: center;
				padding: 0 100px;
      }
			p{
				display: inline-block;
			}
			span{
				background-color: purple;
				text-decoration: underline;
				color: yellow;
			}
    </style>
		<?php
			/*Creare una variabile con un paragrafo di
			testo.
			Visualizzare a schermo il paragrafo con la
			relative lunghezza e sostituire la
			badword passata in GET con tre *. */

			$var = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
			//$string="date: march 27, 2017";
			//$pos=strpos($string,": ");
			//$string=($pos=strpos($string,": "))?substr($string,$pos+2):$string;
		?>
	</head>
	<body>

		<!-- <h1> hello
			<?php echo $_GET['name'] . " " . $_GET['surname'] . " anche chiamato " . htmlspecialchars($_GET["spec"]) . '!'; ?>
		</h1> -->

		<div>
			<!-- stampo la mia variabile -->
			<p>
				<?php echo $var?>
			</p>
			<!-- guardo la lunghezza della variabile -->
			<p>
				<?php echo "lunghezza del paragrafo: " .	strlen($var);  ?>
			</p>
			<!-- richiamo valore messo nell'url con $_GET -->
			<h1 style="text-transform:uppercase;">
				la mia badword è:
				<?php echo $_GET['badword'];  ?>
			</h1>

			<p>
				<?php $sost= str_replace($_GET['badword'], '***' , $_GET['badword'])  ?>
				<?php echo "ciò che andrà a sostituire la mia badword: " . $sost ?>
			</p>
			<br>
			<p>
				<?php echo "porzione della stringa originale che andrò a sostituire: " . $rest = substr($var, 0, 5); ?>
			</p>
			<br>
			<p>
				<!-- variabile con all'interno dell'html -->
				<?php $colorato= "<span>" . $_GET['badword'] . "</span>" ?>
				<?php echo str_replace($rest, $colorato , $var)  ?>
			</p>
			<span>
				<?php echo "lunghezza del paragrafo: " . strlen(str_replace($rest, $colorato , $var));  ?>
			</span>
			<br>
			<p>
				<?php $colorato_2= "<span>" . $sost . "</span>" ?>
				<?php echo str_replace($rest, $colorato_2 , $var)  ?>
			</p>
			<span>
				<?php echo "lunghezza del paragrafo: " . strlen(str_replace($rest, $colorato_2 , $var));  ?>
			</span>

			<h1>
				<?php echo explode( ',', $var)[0]; ?>
			</h1>

		</div>


	</body>
</html>
