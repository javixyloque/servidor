<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>Hacer contraseña con Caracteres especiales, escribir y comprobar</title>
</head>
<body>
    <form action="240miContrasenya.php" method="get">
        <label for="pass">Contraseña:</label>
        <label for="Caracteres validos">Mayus y min,'!','·','$','%','&','+','-','/' </label>
        <input type="text" name="pass">
        <input type="submit" value="Crear">
    </form>
<?php
$ca = isset($_GET['pass'])? $_GET['pass']: "";
// comprobarContr($ca);
// function crearContra(int $tam):String{
//         $caracteresMin=range('a','z');
//         $caracteresMay=range('A','Z');
//         $caracteresEspeciales=['!','·','$','%','&','+','-','/'];
//         $Num=range(0,9);
//         $todosCaracteres=array_merge($caracteresMay,$caracteresMin,$Num,$caracteresEspeciales);
//         $cadena="";
//         for($i=0;$i<$tam;$i++){
//             $cadena.=$todosCaracteres[rand(0,count($todosCaracteres)-1)];
//         }
//         return $cadena;
//     }

function escribirContra(String $cadena1): String{
        $caracteresMin=range('a','z');
        $caracteresMay=range('A','Z');
        $caracteresEspeciales=['!','·','$','%','&','+','-','/'];
        $Num=range(0,9);
        $todosCaracteres=array_merge($caracteresMay,$caracteresMin,$Num,$caracteresEspeciales);
        $cont=0;
        for($j=0;$j<strlen($cadena1);$j++){
            for($i=0;$i<count($todosCaracteres);$i++){
                if($cadena1[$j]==$todosCaracteres[$i]){
                    $cont++;
                }
            }
        }
        if($cont===strlen($cadena1)){
            echo"La cadena que has metido esta bien <br>";
        }else{
            echo"La cadena que has metido esta mal <br>";
        }

        return $cadena1;
    }

function comprobarContr($cadena2):String{
    if(strlen($cadena2)>16){
        return "Has metido una cadena muy larga";
        
    }else{

        $cad=$cadena2;
        $caracteresMin=range('a','z');
        $caracteresMay=range('A','Z');
        $caracteresEspeciales=['!','·','$','%','&','+','-','/'];
        $num=range(0,9);
        $seguir=null;
        for($p=0;$p<strlen($cad);$p++){
            if(in_array($cad[$p],$caracteresMin)){
                $seguir=true;
            }elseif(in_array($cad[$p],$caracteresMay)){
                $seguir=true;
            }elseif(in_array($cad[$p],$caracteresEspeciales)){
                $seguir=true;
            }elseif(in_array($cad[$p],$num)){
                $seguir=true;
            }else{
                $seguir=false;
                break;
            }
        }
        if($seguir===true){
            echo"Esta bien";
        }else{
            echo"Esta mal";
        }

        return$cad;
    }
}
    comprobarContr($ca);
    ?>
</body>
</html>