<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\ProductManagement\Product\Database\create_products_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->enum('type', ['service', 'product'])->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->Integer('menufecturer_id')->nullable();
            $table->Integer('brand_id')->nullable();
            $table->Integer('sku')->nullable();
            $table->string('unit')->nullable();
            $table->Integer('alert_quantity')->nullable();
            $table->string('saller_points')->nullable();
            $table->tinyInteger('is_returnable')->nullable();
            $table->string('expiration_days')->nullable();
            $table->bigInteger('purchase_price')->nullable();
            $table->string('purchase_account')->nullable();
            $table->enum('discount_type', ['percent', 'flat'])->nullable();
            $table->Integer('discount_amount')->nullable();
            $table->string('tax_id')->nullable();
            $table->enum('tax_type', ['inclusive', 'exclusive'])->nullable();
            $table->Integer('vat_on_sale')->nullable();
            $table->Integer('vat_on_purchase')->nullable();

            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug', 50)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
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
