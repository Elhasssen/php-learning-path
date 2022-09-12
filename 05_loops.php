<?php
// for loop 
//for loop syntax :
// for (initialize; condition; incerement) {
    // code to be executed 
//}
// for ($x = 0; $x <= 10; $x ++){
//     echo 'Number ' . $x . '<br>';
// }

// while loop 
// while loop syntax :
// while (condition) {
    // code to be executed
//}

// $x = 1;

// while ($x <= 15){
//     echo 'number' . $x . '<br>';
//     $x ++;
// }
// do  while loop, it is not used mroe often

// $x = 1;

// do {
//     echo 'number' . $x . '<br>';
//     $x ++;
// } while ($x < 5)

// this will print four times, but the thing here is that 
// the code will run before we check the condition.

// for each loop 
// for each syntax :
    // for each ($array as $value) {
        // code to be executed
    //}

    // this will be used alot in web development
    // because we mostly deal with arrays and data

// $post = ['firstPost','secondPost','thirdPost'];

// for ($x =0; $x < count($post); $x++) {
//     echo $post[$x]. '<br>';
// }

// foreach ($post as $item ){
//     echo $item;
// }

// we can use the index as well
// foreach ($post as $index => $item ){
//     echo $index . ' - ' .$item . '<br>';
// }

// and if we had an asoociatinve array 

// $person = [
//     'first_name' => 'elhassen',
//     'last_nmae' => 'boumeddiene',
//     'email' => 'hello@gmail.com'
// ];

// foreach ($person as $key => $item){
//     echo $key . ' - ' . $item . '<br>';
// }
?>