<?php

namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        //echo "(before) ";
        //return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        //echo " (after)";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {

        View::renderTemplate('Home/index.html', [
            'name'    => 'Ahmad Azizi',
            'colours' => ['red', 'green', 'blue']
        ]);
    }
}
