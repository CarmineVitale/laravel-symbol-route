<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        $name = 'Classe 12';

        // $data = [
        //     'students' => ['Carmine', 'Matteo', 'Francesco'],
        //     'teachers' => ['Paolo', 'Lorenzo']
        // ];
        $teachers = ['Paolo', 'Lorenzo','Michele', 'Veronica'];
        $students = ['Carmine', 'Matteo', 'Francesco','Davide','Luigi','Flavio'];
        return view('about.about', compact('name', 'teachers', 'students'));
    }
}
