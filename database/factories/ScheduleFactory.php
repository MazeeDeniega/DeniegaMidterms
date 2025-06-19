<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'day_of_week' => $this->faker->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']),
            'time_slot' => $this->faker->dateTimeBetween('08:00:00', '17:00:00'),
            'room' => $this->faker->randomElement(['A101', 'B202', 'C303']),
            'term' => $this->faker->numberBetween(1, 2),
        ];
    }
}
