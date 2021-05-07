<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ContactMessageMail;
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
        $partners =  $this->ecoturismCenter->where('type','socio')->where('is_active',1)->simplePaginate(8);
        $ecoturismCenters = $this->ecoturismCenter->where('type','colaborador')->where('is_active',1)->take(6)->get();
        return view('partners',compact('partners','ecoturismCenters'));
    }

    public function colaboradores()
    {
        $colaboradores = $this->ecoturismCenter->orderBy('id','DESC')->get();
        return view('colaboradores',compact('colaboradores'));
    }

    public function place_detail($slug)
    {
        $place = $this->ecoturismCenter->findWithSlug($slug);
        $ecoturismCenters = $this->ecoturismCenter->inRandomOrder()->orderBy('created_at','DESC')->take(6)->get();
        return view('place_detail',compact('place','ecoturismCenters'));
    }

    public function contact(Request $request,$slug_place)
    {

        try {

            $place = $this->ecoturismCenter->findWithSlug($slug_place);

            $contactData = $request->all();

            $mail = new ContactMail($contactData,$place);

            \Mail::to('reservaciones@sendasur.org')
                ->cc(['developer@sendasur.org'])
                ->send($mail);

            return back()->with('status_success','Reservación enviada correctamente');

        } catch (\Exception $ex) {
            dd($ex);
        }

    }

    public function contact_form()
    {
        return view('contact');
    }

    public function contact_message(Request $request)
    {

        $contactData = $request->all();

        $mail = new ContactMessageMail($contactData);

        \Mail::to('contacto@sendasur.org')
            ->cc(['developer@sendasur.org'])
            ->send($mail);

        return back()->with('status_success','Mensaje enviado correctamente');

    }

    public function about()
    {
        return view('about');
    }
}
