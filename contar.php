<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body style="background-image: url(http://4.bp.blogspot.com/-LWnr-G4AO7A/UhPsJ-FFIdI/AAAAAAAAASA/rOce5u9X8Tw/s1600/vocale.png); background-repeat:no-repeat;" >
    
    <div style="margin-left: 2em; margin-top:9em;">
    <h1>Cuantas vocales tiene tu frase</h1>
    <?php
        $cadena=$_GET['frase'];
        $tamano=strlen($cadena);

        $a=0;
        $e=0;
        $i=0;
        $o=0;
        $u=0;

        for ($c=0; $c < $tamano; $c++) { 
            $cadena[$c];
            $frase=$cadena[$c];
            switch ($frase) {
                case 'a':
                    if($frase=='a'){
                        $a++;
                    }
                    break;
                case 'e':
                    if ($frase=='e') {
                        $e++;
                    }
                    break;
                case 'i':
                    if ($frase=='i') {
                        $i++;
                    }
                    break;
                case 'o':
                    if ($frase=='o') {
                        $o++;
                    }
                    break;
                case 'u':
                    if($frase=='u'){
                        $u++;
                    }
                    break;
                default:
                    break;
            }
            
        }    

        echo "La frase tiene <b> $a </b> vocales 'a' <br>";
        echo "La frase tiene <b> $e </b> vocales 'e' <br>";
        echo "La frase tiene <b> $i </b> vocales 'i' <br>";
        echo "La frase tiene <b> $o </b> vocales 'o' <br>";
        echo "La frase tiene <b> $u </b> vocales 'u' <br>";
    ?>
    </div>
</body>
</html>
