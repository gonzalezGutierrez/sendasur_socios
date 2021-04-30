<?php

namespace Database\Factories;

use App\Models\EcoturismCenter;
use Illuminate\Database\Eloquent\Factories\Factory;

class EcoturismCenterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EcoturismCenter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type_rand = rand(0,1);
        return [
            'name'=>$this->faker->name,
            'slug'=>$this->faker->slug,
            'image_url'=>$this->faker->imageUrl(1920,800),
            'description'=>$this->faker->name,
            'description_large'=>$this->faker->text,
            'ubication'=>$this->faker->text,
            'activities'=>$this->faker->text,
            'type'=>$type_rand == 1 ? 'socio' : 'colaborador'
        ];
    }
}
