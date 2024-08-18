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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string("name_ar");
            $table->string("name_en");
            $table->text("describe_ar");
            $table->text("describe_en");
            $table->enum('update', ['سنوي', 'نصف سنوي']);
            $table->enum('status', ['منشور', 'غير منشور']);
            $table->foreignIdFor(\App\Models\User::class)->references('id')
            ->on('users')->onDelete('cascade');;
            $table->timestamps();
        });
           
        Schema::create('data_tag', function (Blueprint $table) {
                    $table->id();
                    $table->unsignedBiginteger('data_id');
                    $table->unsignedBiginteger('tag_id');
                    $table->foreign('data_id')
                          ->references('id')
                          ->on('data')
                          ->onDelete('cascade');
                    $table->foreign('tag_id')
                          ->references('id')
                          ->on('tags')
                          ->onDelete('cascade');
                    $table->unique(['data_id', 'tag_id']);
                });       
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
        Schema::dropIfExists('data_tag');
    }
};
