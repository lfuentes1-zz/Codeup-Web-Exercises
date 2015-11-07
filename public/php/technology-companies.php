<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];



// print_r($companies);//uncomment
//Sort the $companies array by company name and output the results.
ksort($companies);
print_r($companies);








// ksort($companies);
// foreach($companies as $key => $value)
// {
//     sort($value);
//     $new_key = strtolower($key);
//     unset($companies[$key]);
//     $companies = array_merge($companies, array($new_key => $value));
//     //array_push($companies, $new_key => $value);
//     //array_splice($companies,0,0,['funnyface' => $value]);
// }
// arsort($companies);
// print_r($companies);