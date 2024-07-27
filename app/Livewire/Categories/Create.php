<?php

namespace App\Livewire\Categories;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Category;

class Create extends ModalComponent
{

    use LivewireAlert;

    public $name;


    public function render()
    {
        return view('livewire.categories.create');
    }





    public function store()
    {
        $this->validate([
           
		'name' => 'required',
        ]);

        Category::create([
            
			'name' => $this-> name
        ]);

        $this->alert('success', 'Category Created Successfully', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false
        ]);

        $this->closeModalWithEvents(['categoriesCreated']);
    }
}
