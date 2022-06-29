<?php

namespace Database\Factories;

use App\Models\Week;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'week_id' => Week::factory(),
            'driver_id' => Driver::factory(),

            'monday_hours' => $this->faker->randomDigit,
            'monday_cleaning' => $this->faker->randomDigit,

            'tuesday_hours' => $this->faker->randomDigit,
            'tuesday_cleaning' => $this->faker->randomDigit,

            'wednesday_hours' => $this->faker->randomDigit,
            'wednesday_cleaning' => $this->faker->randomDigit,

            'thursday_hours' => $this->faker->randomDigit,
            'thursday_cleaning' => $this->faker->randomDigit,

            'friday_hours' => $this->faker->randomDigit,
            'friday_cleaning' => $this->faker->randomDigit,

            'saturday_hours' => $this->faker->randomDigit,
            'saturday_cleaning' => $this->faker->randomDigit,

            'sunday_hours' => $this->faker->randomDigit,
            'sunday_cleaning' => $this->faker->randomDigit,

            'food_allowance' => $this->faker->randomDigit,
            'fuel_allowance' => $this->faker->randomDigit,

            'total_hours' => $this->faker->randomDigit,

            'total_hours' => $this->faker->randomDigit,

            'net_pay' => $this->faker->numberBetween($min = 0, $max = 600),

            'payslip' => $this->faker->imageUrl($width = 200, $height = 200),

            'deductions' => $this->faker->numberBetween($min = 0, $max = 50),
            'expenses' => $this->faker->numberBetween($min = 0, $max = 50),

            'actual_pay' => $this->faker->numberBetween($min = 0, $max = 400),
        ];
    }
}