<?php

namespace App\View\Components;

use Illuminate\View\Component;

class dashboardAdmin extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $users;
    public $realisations;
    public $lastUser;
    public $sessions;
    public $toggle;
    public $sessionsfalse;
    public function __construct($users, $realisations, $lastUser, $sessions, $toggle, $sessionsfalse)
    {
        $this->users = $users;
        $this->realisations = $realisations;
        $this->lastUser = $lastUser;
        $this->sessions = $sessions;
        $this->toggle = $toggle;
        $this->sessionsfalse = $sessionsfalse;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard-admin');
    }
}