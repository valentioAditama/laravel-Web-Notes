<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\notes;

class Users extends Component
{
    public $users, $name, $notes, $users_id;
    public $isModal = 0;

    public function render()
    {
        $this->users = notes::all();
        return view('livewire.users');
    } 

    public function create(){
        $this->resetFields();
        $this->openModal();
    }

    public function resetFields(){
        $this->notes = '';
        $this->name = '';
    }

    public function openModal(){
        $this->isModal = true;
    }

    public function closeModal(){
        $this->isModal = false;
    }

    public function store()
    {
        //MEMBUAT VALIDASI
        $this->validate([
            'name' => 'required',
            'notes' => 'required',
        ]);

        //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
        //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
        //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
        notes::updateOrCreate(['id' => $this->users_id], [
            'name' => $this->name,
            'notes' => $this->notes
        ]);

        //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
        session()->flash('message', $this->users_id ? 'notes updated!' : 'notes created!');
        $this->closeModal(); //TUTUP MODAL
        $this->resetFields(); //DAN BERSIHKAN FIELD
    }

    public function delete($id){
        $users = notes::find($id);
        $users->delete();
        session()->flash('message', $users->name. 'Dihapus');
    }
}
