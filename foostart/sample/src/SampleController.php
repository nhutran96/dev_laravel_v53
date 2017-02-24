<?php

namespace Foostart\Sample;

use App\Http\Controllers\Controller;
<<<<<<< .mine
use Foostart\Sample\Models\Samples;
||||||| .r25
=======
use Foostart\Sample\Models\Sample;
>>>>>>> .r30

Class SampleController extends Controller {
    public function index() {
        return view('sample::index', array());
    }
    public function getData(){
    	$sp = new Sample();
    	$result = $sp->getAllData();

<<<<<<< .mine
    public function getData() {
        $sp = new samples();
        $kq = $sp->getData();
//        var_dump($kq->toArray())
//                or die;
        return view('sample::sample')->with('data', $kq);
    }

}
||||||| .r25
}=======
    	return view('sample::show')->with('data', $result);
    	//var_dump($result->toArray());
    }
}>>>>>>> .r30
