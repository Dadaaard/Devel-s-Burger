<?php
namespace App\Http\Controllers;
use App\Models\ReservationModel;
use Illuminate\Http\Request;
class Reservationcontroller extends Controller
{
    public function index()
    {
    $reservation_models = ReservationModel::latest()->paginate(10);
    return view ('home.homepage',compact('reservation_models'))
    ->with('i',(request()->input('page',1)-1)*10);
    }
    
 public function create()
 {
 return view('reservation.reserving');
 }

 public function store(Request $request)
 {
 $request->validate([
 'fname'=>'required',
 'lname'=>'required',
 'contactno'=>'required',
 ]);
 ReservationModel::create($request->all());
 return redirect()->route('reservation_models.index')
 ->with('success','Patient record is added successfully!');
 }
}