<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beneficiary>
 */
class BeneficiaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'national_id' => $this->faker->unique()->numerify('#########'), // 9 أرقام للهوية
            'family_members_count' => $this->faker->numberBetween(1, 10),
            'family_members_names' => json_encode($this->faker->words(3)), // أو نص عادي حسب نوع الحقل
            'identification_verified_at' => $this->faker->boolean(80) ? now() : null, // 80% تم التحقق
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
}
