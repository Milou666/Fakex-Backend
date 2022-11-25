<?php
namespace App\Fakex\controller;

class ControllerError {
    private static function afficheVue(string $cheminVue, array $parametres = []) : void {
        extract($parametres); // Crée des variables à partir du tableau $parametres
        require __DIR__ . "/../view/$cheminVue"; // Charge la vue
    }
    public static function default(){
        self::afficheVue('index.html');
    }
    public static function error() : void {
        self::afficheVue('Error/generalError.html');
    }
}
?>