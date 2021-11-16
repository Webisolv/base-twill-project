<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenusTables extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table );

            $table->integer('position')->unsigned()->nullable();

        });

        Schema::create('menu_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'menu');
            $table->string('title', 200)->nullable();
        });

        Schema::create('menu_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'menu');
        });

        Schema::create('menu_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'menu');
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_revisions');
        Schema::dropIfExists('menu_translations');
        Schema::dropIfExists('menu_slugs');
        Schema::dropIfExists('menus');
    }
}
