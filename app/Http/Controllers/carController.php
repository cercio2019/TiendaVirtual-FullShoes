<?php

namespace App\Http\Controllers;
use App\shoes;
use Illuminate\Http\Request;

class carController extends Controller
{
  public  function __construct()
    {
      if (!\Session::has('car')) \Session::put('car', array()); 
    }

    public function show()
    {
    	$car = \Session::get('car');
    	$total = $this->total();
    	return view('store.car', compact('car', 'total'));
    }

    public function add(shoes $shoes)
    {
    	$car = \Session::get('car');
        $shoes->quantity= 1;
    	$car[$shoes->id]= $shoes;
      
         while($shoes->quantity<=10){
          if ($car[$shoes->id]= $shoes) {
              $shoes->quantity++;
          } 
         }

    	\Session::put('car', $car);
    	return redirect()->route('car-show');
    }

    public function delete(shoes $shoes)
    {
    	$car = \Session::get('car');
    	unset($car[$shoes->id]);
    	\Session::put('car', $car);
    	return redirect()->route('car-show');
    }

    public function trash ()
    {
    	\Session::forget('car');
    	return redirect()->route('car-show');
    }

    public function update(shoes $shoes, $quantity)
    {
    	$car = \Session::get('car');
    	$car[$shoes->id]->quantity= $quantity;
    	\Session::put('car', $car);
    	return redirect()->route('car-show');
    }

    public function total()
    {
    	$car = \Session::get('car');
    	$total= 0;

    	foreach ($car as $item) {
    		$total += $item->precio * $item->quantity;
    	}
    	return $total;
    }

    public function orderDetail()
    {
    	if (count(\Session::get('car'))<=0)  return redirect()->route('shoes');
    	$car= \Session::get('car');
    	$total = $this->total();
    	return view('store.order-detail', compact('car', 'total'));
    }
}
