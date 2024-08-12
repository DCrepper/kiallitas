<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *
     *  SelectColumn::make('status')
      *              ->options([
       *                 'video' => 'Video',
      *                  'image' => 'Image',
       *             ])->rules(['required']),
      *          ImageColumn::make('image_from_disc')->checkFileExistence(),
      *          TextColumn::make('image_from_url'),
      *          TextColumn::make('video_url'),
       *         TextInputColumn::make('possition')->type('number')->rules(['required','unique:elements,possition']),
     *
     */
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status', ['video', 'image']);
            $table->string('image_from_disc')->nullable();
            $table->string('image_from_url')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('possition');
            $table->boolean('is_active')->default(true);
            $table->boolean('local')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elements');
    }
};
