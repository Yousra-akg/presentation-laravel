<?php

namespace App\Services;

class TechnologieService
{
    public function get_all_technologies(): array
    {
        return [
            ['id' => 1, 'nom' => 'React'],
            ['id' => 2, 'nom' => 'Redux'],
            ['id' => 3, 'nom' => 'React Router'],
            ['id' => 4, 'nom' => 'Tailwind CSS'],
            ['id' => 5, 'nom' => 'Node.js'],
            ['id' => 6, 'nom' => 'MongoDB'],
            ['id' => 7, 'nom' => 'Express.js'],
            ['id' => 8, 'nom' => 'JWT'],
            ['id' => 9, 'nom' => 'Git'],
            ['id' => 10, 'nom' => 'Python'],
            ['id' => 11, 'nom' => 'Flask'],
            ['id' => 12, 'nom' => 'Laravel'],
            ['id' => 13, 'nom' => 'MySQL'],
            ['id' => 14, 'nom' => 'PHP'],
            ['id' => 15, 'nom' => 'JavaScript'],
            ['id' => 16, 'nom' => 'HTML5'],
            ['id' => 17, 'nom' => 'CSS3'],
            ['id' => 18, 'nom' => 'Bootstrap'],
        ];
    }

    public function get_technology_by_id(int $id): ?array
    {
        $technologies = $this->get_all_technologies();
        foreach ($technologies as $tech) {
            if ($tech['id'] === $id) {
                return $tech;
            }
        }
        return null;
    }
}
