<?php

namespace App\Http\Controllers;

use App\Http\Repositories\GoodRepository;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    protected $goodRepository;

    public function __construct(GoodRepository $goodRepository)
    {
        $this->goodRepository = $goodRepository;
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        //var_dump($this->goodRepository);
        //dd($this->goodRepository);
        $goods = $this->goodRepository->getAll();
        //var_dump($goods);
        view('admin.goods.index',compact('goods'));
    }
}
