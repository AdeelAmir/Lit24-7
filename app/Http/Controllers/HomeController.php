<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Saler;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = new FirebaseController();
        $st = Saler::sum('total_sales');
        $ms = Sale::whereMonth('created_at', date('m'))
        ->whereYear('created_at', date('Y'))
        ->get(['ticket_price'])->sum('ticket_price');
        return view('admin.dashboard',['page' => 'Dashboard','totalearnings' => $st ,
        'monthlyearnings' => $ms,
        'users' => count($users->getallusers())
    ]);
    }

    public function salers(Request $request)
    {
        return view('admin.salers',['page' => 'Salers', 'salers' => Saler::all()]);
    }

    public function sales($id)
    {
        return view('admin.sales',['page' => 'Sales', 'sales' => Sale::where('ticket_owner_id',$id)->get()]);
    }

    public function users()
    {
        $fd = new FirebaseController();
        //return $fd->getallusers();
        return view('admin.users',['page' => 'Users','users' => $fd->getallusers()]);
    }
}
