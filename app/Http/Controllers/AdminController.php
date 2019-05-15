<?php
/**
 * PHP version 7.2.13 and Laravel version 5.8.17
 * Admin Controller Class
 * Provides functionality for maintainining the admin basic detail
 *
 * @Package             Controllers
 * @Author              AC Jerin Monish
 * @Created On          15-05-2018
 * @Modified            AC Jerin Monish
 * @Modified On         15-05-2018
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listAllUsers(){
        $data = User::all();
        return view('admin-list',['data' => $data]);
    }
}
