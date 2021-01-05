<?php
    /*
     * base controller
     * loads models and views
     */

    class Controller {

        // Load model
        public function model($model){
            // require model files
            require_once '../app/models/' . $model . '.php';

            // instantiate model
            return new $model();
        }

        // load viw
        public function view($view, $data = [] ){

            // check view file
            if(file_exists('../app/views/' . $view . '.php')){

                require_once '../app/views/' . $view . '.php';

            }else{

                // view does not exist
                die('View does not exist');
            }
        }
    }