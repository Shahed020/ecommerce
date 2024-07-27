<?php
namespace App\Livewire\Categories;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Category;

class Edit extends ModalComponent
{
    use LivewireAlert;

    public $name;
    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $record = Category::find($id);
        
		$this->name = $record->name;

    }

    public function render()
    {
        return view('livewire.categories.edit');
    }




    //update
    public function update()
    {

        $this->validate([
           
		'name' => 'required',
        ]);

        $record = Category::find($this->id);
        $record->update([
            
			'name' => $this-> name
        ]);

        $this->closeModalWithEvents(['categoriesUpdated']);
       // $this->reset();
    }
}
