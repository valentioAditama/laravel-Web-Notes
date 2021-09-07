<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notes;

class adminController extends Controller
{
    public $users, $name, $notes, $users_id;
    
    public function home(){
        $this->users = notes::orderBy('created_at', 'DESC')->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA
        return view('admin.home');
    }
}
