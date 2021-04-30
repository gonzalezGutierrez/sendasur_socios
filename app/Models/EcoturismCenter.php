<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class EcoturismCenter extends Model
{
    use HasFactory;

    protected $table = 'ecoturism_centers';
    protected $primaryKey = 'id';

    protected $fillable = [];

    private $fields_list = ['id','slug','name','type','image_url','is_active','created_at','description'];

    private $fields_detail = [
        'name',
        'slug',
        'image_url',
        'description',
        'description_large',
        'ubication',
        'activities'
    ];

    public function setSlugAttribute($name)
    {
        $this->attributes['slug'] = Str::slug($name);
    }
    
    public function findWithSlug($slug)
    {
        return $this->where('slug',$slug)->firstOrFail($this->fields_detail);
    }

    public function findByType($type,$like)
    {
        return $this->getEcotourismCenter($type,$like);
    }

    public function takeByType($type,$take)
    {
        return $this->getEcoturismCenterTake($type,$take);
    }

    public function scopeGetEcoturismCenterTake($query,$type,$take)
    {
        return $query->where('type',$type)
            ->inRandomOrder()
            ->orderBy('id','DESC')
            ->take($take)
            ->get($this->fields_list);

    }

    public function scopeGetEcotourismCenter($query , $type,$like) 
    {
        return $query->filter($like)->where('is_active',1)
            ->where('type',$type)
            ->orderBy('id','DESC')
            ->simplePaginate(10,$this->fields_list);            
    }

    public function scopeFilter($query , $like) 
    {
        return $query->when($like != null , function($query) use($like){
            return $query->where('name','LIKE','%'.$like.'%');
        });
    }

}
