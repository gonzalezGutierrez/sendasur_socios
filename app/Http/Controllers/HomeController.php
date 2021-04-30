<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EcoturismCenter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->ecoturismCenter = new EcoturismCenter();
    }
    
    public function index()
    {
        $partners = $this->ecoturismCenter->takeByType($type='socio',$take=6);
        $ecoturismCenters = $this->ecoturismCenter->takeByType($type='colaborador',$take=6);
        return view('home',compact('partners','ecoturismCenters','ecoturismCenters'));
    }

    public function partners()
    {
        $partners =  $this->ecoturismCenter->findByType('socio','');
        $ecoturismCenters = $this->ecoturismCenter->takeByType($type='colaborador',$take=4);
        return view('partners',compact('partners','ecoturismCenters'));
    }

    public function paterns_detail($slug)
    {
        $partner = $this->ecoturismCenter->findWithSlug($slug);
        $ecoturismCenters = $this->ecoturismCenter->takeByType($type='colaborador',$take=4);
        return view('partner_detail',compact('partner','ecoturismCenters'));
    }
}
