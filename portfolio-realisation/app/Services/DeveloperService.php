<?php

namespace App\Services;

class DeveloperService
{
    public function get_profile(): array
    {
        return [
            'nom' => 'Akajou',
            'prenom' => 'Yousra',
            'role' => 'Développeuse Full Stack',
            'bio' => 'Passionnée par le développement web, je conçois des applications performantes et intuitives, alliant design moderne et fonctionnalités robustes.',
            'email' => 'akagouyoussra@gmail.com',
            'numeroTelephone' => '+212 7 70 75 20 23',
            'localisation' => 'Tanger Maroc',
            'photoProfile' => '3.jpg'
        ];
    }
}
