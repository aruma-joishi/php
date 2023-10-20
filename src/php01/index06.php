<?php
function triangle($base,$height)
{
    $area = $base * $height / 2;
    echo $area."<br>";
    }


function quadrangle($base,$height)
{
    $area = $base * $height ;
    echo $area."\n";
    }
 

function trapezoid($top,$bottom,$height)
{
    $area = ( $top + $bottom ) * $height /2;
    echo $area."<br>";
}

triangle(8,7);
quadrangle(10,6);
trapezoid(10,20,30);