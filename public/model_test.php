<?php

require_once '../lib/User.php';

// $data = new Model();
// $data->name = 'Letty Fuentes';
// $data->course = 'Codeup';
// $data->city = 'San Antonio';
// echo "{$data->name} is taking the {$data->course} course in {$data->city}" . PHP_EOL;

// $user = new User();
// $user->getTableName();
//below option of using the method can only be used if method is static ; otherwise, only the above option of using method would work
// User::getTableName();

// // $contact = new User();
// // $contact->name = 'Letty Fuentes';
// // $contact->email = 'letty2@codeup.com';
// // $contact->phone = '210-213-9803';
// // $contact->address = '123 Codeup Building';
// // $contact->city = 'San Antonio';
// // $contact->state = 'TX';
// // $contact->zip = '78259';

// // echo $contact->save();

$contact = new User();
$contact->name = 'Reni Fagbamiye';
$contact->email = 'reni8@codeup.com';
$contact->phone = '210-213-0000';
$contact->address = '123 Codeup Building';
$contact->city = 'San Antonio';
$contact->state = 'TX';
$contact->zip = '78250';

echo $contact->save();

// $user = User::find(2);
// $users = User::all();
// var_dump($users);
// var_dump($user);
// echo User::delete(2);


//update
$contact = User::find(1);
$contact->name = "Letty Gonzalez";
$contact->zip = 78450;
echo $contact->save();
// $contact->update(1);
// var_dump($user);


