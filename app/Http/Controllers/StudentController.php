<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentController extends Controller //Rohit Kumar
{
    public function index()
    {
        $students = [
            ["name" => "Radhe", "marks" => 85],
            ["name" => "Sham", "marks" => 50],
            ["name" => "Raman", "marks" => 40]
        ];

        return view('students', compact('students'));
    }
}