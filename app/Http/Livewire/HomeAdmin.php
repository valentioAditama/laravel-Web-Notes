<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\notes;

class HomeAdmin extends Component
{
    public $users, $containerUsers;

    public function render()
    {
        $this->users = notes::all();
        return view('livewire.home-admin');
    }

    public function containerUsers(){
        $containerUsers = notes::where('id', 1)
                                ->orderBy('id')
                                ->take(1)
                                ->get();
    }

    public function delete($id){
        $users = notes::find($id);
        $users->delete();
        session()->flash('message', $users->name. 'Dihapus');
    }
}
