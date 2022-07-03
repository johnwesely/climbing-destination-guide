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
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('description');
            $table->text('directions');
            $table->string('lat');
            $table->string('lon');
        });

        Schema::create('crags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->string('name');
            $table->text('description');
            $table->text('directions');
            $table->string('lat');
            $table->string('lon');
        });
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crag_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->string('name');
            $table->text('description');
            $table->text('directions');
            $table->string('lat');
            $table->string('lon');
        });

        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->string('name');
            $table->text('description');
            $table->text('location');
            $table->integer('height');
            $table->integer('draws')->nullable();
            $table->string('protection')->nullable();
            $table->string('fa')->nullable();
            $table->integer('fa_year')->nullable();
            $table->foreignId('type');
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('commentable_id')->constrained()->cascadeOnDelete();
            $table->string('commentable_type');
            $table->foreignId('user_id');
        });

        Schema::create('ticks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('send_date');
            $table->foreignId('send_type_id');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('route_id')->constrained()->cascadeOnDelete();
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
            $table->string('file');
            $table->text('name');
            $table->text('description')->nullable();            
        });

        Schema::create('imageables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('image_id');
            $table->foreignId('imageable_id');
            $table->string('imageable_type');
        });

        Schema::create('route_tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('icon')->nullable();
        });

        Schema::create('area_tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('icon')->nullable();
        });
        
        Schema::create('trohpies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('icon')->nullable();
        });

        Schema::create('route_tag_route', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('route_id')->constrained()->cascadeOnDelete();
            $table->foreignId('route_tag_id')->constrained()->cascadeOnDelete();
        });

        Schema::create('area_tag_area', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('route_id')->constrained()->cascadeOnDelete();
            $table->foreignId('route_tag_id')->constrained()->cascadeOnDelete();
        });

        Schema::create('trophy_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('route_id')->constrained()->cascadeOnDelete();
            $table->foreignId('route_tag_id')->constrained()->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
