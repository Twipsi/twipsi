<?php

use Twipsi\Facades\App;

return [

    /*
    - -----------------------------------------------------------------------------
    - View Path
    - -----------------------------------------------------------------------------
    - The base directory name containing view templates.
    -
    */

    'path' => App::nav()->resourcePath('views'),

    /*
    - -----------------------------------------------------------------------------
    - View Theme
    - -----------------------------------------------------------------------------
    - The theme to use to build views system wide.
    -
    */

    'theme' => 'metro',

    /*
    - -----------------------------------------------------------------------------
    - Cache Path
    - -----------------------------------------------------------------------------
    - The directory where all the compiled axis templates will be stored,
    - for faster access (they will be recompiled on any vchanges mage in the view files.)
    -
    */

    'cache' => [
        'usecache' => true,
        'path'    => App::nav()->cachePath('views'),
        'extension' => 'php',
    ],
];

?>
