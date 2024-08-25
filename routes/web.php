<?php

use App\Collections\Collection;
use App\Collections\HashSet;
use App\Collections\NumberCollection;
use App\Factories\ElectricGuitarFactory;
use App\Instruments\ExpensiveViolin;
use App\Instruments\FlyingVGuitar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'content' => 'Welcome home!'
    ]);
});

Route::get('/numbers', function() {

    /** @var Collection<int> $numbers */
    $numbers = new Collection();

    $numbers->add(1);
    $numbers->add(2);
    $numbers->add(3);
    $numbers->add(4);
//    $numbers->add('jeremy');

    return view('welcome', [
        'content' => 'Sum is: ' . array_sum($numbers->all())
    ]);
});

Route::get('/names', function() {

    /** @var Collection<string> $names */
    $names = new Collection();

    $names->add('jeffrey');
    $names->add('luke');
    $names->add('jeremy');
//    $names->add(4);

    return view('welcome', [
        'content' => 'Name is: ' . $names->all()[0]
    ]);
});

Route::get('/guitars', function() {
    $factory = new ElectricGuitarFactory(FlyingVGuitar::class);
    $guitar = $factory->make();

    return view('welcome', [
        'content' => 'Guitar name: ' . $guitar->getName()
    ]);
});

Route::get('/hash', function() {
    /** @var HashSet<string, string> $hash */
    $hash = new HashSet();

    $hash->set('january', 'jan');
    $hash->set('february', 'feb');
    $hash->set('march', 'mar');
    $hash->set('april', 'apr');


});









