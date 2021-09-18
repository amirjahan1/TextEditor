<?php

sleep(1);

$text = $_POST["textEditor"];
$radio = $_POST["EditText"];


if( $radio == "Bold"){

   
    $text = str_replace($text,"<strong>".$text."</strong>",$text);
    echo $text;
   
}

else if( $radio == "italic"){

   
    $text = str_replace($text,"<i>".$text."</i>",$text);
    echo $text;
}

else if( $radio == "Captalize"){

   
    $text = str_replace($text,"<p style='text-transform: capitalize;'>".$text."</p>",$text);
    echo $text;
}

else if( $radio == "UPPERCASE"){

   
    $text = str_replace($text,"<p style='text-transform: uppercase;'>".$text."</p>",$text);
    echo $text;
}

else if( $radio == "lowercase"){

   
    $text = str_replace($text,"<p style='text-transform:  lowercase;'>".$text."</p>",$text);
    echo $text;
}

else if( $radio == "Splitter"){

   
    $text = wordwrap($text , 1 , "</br>" , false);
    echo $text;
}



else if( $radio == "color"){

   
    $text = explode(" ",$text);
    foreach( $text as $tex ) {

        $tex = str_replace($tex,"<span style='color:rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).");'>".$tex."</span>",$tex);
    echo $tex;
    echo "</br>";
    
    }
   
   
    
}



else if( $radio == "CountWord"){

   
    echo str_word_count($text);
   
   
    
}

else if( $radio == "CountChar"){

   
   echo strlen($text);
   
   
    
}