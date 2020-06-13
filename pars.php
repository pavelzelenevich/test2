<?php
require_once "simple_html_dom.php";

if(!empty($_POST['team'])){
$team = $_POST['team'];  // получение названия искомой команды
}
echo $team; //название искомой команды
echo "<br/>";
$html1 = file_get_html('https://terrikon.com/football/italy/championship/');

foreach($html1->find('a') as $element){

    if($element->plaintext === 'Чемпионат Италии: Сезоны'){
        $htmlchampionshipofit = file_get_html('https://terrikon.com' . $element->href);

        $pattern = '/\d\d\d\d[-]\d\d[,.]./'; //паттерн для поиска на странице годов чемпионата

        foreach($htmlchampionshipofit->find('.maincol a') as $element1){

            if(preg_match($pattern, $element1->plaintext) === 1){

                $elementofarr = $element1->plaintext;
                echo $elementofarr; // год чемпионата
                $gethtmlinfoaboutteam = file_get_html('https://terrikon.com' . $element1->href);

                foreach ($gethtmlinfoaboutteam->find('.colored.big tr') as $element2){

                    $pattern = '/\d{1,2}[., ]./'; //паттерн для поиска на странице места занятого командой

                    if(preg_match($pattern, $element2->plaintext) === 1){
                        if(strpos($element2->plaintext, $team, 1)){
                            $arra = $element2->find('td');
                            echo ' ';
                            echo $arra[0]->plaintext;
                            echo $arra[1]->plaintext;
                            echo "<br/>";

                        }
                    }
                }
            }
        }
    }
}

$gethtmlinfoaboutteam->clear();
unset($gethtmlinfoaboutteam);

$htmlchampionshipofit->clear();
unset($htmlchampionshipofit);

$html1->clear();
unset($html1);
