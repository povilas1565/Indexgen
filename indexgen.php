<?php
include "templ/start.php";



function bar($tiraj,$nomer,$nomerkol,$kod,$nomer1)
{
//echo "a1,a2,a3,a4,a5,a6,a7,a8,a9,a10";
//echo "<br>";
// $tiraj- всего карт, $nomer - первый номер $listov- количество листов
    $listov = $tiraj/10;
    //генерим номера в массив

    $q1="%0";
    $q2="$nomerkol";
    $q3="d";
    $nomerkol=$q1.$q2.$q3;
    $nomer=sprintf("$nomerkol", $nomer);
//echo $nomerkol;
//echo "<br>";
    for ($i = 1; $i <= $tiraj; $i++)
    {
        $n[$i]=$nomer;
        $nomer=$nomer+1;
        $nomer=sprintf("$nomerkol", $nomer);
        //echo $n[$i];
//echo "<br>";
    }

//захерачиваем формат

//1
    $b=1;

//$dq=$tiraj/5;

//$df=$dq/2;
//$b=$df+1;

//2345
    for ($a = 1; $a <= $listov; $a++)
    {
        $a1list[$a]=$n[$b];
        $b=$b+1;
    }
    for ($a = 1; $a <= $listov; $a++)
    {
        $a2list[$a]=$n[$b];
        $b=$b+1;
    }
    for ($a = 1; $a <= $listov; $a++)
    {
        $a3list[$a]=$n[$b];
        $b=$b+1;
    }
    for ($a = 1; $a <= $listov; $a++)
    {
        $a4list[$a]=$n[$b];
        $b=$b+1;
    }
    for ($a = 1; $a <= $listov; $a++)
    {
        $a5list[$a]=$n[$b];
        $b=$b+1;
    }
    for ($a = 1; $a <= $listov; $a++)
    {
        $a6list[$a]=$n[$b];
        $b=$b+1;
    }
    for ($a = 1; $a <= $listov; $a++)
    {
        $a7list[$a]=$n[$b];
        $b=$b+1;
    }
    for ($a = 1; $a <= $listov; $a++)
    {
        $a8list[$a]=$n[$b];
        $b=$b+1;
    }
    for ($a = 1; $a <= $listov; $a++)
    {
        $a9list[$a]=$n[$b];
        $b=$b+1;
    }
    for ($a = 1; $a <= $listov; $a++)
    {
        $a10list[$a]=$n[$b];
        $b=$b+1;
    }

//вывод
    if ($kod==1)
    {
        $dre="aaa";
        $ghd=".bmp";
        for ($a = 1; $a <= $listov; $a++)
        {
            $a1list[$a]=$dre.$a1list[$a].$ghd;
            $a2list[$a]=$dre.$a2list[$a].$ghd;
            $a3list[$a]=$dre.$a3list[$a].$ghd;
            $a4list[$a]=$dre.$a4list[$a].$ghd;
            $a5list[$a]=$dre.$a5list[$a].$ghd;
            $a6list[$a]=$dre.$a6list[$a].$ghd;
            $a7list[$a]=$dre.$a7list[$a].$ghd;
            $a8list[$a]=$dre.$a8list[$a].$ghd;
            $a9list[$a]=$dre.$a9list[$a].$ghd;
            $a10list[$a]=$dre.$a10list[$a].$ghd;

            echo $a1list[$a];
            echo ",";
            echo $a2list[$a];
            echo ",";
            echo $a3list[$a];
            echo ",";
            echo $a4list[$a];
            echo ",";
            echo $a5list[$a];
            echo ",";
            echo $a6list[$a];
            echo ",";
            echo $a7list[$a];
            echo ",";
            echo $a8list[$a];
            echo ",";
            echo $a9list[$a];
            echo ",";
            echo $a10list[$a];
            echo ",";
            echo $nomer1;
            echo "<br>";
            $nomer1=$nomer1+1;
        }}

    else
    {
        for ($a = 1; $a <= $listov; $a++)
        {
            echo $a1list[$a];
            echo ",";
            echo $a2list[$a];
            echo ",";
            echo $a3list[$a];
            echo ",";
            echo $a4list[$a];
            echo ",";
            echo $a5list[$a];
            echo ",";
            echo $a6list[$a];
            echo ",";
            echo $a7list[$a];
            echo ",";
            echo $a8list[$a];
            echo ",";
            echo $a9list[$a];
            echo ",";
            echo $a10list[$a];
            echo ",";
            echo $nomer1;
            echo "<br>";
            $nomer1=$nomer1+1;
        }
    }
}

function bar2($tirajy,$nomershtruikol,$nomershtrui)
{
    $q11 = "%0";
    $q21 = "$nomershtruikol";
    $q31 = "d";
    $nomershtruikol = $q11 . $q21 . $q31;
    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "</br>";

//$temps=$nomershtruikol;
    for ($p = 1; $p <= $tirajy; $p++) {
        echo "$nomershtrui";
        echo "</br>";
        $nomershtrui = $nomershtrui + 1;
        $nomershtrui = sprintf("$nomershtruikol", $nomershtrui);
    }
}

// менющка раздела
echo "<table border=1 bgcolor=Gainsboro align=left height=100% width=100%>";
echo '<tr>';
echo '<td class="caption">';
echo '<b>Мистер Генадий приветствует тебя!!!</b><br>';
echo '</td>';
echo '</tr>';
echo "</table>";
//Содержание раздела
echo '<table border=1 bgcolor=Gainsboro align=left height=100% width=100% class="text">';
echo '<tr>';
echo '<td>';
// Извлечение данных

if ($_GET["new"]==1) {
    $summm = 0;
    $tiraj = $_POST["tiraj"];
    $tirajy = $tiraj;
    $nomer = $_POST["nomer"];
    $nomershtrui = $_POST["nomershtrui"];
    $nomerkol = $_POST["nomerkol"];
    $nomershtruikol = strlen($nomershtrui);
   // $nomerkol=strlen($nomer);
    if ($_POST["kod"] == "on") {
        $kod = 1;
    } else {
        $kod = 0;
    }

    $nomer1 = 1;

    if ($tiraj <= 1100) {
        bar($tiraj, $nomer, $nomerkol, $kod, $nomer1);
    }


    if ($tiraj > 1100) {
        $summm = floor($tiraj / 1000);
        $ostatok = $tiraj - $summm * 1000;
//echo $summm;
        for ($cc = 1; $cc <= $summm; $cc++) {
            $tiraj = 1000;
            bar($tiraj, $nomer, $nomerkol, $kod, $nomer1);
            $nomer = $nomer + 1000;
            $nomer1 = $nomer1 + 100;
        }
        bar($ostatok, $nomer, $nomerkol, $kod, $nomer1);
    }

    {
        bar2($tirajy, $nomershtruikol, $nomershtrui);
    }

}

else
{
//форма
    echo '<table border=1 bgcolor=Gainsboro align=left height=100% width=30% class="text">';
    echo '<tr>';
    echo '<td>';
    echo '<form action="indexgen.php?new=1" method="post" class="text">';
    echo 'Тираж:<input type=text maxlength="99" size="7" name=tiraj>';
    echo '</td>';echo '<td>';
    echo 'Первый номер:<input type=text maxlength="99" size="7" name=nomer>';
    echo '</td>';echo '<td>';
    echo 'Сколько знаков:<input type=text maxlength="99" size="7" name=nomerkol>';
    echo '</td>';echo '<td>';
    echo 'Штрих-код?<input type="checkbox"  name=kod>';
    echo '</td><td><div align="center"><input type=submit value="Сейчас Гена загениерит все ровно"></div></td>	';
    echo 	 '</form>';

    echo '</tr>';
    echo "</table>";
}


echo '</td>';
echo '</tr>';
echo "</table>";

include "templ/fin.php";
?>



