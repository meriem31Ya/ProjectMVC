<?php
namespace App\Controllers;

use App\Models\Message;

class HomeController {
    public function index() {
        $message = new Message("Hello from MVC !");
        include __DIR__ . '/../Views/Home.php';
    }
}
