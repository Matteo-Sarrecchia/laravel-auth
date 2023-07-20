<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [                
            'title'=> fake() -> title(),
            'project_leader_name'=> fake() -> name(),
            'people'=> fake() -> numberBetween(1, 100),
            'date_start'=> fake() -> date(),
            'duration'=> fake() -> numberBetween(10, 1000),
            'description'=> fake() -> paragraph()
        ];
    }
}
