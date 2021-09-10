<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\notes;
use Illuminate\Support\Facades\DB;

class HomeAdmin extends Component
{
    public $users, $containerUsers, $notesMessage, $nameUsers;

    public function render()
    {
        $this->users = notes::orderBy('created_at', 'asc')->get();
        $this->containerUsers = notes::orderBy('id', 'desc')->first();
        return view('livewire.home-admin');
    }

    // public function containerUsers() 
    // {
    //     $containerUsers = DB::select('SELECT id from users');
    //     return view('livewire.home-admin');
    // }

    public function delete($id){
        $users = notes::find($id);
        $users->delete();
        session()->flash('message', $users->name. 'Dihapus');
    }
}
