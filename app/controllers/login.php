<?php

class Login extends Controller {

    /*
     * http://localhost/login
     */
    function index () {

        if (!isset($_SESSION['login'])) {

            $this->view('template/header');
            $this->view('login');
            $this->view('template/footer');

        } else {

            header('Location: /');

        }

    }

    /*
     * http://localhost/login/log_in
     */
    function log_in () {

        // Loads /models/example.php
        $this->model('Example');

        if ($this->Example->exampleMethod()) // Example->exampleMethod() from /models/example.php
            $_SESSION['login'] = "ExampleLogin";

        header("Location: /");

    }

    /*
     * http://localhost/login/logout
     */
    function logout () {

        $_SESSION = [];
        session_unset();
        header('Location: /');

    }

}

?>