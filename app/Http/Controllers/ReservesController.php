<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Reserve;

class ReservesController extends Controller
{
    public function index(){

        $this->authorize('create', Product::class);// ??? Product ? Reserve

        $reserves = Reserve::orderBy('date', 'asc')->get();
        //$reserves = Reserve::all();

        return view('reserve.reserve' ,compact(['reserves']));
    }
    public function store(){

        $this->authorize('create', Product::class); // ??? Product ? Reserve

        $data = request()->validate([
            'persons' => 'required|max:50',
            'date' => 'required|max:50',
            'time' => 'required|max:50',
        ]);
        $reserve = new Reserve();
        $reserve->persons = $data['persons'];
        $reserve->date = $data['date'];
        $reserve->time = $data['time'];
        $reserve->save();


        return back();
    }
    public function destroy(Reserve $reserve){
        $reserve->delete();
        return back();
    }
}
