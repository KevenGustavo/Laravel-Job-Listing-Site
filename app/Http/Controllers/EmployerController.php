<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index(){
        $employers = Employer::latest()->get();

        return view("employers.index",["employers"=>$employers]);
    }
}
