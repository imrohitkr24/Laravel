<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show($id)
    {
        // Student data (stored in array)
        $students = [
            1 => ["name" => "Raman", "course" => "BCA", "city" => "Delhi"],
            2 => ["name" => "Amit", "course" => "MCA", "city" => "Mumbai"],
            3 => ["name" => "Neha", "course" => "B.Tech", "city" => "Chandigarh"]
        ];

        // Check if ID exists
        if (array_key_exists($id, $students)) {
            return view('student', ['student' => $students[$id]]);
        } else {
            return "Student not found";
        }
    }
}