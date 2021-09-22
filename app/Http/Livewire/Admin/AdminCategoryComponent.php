<?php

namespace App\Http\Livewire\Admin;

use App\Models\category;
use Livewire\Component;
use Livewire\WithPagination;
class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id) {
        $category = Category::find($id);
        $category->delete();
        session()->flash('messageDeleteCategory' , 'Category has been Deleted successfully');
    }

    public function render()
    {
        $categories = Category::paginate(7);
        return view('livewire.admin.admin-category-component' , ['categories' => $categories])->layout('master');
    }
}
