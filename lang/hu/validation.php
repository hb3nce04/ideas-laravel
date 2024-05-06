<?php

return [
    'image' => ':attribute mező csakis képet fogad el.',
    'password' => [
        'letters' => ':attribute mezőnek tartalmaznia kell betűt.',
        'mixed' => ':attribute mezőnek tartalmaznia kell kis és nagybetűt is.',
        'numbers' => ':attribute mezőnek tartalmaznia kell számot.',
        'symbols' => ':attribute mezőnek tartalmaznia kell szimbólumot.',
        'uncompromised' => 'A megadott mező::attribute adatszivárgás áldozata lett. Kérlek válassz másik :attribute.',
    ],
    'current_password' => 'A jelszó hibás.',
    'email' => ':attribute mezőnek e-mail címnek kellene lennie.',
    'required' => ':attribute mező kitöltése kötelező',
    'attributes' => [
        'name' => 'felhasználónév',
        'password' => 'jelszó'
    ],
];
