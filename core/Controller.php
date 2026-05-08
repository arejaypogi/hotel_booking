<?php

class Controller {

    public function view($view, $data = []) {
        require_once "../appviews/" . $view . ".php";
    }
}
