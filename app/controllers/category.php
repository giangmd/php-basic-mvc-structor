<?php

class Category extends Controller {

    /*
     * http://localhost/category
     */
    function index ()
    {
        $this->view('template/header');
        $this->view('category/index');
        $this->view('template/footer');
    }

    public function detail($params='')
    {
        $data = [
            'page' => 'Category detail',
            'params' => $params,
            'items' => ['a', 'bb', 'ccc']
        ];

        $this->view('template/header');
        $this->view('category/detail', $data);
        $this->view('template/footer');
    }

}

?>