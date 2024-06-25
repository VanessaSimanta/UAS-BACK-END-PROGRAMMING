<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\menu;
use App\Models\AboutUs;
use App\Models\home;
use App\Models\testimonies;
use App\Models\myod;

class DataController extends Controller
{
    public function index(Request $req)
    {
        $data = contact::all();
        $menu = menu::all();
        $AboutUs = AboutUs::all();
        $home = home::all();
        $testimonies = testimonies::all();
        $myod = myod::all();
        
        return view('welcome', ['data' => $data, 'menu' => $menu, 'about_us' => $AboutUs, 'home' => $home, 'testimonies' => $testimonies, 'myod' => $myod]);
    }

    public function getMYOD (Request $req, ?string $endpoint = null)
    {
        $data = contact::all();
        $menu = menu::all();
        $AboutUs = AboutUs::all();
        $home = home::all();
        $testimonies = testimonies::all();

        $endpointz = myod::all();
        foreach ($endpointz as $row) {
            $e = new \stdClass();
            $e->type = $row->type;
            $e->header = $row->header;
            $e->img_menu = $row->img_menu;
            $e->decs = $row->decs;
            
            $endpointz = $e;
            $myodData = array();
            $myodData[] = $endpointz;
        }
        return view('make-your-own-drink', ['data' => $data, 'menu' => $menu, 'about_us' => $AboutUs, 'home' => $home, 'testimonies' => $testimonies, 'myodData' => $myodData, 'parameter' => $endpoint]);
    }
}