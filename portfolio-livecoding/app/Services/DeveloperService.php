<?php
namespace App\Services;

class DeveloperService
{
    public function getProfile()
    {
        return [
            'nom' => 'Yousra Akajou',
            'role' => 'Développeuse Fullstack',
            'bio' => 'Passionnée par le développement web et les nouvelles technologies.',
            'email' => 'akajouyoussra@gmail.com',
        ];
    }
}