<?php
$a=0;
function banjing($r)
{
    global $a;
    for ($x = 0; $x <= $r; $x++)
    {
        for ($y = 0; $y <= $r; $y++)
        {
            if(pow($x,2) + pow($y,2) == pow($r,2))
            {
                $a = $a + 1;
            }
        }
    }
    $a=($a-2)*4+4;
    return $a;
}
echo "半径为25的圆的优雅点个数为".banjing(25)
?>