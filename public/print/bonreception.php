<body onload="window.print()">

<?php

// Include the Composer autoloader
require __DIR__.'/../../vendor/autoload.php';

// Bootstrap the Laravel application
$app = require_once __DIR__.'/../../bootstrap/app.php';

// Run the application
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
use Illuminate\Support\Facades\DB;

// Access session variables using the session() helper function
$sessionValue = session('gid');

// Access session variables using the Session facade
use Illuminate\Support\Facades\Session;

$sessionValue = Session::get('gid');

$results = DB::select('select * from tb_users');


var_dump($results);