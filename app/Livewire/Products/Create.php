<?php

namespace App\Livewire\Products;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Product;

class Create extends ModalComponent
{

    use LivewireAlert;

    public $name, $description, $price, $image, $category_id;


    public function render()
    {
        return view('livewire.products.create');
    }





    public function store()
    {
        $this->validate([
           
		'name' => 'required',
		'description' => 'required',
		'price' => 'required',
		'image' => 'required',
		'category_id' => 'required',
        ]);

        Product::create([
            
			'name' => $this-> name,
			'description' => $this-> description,
			'price' => $this-> price,
			'image' => $this-> image,
			'category_id' => $this-> category_id
        ]);

        $this->alert('success', 'Product Created Successfully', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false
        ]);

        $this->closeModalWithEvents(['productsCreated']);
    }
}
