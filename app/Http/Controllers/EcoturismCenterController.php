<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\EcoturismCentersRequest;
use App\Models\EcoturismCenter;

class EcoturismCenterController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new EcoturismCenter();
    }

    private function findResource($slug)
    {
        return $this->model->findWithSlug($slug);
    }

    private function getType($type)
    {
        return  ( $type == 'socio' || $type == 'colaborador' ) ? $type : abort(404);
    }

    private function getTitle($type)
    {
        return ( $type == 'socio' ) ? 'Socios' : 'Colaboradores';
    }

    public function index()
    {

        $places =  $this->model->orderBy('id','DESC')->get();

        return view('admin.ecotourism_centers.index',compact('places'));
    }

    public function create()
    {
        $place = $this->model;
        return view('admin.ecotourism_centers.create',compact('place'));
    }

    public function edit($slug,$type)
    {

    }

    public function show($slug)
    {
        return $this->model = $this->findResource($slug);
    }

    public function store(EcoturismCentersRequest  $request)
    {


        $this->model->name              = $request->name;
        $this->model->slug              = $request->name;
        $this->model->image_url         = $request->image_url;
        $this->model->description       = $request->description;
        $this->model->description_large = $request->description_large;
        $this->model->ubication         = $request->ubication;
        $this->model->is_active         = $request->is_active;
        $this->model->type              = $request->type;

        $this->model->save();

        return redirect("admin/centros_ecoturisticos")->with('status_success','El centro ecoturistico fue almacenado correctamente');

    }

    public function update(EcoturismCentersRequest $request , $slug,$type)
    {

        $this->model                    = $this->findResource($slug);

        $this->model->name              = $request->name;
        $this->model->slug              = $request->name;
        $this->model->image_url         = $request->image_url;
        $this->model->description       = $request->description;
        $this->model->description_large = $request->description_large;
        $this->model->ubication         = $request->ubication;
        $this->model->is_active         = $request->is_active;
        $this->model->type              = $type;

        $this->model->save();

        return redirect("secure/{$type}")->with('status_success','Centro ecoturistico fue actualizado correctamente');
    }

    public function destroy($slug,$type)
    {
        $this->model = $this->findResource($slug);

        $this->model->is_active = 0;

        $this->model->save();

        return redirect("secure/{$type}")->with('status_success','Centro ecoturistico fue actualizado correctamente');

    }


}
