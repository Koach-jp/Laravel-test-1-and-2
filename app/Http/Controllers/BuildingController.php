<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function buildingGet() {
        return '建物です';
    }

    public function roomGet($room) {
        return "部屋番号は{$room}です。";
    }
}
