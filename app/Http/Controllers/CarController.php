<?php

namespace App\Http\Controllers;
use App\Car;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CarController extends Controller
{
	public function index(){
		$data = Car::all();
		return view('Car.index', ['allData' =>$data]);
		
	}

    public function create(){
    	return view('Car.create');
    }

    public function store(Request $request){
    	$data = $request->all();
    	Car::create($data);
    	Session::flash('message', 'Car Model Added Successfully');
    	return redirect()->back();
    }

    // public ]function view($id)
    // {
    // 	$data = Car::find($id);
    // 	return view('Car.view',compact('data'));
    // }

    public function edit($id){
    	$data = Car::find($id);
    	return view('Car.edit',compact('data'));
    }

    public function update(Request $request, $id){
    	$data = $request->all();
    	$existing_data = Car::find($id);
    	$existing_data->update($data);

    	Session::flash('message', 'Car Model Updated Successfully');
    	return redirect('/car');

    }

    public function delete($id){
    	$data = Car::find($id);
    	$data->delete();

    	Session::flash('message', 'Car Model Deleted Successfully');
    	return redirect('/car');
    }
}
