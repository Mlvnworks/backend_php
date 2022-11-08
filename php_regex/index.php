<?php
    declare(strict_types=1);

    // Text Subject
    $text = "I love dogs and I love cats";
    
    //Word to search in subject Text
    $toSearch = "love";

    //Word to Replace
    $toReplace = "like";

    //preg_match Checker
    $inText = preg_match('/'.$toSearch. '/', $text) ===1 ? true : false;
    
    //preg_match_all Checker
    $matchCount = preg_match_all('/'.$toSearch. '/', $text);

    //preg_replace
    $replaceResult = preg_replace('/'.$toSearch. '/', $toReplace, $text);

    //output
    if(!$inText){
        echo $toSearch.' <span style="color:red">Doesnt found </span> at the text : <h3>'. $text .'</h3>';
    }else{
        echo $toSearch.' <span style="color: green">successfuly found </span> at the text : <h3>'. $text .'</h3>';
    } 

    //Output match Count
    echo 'Matches: '. $matchCount;
    echo '<br/>Replacement Result: <h3>'.$replaceResult.'</h3>'


?>