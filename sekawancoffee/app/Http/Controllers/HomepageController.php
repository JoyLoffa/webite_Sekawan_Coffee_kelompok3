<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }

    public function about() {
        $data = array('title' => 'about');
        return view('homepage.about', $data);
    }

    public function onlineorder() {
        $data = array('title' => 'onlineorder');
        
        return view('homepage.onlineorder', $data);
    }

    public function history() {
        $data = array('title' => 'history');
        return view('homepage.history', $data);
    }

    public function tentangkami() {
        $data = array('title' => 'Tentang Kami');
        return view('homepage.tentangkami', $data);
    }

    public function laman() {
        $data = array('title' => 'lamanadmin');
        return view('home', $data);
    }

    public function admin() {
        $data = array('title' => 'admin');
        return view('admin.index', $data);
    }
}
