<?php

namespace App\Repositories\Products;


use App\Models\Products\ProductParam;

class ProductParamRepository
{
    protected $model;

    public function __construct(ProductParam $productParam)
    {
        $this->model = $productParam;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $productParam = $this->model->findOrFail($id);
        $productParam->update($data);
        return $productParam;
    }

    public function delete($id)
    {
        $productParam = $this->model->findOrFail($id);
        $productParam->delete();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function all()
    {
        return $this->model->all();
    }
}
