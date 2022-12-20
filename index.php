<?php

$paginas = ['home'=>'', 'sobre'=>'', 'contato'=>''];
$paginas['FAQ'] = 'faq';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pages/styles/home.css">
    <link rel="stylesheet" href="pages/styles/contato.css">
</head>
<body>
    <header>
        <?php
            foreach ($paginas as $key => $value) {
                echo '<a href="?page='.$key.'" class="nav-links">'.ucfirst($key).'</a>';
            }
        ?>
    </header>
    <main>
        <?php

            $pagina = (isset($_GET['page']) ? $_GET['page'] : 'home');

            if(!array_key_exists($pagina, $paginas)){
                $pagina = 'home';
            }
                
            

            require('pages/'.$pagina.'.html');
        ?>
    </main>
</body>
</html>