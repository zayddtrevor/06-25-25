<?php

namespace App\Livewire;

use Livewire\Component;

class TestPageTable extends Component
{
    public $name;
    public $username;
    public $password;
    public function addUser(){

    }
    public function render()
    {
        return view('livewire.test-page-table');
    }
}
