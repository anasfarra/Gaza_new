<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *

     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'status' => $this->faker->randomElement(['active', 'inactive', 'suspended']),

            // التعديل هنا: حاول جلب دور موجود، أو أنشئ دوراً باسم فريد إذا لم يوجد
            'role_id' => Role::inRandomOrder()->first()?->id ?? Role::factory()->create(['name' => 'User_' . uniqid()])->id,

            // التعديل هنا أيضاً للدول لتجنب مشاكل مشابهة
            'country_id' => Country::inRandomOrder()->first()?->id ?? Country::factory(),

            'last_login_at' => $this->faker->dateTime(),


        ];
    }
}
