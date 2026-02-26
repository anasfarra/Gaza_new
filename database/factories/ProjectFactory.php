<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;
use App\Models\Country;
use App\Models\Beneficiary;
use App\Models\DamageReport;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        $name = $this->faker->sentence(3);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'country_id' => Country::inRandomOrder()->first()?->id ?? Country::factory(),
            'beneficiary_id' => Beneficiary::factory(),
            'damage_report_id' => DamageReport::factory(),

            // تصحيح: استخدام القيم المسموحة فقط في قاعدة البيانات
            'project_type' => $this->faker->randomElement(['housing', 'infrastructure', 'commercial', 'educational', 'healthcare']),

            // تصحيح: استخدام القيم المسموحة فقط لحقل الحالة
            // ملاحظة: يبدو أن 'ongoing' هي المقابل لـ 'active' في نظامك
            'status' => $this->faker->randomElement(['planning', 'approved', 'ongoing', 'paused', 'completed', 'cancelled']),

            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'end_date' => $this->faker->dateTimeBetween('now', '+2 years'),
            'progress_precentage' => $this->faker->numberBetween(0, 100),
            'total_budget' => $this->faker->randomFloat(2, 10000, 500000),
            'spent_amount' => function (array $attributes) {
                return $this->faker->randomFloat(2, 0, $attributes['total_budget']);
            },
            'featured' => $this->faker->boolean(20),
        ];
    }
}
