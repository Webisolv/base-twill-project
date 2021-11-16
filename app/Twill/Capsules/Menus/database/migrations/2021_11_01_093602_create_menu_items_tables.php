<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuItemsTables extends Migration
{
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->foreignId('menu_id')->constrained()->onDelete('cascade');

            $table->bigInteger('linkable_id')->nullable();
            $table->string('linkable_type')->nullable();

            $table->string('destination')->nullable();

            $table->string('anchor')->nullable();

            $table->string('query_string')->nullable();

            $table->string('class_attribute')->nullable();

            $table->string('id_attribute')->nullable();

            $table->boolean('new_window')->default(0);

            $table->text('rel_attribute')->nullable();

            $table->integer('position')->unsigned()->nullable();

        });

        Schema::create('menu_item_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'menu_item');
            $table->string('title', 200)->nullable();
            $table->string('url')->nullable();
        });

    }

    public function down()
    {
        Schema::dropIfExists('menu_item_translations');
        Schema::dropIfExists('menu_items');
    }
}
