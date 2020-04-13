<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default References
    |--------------------------------------------------------------------------
    |
    | Since this values never change often, we don't need to create a table,
    | you can add multiple reference by adding them to the list below
    |
    */
    'selections' => [
        'gender' => Laboratory\Selection\Providers\Gender::class,
        'civilStatus' => Laboratory\Selection\Providers\CivilStatus::class,
        'relationship' => Laboratory\Selection\Providers\Relationship::class,
        'InquiryTypes' => Revlv\Selections\InquiryTypes::class,
    ]
];
