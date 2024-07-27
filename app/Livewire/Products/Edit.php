<?php
namespace App\Livewire\Products;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Product;

class Edit extends ModalComponent
{
    use LivewireAlert;

    public $name, $description, $price, $image, $category_id;
    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $record = Product::find($id);
        
		$this->name = $record->name;
		$this->description = $record->description;
		$this->price = $record->price;
		$this->image = $record->image;
		$this->category_id = $record->category_id;

    }

    public function render()
    {
        return view('livewire.products.edit');
    }




    //update
    public function update()
    {

        $this->validate([
           
		'name' => 'required',
		'description' => 'required',
		'price' => 'required',
		'image' => 'required',
		'category_id' => 'required',
        ]);

        $record = Product::find($this->id);
        $record->update([
            
			'name' => $this-> name,
			'description' => $this-> description,
			'price' => $this-> price,
			'image' => $this-> image,
			'category_id' => $this-> category_id
        ]);

        $this->closeModalWithEvents(['productsUpdated']);
       // $this->reset();
    }
}
