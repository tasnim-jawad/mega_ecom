<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\ProductManagement\ProductVarientValue\Database\create_product_varient_values_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_varient_values', function (Blueprint $table) {
            $table->id();
            $table->string('product_varient_group_id')->nullable();
            $table->string('product_varient_id')->nullable();
            $table->string('title')->nullable();
            $table->tinyInteger('is_default')->nullable();

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
        Schema::dropIfExists('product_varient_values');
    }
};