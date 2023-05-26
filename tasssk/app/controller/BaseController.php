<?php
namespace app\controllers;
abstract class BaseController{
    protected function load_view(string $view, array $data = []) {
        extract($data);
        require __DIR__ . '/../../views/layout.php';
    }
}


