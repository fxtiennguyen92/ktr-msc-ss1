<?php
namespace App\Http\Controllers;

interface Movable {
    public function moveRight();
    public function moveLeft();
    public function moveForward();
    public function moveBack();
}