<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\StoreClientCompanyRequest;
use App\Repositories\Clients\ClientCompanyRepository;
use App\Repositories\Clients\ClientRepository;
use App\Repositories\Products\ProductRepository;
use App\Models\Clients\ClientCompany;
use App\Models\Clients\Client;

class OrderController extends Controller
{
    protected $clientRepository;
    protected $clientAddressRepository;
    protected $clientCompanyRepository;
    protected $clientGroupRepository;
    protected $productRepository;

    public function __construct(
        ClientRepository $clientRepository,
        ProductRepository $productRepository

    ) {
        $this->middleware('auth');
        $this->clientRepository = $clientRepository;
        $this->productRepository = $productRepository;
    }

    public function index()
    {


        return view('backend.sales.orders.index', compact('dataTable'));
    }



    public function create()
    {
        $clients =  $this->clientRepository->getAllClientsIdAndName();
        $products =  $this->productRepository->getAllProductsIdAndName();
        return view('backend.sales.orders.create', [
            'clients' => $clients,   // Przekazujemy dane jako tablicę obiektów
            'products' => $products  // Przekazujemy dane jako tablicę obiektów
        ]);
    }
}
