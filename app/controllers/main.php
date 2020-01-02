<?php

class Main extends Controller {

    /*
     * http://localhost/
     */
    function index() {
        
        if (!isset($_SESSION['login'])) {

            header('Location: /login');

        } else {

            $this->view('template/header');
            $this->view('home/index');
            $this->view('template/footer');
        }
        
    }

    /*
     * http://localhost/phpinfo
     */
    function phpinfo() {
        echo phpinfo();
        die;
    }

}

?>