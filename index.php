<?php
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];


$v = ($example_persons_array);

print_r($v);

echo '<br><br>';
?>

<?php 


function getFullnameFromParts($a){

    foreach($a as $array => $name){
        $a = (explode(" ",$name['fullname']));

        $b = $a[0];
        $c = $a[1];
        $d = $a[2];

        $y[] = "$b\n$c\n$d";
    }
    return $y;
};

    $k = getFullnameFromParts($example_persons_array);

    print_r ($k);

 echo '<br><br>';

function getPartsFromFullname($a){
    
foreach($a as $array => $name){

        $j = (explode(" ",$name['fullname']));
        $g = ['surname' => $j[0], 'name' => $j[1], 'patronomyc' => $j[2],];
        $l[] = $g;
        };
        return $l;
    };

    $w = (getPartsFromFullname($example_persons_array));

    print_r($w);
 
 echo '<br><br>';

function getShortName($a){

    foreach($a as $array => $name){

        $a = (explode(" ",$name['name']));
        $h = (explode(" ",$name['surname']));
        $firstEl = mb_substr($h[0], 0, 1);

        echo("$a[0]\n$firstEl.");
        
        };
};

    $z = getShortName($w);

    echo($z);

    echo '<br><br>';

function getGenderFromName($a){
        
    foreach($a as $array => $name){

        $a = (explode(" ",$name['surname']));
        $h = (explode(" ",$name['name']));
        $x = (explode(" ",$name['patronomyc']));

        
        $arrt = [$a[0], $h[0], $x[0]];

        $male = mb_substr($arrt[1], -1, 1) == "й" || mb_substr($arrt[1], -1, 1) == "н" || mb_substr($arrt[2], -2, 2) == "ич" || mb_substr($arrt[0], -1, 1) == "в";
        $female = mb_substr($arrt[1], -1, 1) == "а" || mb_substr($arrt[2], -3, 3) == "вна" || mb_substr($arrt[0], -2, 2) == "ва";
        
        $sos = 0;

        $sos <=> $arrt;

        if($male && !$female){

            $sos = 1;
            $arrt1 = ['Мужчина' => "$arrt[0]\n$arrt[1]\n$arrt[2]"];
        }
        if($female && !$male || $male && $female){

            $sos = -1;
            $arrt1 =  ['Женщина' => "$arrt[0]\n$arrt[1]\n$arrt[2]"];
        }
        if(!$male && !$female){
            
            $arrt1 = ['Неизвестно' => "$arrt[0]\n$arrt[1]\n$arrt[2]"];
            
        }

        $arr[] = $arrt1;
        
    };
    
    return $arr;
    
    };

    $z1 = (getGenderFromName($w));

    print_r($z1);


    echo '<br><br>';


    function getGenderDescription($a){

       
        foreach($a as $array => $name){

            $t = $name;

            if(array_key_exists('Мужчина', $t)){
                $m[] = $t['Мужчина'];
            }
            if(array_key_exists('Женщина', $t)){
                $f[] = $t['Женщина'];
            }
            if(array_key_exists('Неизвестно', $t)){
                $u[] = $t['Неизвестно'];
            }

            
        }

        $pu = ceil((100*count($u)/count($a))); 
        $pu1 = number_format((float)$pu, 1, '.', '');
        $pf = (100*count($f)/count($a)); 
        $pf1 = number_format($pf, 1);
        $pm = (100*count($m)/count($a)); 
        $pm1 = number_format($pm, 1);

        return ([$pm1, $pf1, $pu1]);


    }

    $ggd = (getGenderDescription($z1));

        
    echo
    "
    <div class='container'>
    <ul class='new_list'>
    <li class='new_list-item'>Гендерный состав аудитории:</li>
    <li class='new_list-item'><hr></li>
    <li class='new_list-item'>Мужчины - $ggd[0]&#37</li>
    <li class='new_list-item'>Женщины - $ggd[1]&#37</li>
    <li class='new_list-item'>Не удалось определить - $ggd[2]&#37</li>
    </ul>    
    </div>
    
    <style>
    li {
        list-style: none;
    }
    .container{
        position: absolute;
        left: 5px;
        width: 300px;
        border: 1px solid black;
        padding: 10px;
    }
    hr {
        border: none;
        border-top: 1px dotted black;
        width: 200px;
        margin-right: 110px;
        
      }
 
    </style>";


  
?>
<?php  

echo '<br><br><br><br><br><br><br><br><br><br>';


    function getPerfectPartner($a,$b,$c,$z1){

        $str = mb_convert_case($a, MB_CASE_TITLE, "UTF-8");
        $str1 = mb_convert_case($b, MB_CASE_TITLE, "UTF-8");
        $str2 = mb_convert_case($c, MB_CASE_TITLE, "UTF-8");

        $arrn = [ ["fullname" => $str.' '.$str1.' '.$str2]];

        $gffp = (getFullnameFromParts($arrn));

        $gpff = (getPartsFromFullname($arrn));

        $ggfn = getGenderFromName($gpff)[0];
        


        foreach($z1 as $array => $t){

            if(array_key_exists('Мужчина', $t)){
                $m[] = $t['Мужчина'];
                $randd = [$m[array_rand($m)]][0];
                $j = (explode("\n", $randd));
                $a = (explode(" ",$j[1]));
                $h = (explode(" ",$j[0]));
                $firstEl = mb_substr($h[0], 0, 1);
                $rand = ("$a[0]\n$firstEl.");
            }
            if(array_key_exists('Женщина', $t)){
                $m1[] = $t['Женщина'];
                $randt = [$m1[array_rand($m1)]][0];
                $j = (explode("\n", $randt));
                $a = (explode(" ",$j[1]));
                $h = (explode(" ",$j[0]));
                $firstEl = mb_substr($h[0], 0, 1);
                $rand1 = ("$a[0]\n$firstEl.");
            }
            
        }

        if(array_key_exists('Мужчина', $ggfn)){  
            $j = (explode("\n", $ggfn['Мужчина']));
            $a = (explode(" ",$j[1]));
            $h = (explode(" ",$j[0]));
            $firstEl = mb_substr($h[0], 0, 1);
            $ggfn = ("$a[0]\n$firstEl.");
            $m = ($ggfn. ' + ' .$rand1);
            return $m;   
        }
        if(array_key_exists('Женщина', $ggfn)){
            $j = (explode("\n", $ggfn['Женщина']));
            $a = (explode(" ",$j[1]));
            $h = (explode(" ",$j[0]));
            $firstEl = mb_substr($h[0], 0, 1);
            $ggfn = ("$a[0]\n$firstEl.");
            $f = ($ggfn. ' + ' .$rand);
            return $f;
        }
        
    }

    

    $couple = ( getPerfectPartner('басов','иван','александровичь',$z1));
    $rnd = 100 + rand(0, 1000) / (1000 / (10 - 60) );

    echo
    "
    <div class='container'>
    <ul class='new_list'>
    <li class='new_list-item'>$couple</li>
    <li class='new_list-item'> &#10084; Идеально на $rnd&#37 &#10084 </li>
    </ul>    
    </div>

    "

?>


