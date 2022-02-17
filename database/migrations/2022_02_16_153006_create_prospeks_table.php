<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospeks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->foreignId('customer_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->longText('description');
            $table->boolean('is_success')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prospeks');
    }
};
