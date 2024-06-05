<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\LocationManagement\Thana\Database\create_thanas_table.php'
     php artisan migrate --path='app/Modules/LocationManagement/Thana/Database/create_thanas_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('thanas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('district_id')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('post_office', 100)->nullable();
            $table->string('post_code', 100)->nullable();

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
        Schema::dropIfExists('thanas');
    }
};
