<?php

namespace App\Services;

class ProjectService
{
    public function get_all_projects(): array
    {
        return [
            [
                'id' => 1,
                'titre' => 'Site de Location de Voitures',
                'description' => 'Une application web complète permettant aux utilisateurs de parcourir, réserver et gérer des locations de voitures en temps réel. Interface moderne et intuitive avec un système de paiement sécurisé.',
                'image' => 'image3.jpg',
                'dateDebut' => '26 Novembre 2024',
                'dateFin' => '17 Décembre 2024',
                'technologies' => ['React', 'Redux', 'React Router', 'Tailwind CSS', 'Node.js', 'MongoDB', 'Express.js', 'JWT', 'Git']
            ],
            [
                'id' => 2,
                'titre' => 'Application de Gestion de Tâches',
                'description' => 'Application Python avec MongoDB pour gérer les tâches quotidiennes. Interface intuitive avec notifications et système de priorités.',
                'image' => 'projet.jpg',
                'dateDebut' => '15 Octobre 2024',
                'dateFin' => '30 Octobre 2024',
                'technologies' => ['Python', 'MongoDB', 'Flask']
            ],
            [
                'id' => 3,
                'titre' => 'Site de Planification de Voyage',
                'description' => 'Plateforme complète avec Laravel et React pour gérer hôtels, vols et activités. Système de réservation intégré et paiement sécurisé.',
                'image' => 'image2.png',
                'dateDebut' => '1 Septembre 2024',
                'dateFin' => '20 Septembre 2024',
                'technologies' => ['Laravel', 'React', 'MySQL', 'Tailwind CSS']
            ],
            [
                'id' => 4,
                'titre' => 'Site Web de Gestion des Élections',
                'description' => 'Application web permettant d\'organiser et gérer des élections en ligne : ajout de candidats, suivi des résultats et vote sécurisé unique.',
                'image' => 'prj5.jpeg',
                'dateDebut' => '10 Août 2024',
                'dateFin' => '25 Août 2024',
                'technologies' => ['PHP', 'MySQL', 'JavaScript']
            ],
            [
                'id' => 5,
                'titre' => 'Site Web de Photographie',
                'description' => 'Site professionnel présentant un portfolio photo avec galeries, projets récents et formulaire de réservation de séance.',
                'image' => 'prj4.jpg',
                'dateDebut' => '5 Juillet 2024',
                'dateFin' => '15 Juillet 2024',
                'technologies' => ['HTML5', 'CSS3', 'JavaScript']
            ],
            [
                'id' => 6,
                'titre' => 'Site Web de Gestion de Bibliothèque',
                'description' => 'Application web permettant la gestion complète d\'une bibliothèque : ajout, suppression, emprunt de livres et gestion des adhérents.',
                'image' => 'prj6.jpeg',
                'dateDebut' => '1 Juin 2024',
                'dateFin' => '20 Juin 2024',
                'technologies' => ['PHP', 'MySQL', 'Bootstrap']
            ],
        ];
    }

    public function get_featured_projects(int $limit = 3): array
    {
        $projects = $this->get_all_projects();
        return array_slice($projects, 0, $limit);
    }

    public function get_project_by_id(int $id): ?array
    {
        $projects = $this->get_all_projects();
        foreach ($projects as $project) {
            if ($project['id'] === $id) {
                return $project;
            }
        }
        return null;
    }
}
