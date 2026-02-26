<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Beneficiary;
use App\Models\UserProfile;
// use App\Models\DamageArea; // تأكد من استدعاء الموديل

class DamageReportFactory extends Factory
{
    public function definition(): array
    {
        return [
            'beneficiary_id' => Beneficiary::factory(),

            // تأكد من وجود damage_area_id رقم 1 أو استخدم Factory
             'damage_area_id' => 1,

            'admin_id' => UserProfile::inRandomOrder()->first()?->id ?? UserProfile::factory(),

            // القيم المسموحة حسب المايكريشن: ['residential', 'commercial', 'agricultural', 'educational']
            'property_type' => $this->faker->randomElement(['residential', 'commercial', 'agricultural', 'educational']),

            // التعديل هنا: استخدام القيم المسموحة فقط
            'damage_level' => $this->faker->randomElement(['total', 'severe', 'partial', 'minor']),

            'description' => $this->faker->paragraph(),
            'estimated_cost' => $this->faker->randomFloat(2, 500, 100000),
            'is_verified' => $this->faker->boolean(),
            'verified_at' => function (array $attributes) {
                return $attributes['is_verified'] ? now() : null;
            },
        ];
    }
}
