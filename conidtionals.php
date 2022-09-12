<?php
// operators 
// < less than
// > greater than
// <= less than or equal 
// >= greater than or equal 
// == equal too 
// != not equal to 
// !== not idetical to


// if statements 

// if stattment syntax
// if (condition) {
    // code to be excectuted if the conndition is true
// }

// $age = 14;

// if ($age >= 18) {
//     echo 'You are old enough to vote';
// } else {
//     echo 'sorry you are not old enough to vote';
// };

// trying multiple condition 

// $t = 14;
// if ($t <  12) {
//     echo 'good morning';
// } elseif ($t < 17){
//     echo 'Good Afternoon';
// } 
// else {
//     echo 'good evening';
// }
// echo $t;

// in a lot of cases we are going to deal with databases
// check of the post array is empty or not 

// $posts = [];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No Posts';
// }

// we can make this with a ternary 

// echo !empty($posts) ? $posts[1] : 'no posts';
// this says that if the array is not empty echo the first elemebt
// else which is the two dots print that message

// $first_post = !empty($posts) ? $posts[1] : 'no posts';
// when using the ternary '?' with out an else, it will not work
// or we can use the coallacing operator ?? without using the not empty
// $first_post = $posts{0} ?? null;
// # so if the array is empty we get nothing else we 
// // we get the first element on the array

// echo $first_post


// if we have more that one operators it is cleaneer 
// to use a switch 

$fav_color = 'black';

switch($fav_color){
    case 'red':
        echo 'your favourite color is red ';
        break;
    case 'blue' :
        echo 'your favourite color is blue';
        break;
    case 'green':
        echo 'your favourite color is green';
        break;
    default:
        echo 'your favourite color is not red, green, blue';
}

?>