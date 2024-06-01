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
            $table->integer('product_category_group_id')->nullable();

            $table->enum('type', ['service', 'product'])->nullable();
            $table->string('title')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();

            $table->integer('product_menufecturer_id')->nullable();
            $table->integer('product_brand_id')->nullable();
            $table->string('sku',50)->nullable();
            $table->integer('product_unit_id')->nullable();

            $table->integer('alert_quantity')->nullable();

            $table->string('seller_points')->nullable();
            $table->tinyInteger('is_returnable')->nullable();
            $table->string('expiration_days')->nullable();

            $table->enum('price_type', ['single', 'variant'])->nullable();

            $table->float('purchase_price')->nullable();
            // $table->string('purchase_account')->nullable();

            // $table->string('tax_id')->nullable();
            $table->enum('tax_type', ['inclusive', 'exclusive'])->nullable();
            $table->float('tax_amount')->default(0)->unsigned();

            // $table->integer('vat_on_sale')->nullable();
            // $table->integer('vat_on_purchase')->nullable();

            $table->float('customer_sales_price')->nullable()->unsigned();
            $table->float('retailer_sales_price')->nullable()->unsigned();
            $table->float('minimum_sale_price')->nullable()->unsigned();
            $table->float('maximum_sale_price')->nullable()->unsigned();

            $table->enum('discount_type', ['off', 'percent', 'flat'])->nullable();
            $table->float('discount_amount')->nullable();

            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug', 150)->nullable();
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
