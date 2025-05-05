<?php

namespace App\Http\Livewire\Backend\Products;

use Livewire\Component;
use Livewire\Attribute\On;
use App\Repositories\Products\ProductRepository;

class CategoryList extends Component
{
    public $categories;
    public $editedCategoryId = null;
    protected $productRepository;
    protected $listeners = [
        'category-added' => 'mount'
    ];
    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }
    public function mount()
    {
        $this->categories = $this->productRepository->getCategoriesWithChildren();
    }
    public function render()
    {
        return view('livewire.backend.products.category-list', [
            'categories' => $this->categories,
        ]);
    }
}
