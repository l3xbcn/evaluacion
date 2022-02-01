<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
     public function run() {
        Employee::factory()
            ->count(50)
            ->create();
         
     }
    
     public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'department' => 'Department of ' . $this->faker->name()
        ];
    }
}
