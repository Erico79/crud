<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FootballClub;

class ClubsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * This is a view for managing clubs
     */
    public function index() {
        $clubs = FootballClub::all();
        return view ('clubs')->with(['clubs' => $clubs]);
    }

    public function store() {
        // validation
        $data = request()->validate(['name' => 'required|unique:football_clubs']);
        FootballClub::create($data);

        request()->session()->flash('success', 'Football Club has been created.');
        return redirect()->route('clubs');
    }
}
