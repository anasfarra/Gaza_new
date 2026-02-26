<?php

use Illuminate\Support\Facades\File;

$migrations = [
    'database/migrations/2026_02_24_073848_create_projects_table.php' => <<<'EOT'
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('slug', 250)->unique();
            $table->longText('description')->nullable();
            $table->foreignId('damage_report_id')->constrained('damage_reports')->onDelete('cascade');
            $table->foreignId('beneficiary_id')->constrained('beneficiaries')->onDelete('cascade');
            $table->foreignId('contractor_id')->nullable()->constrained('contractors')->onDelete('set null');
            $table->enum('project_type', ['housing', 'infrastructure', 'commercial', 'educational', 'healthcare']);
            $table->enum('status', ['planning', 'approved', 'ongoing', 'paused', 'completed', 'cancelled'])->default('planning');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('progress_percentage')->default(0);
            $table->decimal('total_budget', 12, 2);
            $table->decimal('spent_amount', 12, 2)->default(0.00);
            $table->boolean('featured')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
EOT,

    'database/migrations/2026_02_24_073858_create_suppliers_table.php' => <<<'EOT'
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('business_license_number', 50)->nullable()->unique();
            $table->string('registration_number', 50)->nullable();
            $table->integer('products_count')->default(0);
            $table->decimal('rating', 3, 2)->default(5.00);
            $table->enum('verification_status', ['unverified', 'verified', 'trusted'])->default('unverified');
            $table->timestamp('verified_at')->nullable();
            $table->string('email', 100);
            $table->string('password', 255);
            $table->string('email_verified_at', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
EOT,

    'database/migrations/2026_02_24_073859_create_products_table.php' => <<<'EOT'
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained('suppliers')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('name', 200);
            $table->string('slug', 250)->unique();
            $table->longText('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock_quantity')->default(0);
            $table->string('unit_type', 50)->nullable();
            $table->decimal('rating', 3, 2)->default(5.00);
            $table->enum('status', ['available', 'out_of_stock', 'discontinued'])->default('available');
            $table->timestamps();

            $table->index(['supplier_id', 'category_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
EOT,

    'database/migrations/2026_02_24_073858_create_orders_table.php' => <<<'EOT'
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->foreignId('budget_id')->constrained('budgets');
            $table->string('order_number', 50)->unique();
            $table->enum('status', ['pending', 'confirmed', 'shipped', 'delivered', 'cancelled'])->default('pending');
            $table->decimal('total_amount', 12, 2);
            $table->timestamp('ordered_at')->useCurrent();
            $table->timestamp('delivered_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index(['project_id', 'supplier_id', 'budget_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
EOT,

    'database/migrations/2026_02_24_073859_create_order_items_table.php' => <<<'EOT'
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products');
            $table->integer('quantity');
            $table->decimal('unit_price', 10, 2);
            $table->decimal('subtotal', 12, 2)->nullable();
            $table->timestamps();

            $table->index(['order_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
EOT,
];

foreach ($migrations as $path => $content) {
    if (file_exists($path)) {
        file_put_contents($path, $content);
        echo "Updated: $path\n";
    } else {
        echo "File not found: $path\n";
    }
}
