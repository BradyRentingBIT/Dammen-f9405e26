<?php

spl_autoload_register(static function ($className) {
    include_once $className . '.class' . '.php';
});

class Dammen
{
    public function welcome(): void
    {
        $game = new DamSpel();
        $game->start();
    }
}

$dammen = new Dammen();
$dammen->welcome();