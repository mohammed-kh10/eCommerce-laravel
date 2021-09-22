<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id) {
        $product = Product::find($id);
        $product->delete();
        session()->flash('messageDeleteProduct' , 'Product has been Deleted successfully');
    }

    public function render()
    {
        $products = product::paginate(10);
        return view('livewire.admin.admin-product-component' , ['Products' => $products])->layout('master');
    }
}
