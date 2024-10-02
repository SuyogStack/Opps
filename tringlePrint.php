<?php
//peramid
$size=5;
for($i=1;$i<=$size;$i++)
{
    for($j=1;$j<=$size-1;$j++)
    {
        echo "  ";
    }
    for($k=1;$k<=$i;$k++)
    {
        echo "*  ";
    }
    echo "\n";
}

/* 
O/P
        *
        *  *
        *  *  *
        *  *  *  *
        *  *  *  *  * */

// simple onside trangle
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "*";
    }
    echo "\n";
}
/*
O/P

*
**
***
****
*****

*/

//number print

$num=1;
for($i=0;$i<5;$i++)
{
    for($j=0;$j<$i;$j++)
    {
        echo $num." ";
        $num = $num+1;
    } 
    echo "\n";
    //echo $num;
}
?>