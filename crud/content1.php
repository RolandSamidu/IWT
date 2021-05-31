<?php

function inputElement($placeholder,$name,$value){
    $ele="

    
       <p>  <input type=\"text\" placeholder=$placeholder name=$name value=$value ></p>
  
   
   ";

   echo $ele;

}

function buttonElement($btnid,$text,$name,$attr){
    $btn = "
        <button name = '$name''$attr' id='$btnid'>$text</button>
    ";
    echo $btn;
}
  

?>