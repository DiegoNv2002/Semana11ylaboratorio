<?php
    $dato[0]=$_REQUEST["curso"];
    $dato[1]=$_REQUEST["nota1"];
    $dato[2]=$_REQUEST["nota2"];
    $dato[3]=$_REQUEST["nota3"];
    $dato[4]=($dato[1]+$dato[2]+$dato[3])/3;
    if($dato[4]>=12){
        $dato[5]="Aprobado";
        $imagen="imagenes/feliz.jpg";
    }else{
        $dato[5]="Desaprobado";
        $imagen="imagenes/triste.jpg";
    }
?>
Curso: <?=$dato[0]?><br>
Promedio:<?= number_format($dato[4],1)?><br>
Condicion:<?=$dato[5]?><br>
<img src="<?=$imagen?>" height="180" width="180"><br>
<a href="Ej2S11.html">Regresar</a>
