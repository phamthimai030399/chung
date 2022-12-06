<?php
    class Home_controller extends MY_Controller {
        function __construct()
        {
            $this->load_model('Category_model');
            $this->load_model('Product_model');
        }

        function index () {
            $Category_model = new Category_model();
            $Product_model = new Product_model();
            $this->load_view('home');
        }
    }

?>