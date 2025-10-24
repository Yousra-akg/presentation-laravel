<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    protected $developerService;
    protected $projectService;

    public function __construct(DeveloperService $developerService, ProjectService $projectService)
    {
        $this->developerService = $developerService;
        $this->projectService = $projectService;
    }
    public function home()
    {
        $developer = $this->developerService->get_profile();
        $featuredProjects = $this->projectService->get_featured_projects(3);

        return view('home', compact('developer', 'featuredProjects'));
    }

    public function about()
    {
        $developer = $this->developerService->get_profile();

        return view('about', compact('developer'));
    }

    public function projects()
    {
        $projects = $this->projectService->get_all_projects();

        return view('projects.index', compact('projects'));
    }

    public function show(int $id)
    {
        $project = $this->projectService->get_project_by_id($id);

        if (!$project) {
            abort(404);
        }

        return view('projects.show', compact('project'));
    }
}
