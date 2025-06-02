<?php
namespace App\Models;

class Message {
    private string $text;

    public function __construct(string $text) {
        $this->text = $text;
    }

    public function get(): string {
        return $this->text;
    }
}
