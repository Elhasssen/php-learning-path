<?php
// simple array
// $numbers = [1,2,3,4];
// $fruit = ['apple','orange','pear'];
// var_dump($numbers);
// echo $numbers[0];
// echo $fruit[1];


// associative array
// $color = [
//     1 => 'red',
//     4 => 'blue',
//     6 => 'magenta'
// ];

// // echo $color[4];
// // 

// $hex = [
//     'red' => '#f00',
//     'blue' => '#0f0',
//     'green' => '#00f'
// ];

// echo $hex['red']

// the reason to work with associative array is when 
// manipulating arrays
// $person = [
//     'first_name' => 'elhassen',
//     'last_nmae' => 'boumeddiene',
//     'email' => 'hello@gmail.com'
// ];
// echo $person['first_name']
// sop it is smilar to a python dictionary

// and there is multidimentional arrays:
// which are arrays within arrays 

$people =[
    [
        'first_name' => 'elhassen',
        'last_nmae' => 'boumeddiene',
        'email' => 'hello@gmail.com'
    ],
    [
        'first_name' => 'karim',
        'last_nmae' => 'benzema',
        'email' => 'hellofff@gmail.com'
    ],
    [
        'first_name' => 'anhony',
        'last_nmae' => 'pasqual',
        'email' => 'hello@gmail.com'
    ]
    ];

// echo $people[1]['email'];
// alot of time we are working on apis and 
// manipulation json data

// so we can turn these assocative arrays and turn them into json 

var_dump(json_encode($people))

// json_decode will translate htese arays into a json file

?>