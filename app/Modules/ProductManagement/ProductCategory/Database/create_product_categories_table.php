<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\ProductManagement\ProductCategory\Database\create_product_categories_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('product_category_group_id')->nullable();
            $table->tinyInteger('is_nav')->default(0);
            $table->tinyInteger('is_featured')->default(0);
            $table->Integer('serial')->nullable();
            $table->string('image',100)->nullable();

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
        Schema::dropIfExists('product_categories');
    }
};
