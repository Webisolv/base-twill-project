<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactFormSubmissionsTables extends Migration
{
    public function up(): void
    {
        Schema::create('contact_form_submissions', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();
            $table->string('message', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('phone_number', 200)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_form_submissions');
    }
}
