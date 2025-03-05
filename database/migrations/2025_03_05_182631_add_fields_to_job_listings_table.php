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
        // clear table data
        DB::table('job_listings')->truncate();

        Schema::table('job_listings', function (Blueprint $table) {
            $table->string('title');
            $table->string('description');
            $table->integer('salary');
            $table->string('tags')->nullable();
            $table->enum('type', ['Full-Time', 'Part-Time', 'Contract', 'Internship'])->default('Full-Time');
            $table->boolean('remote')->default(false);
            $table->string('requirements')->nullable();
            $table->string('benefits')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zipcode')->nullable();
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            $table->string('company_name');
            $table->string('company_description')->nullable();
            $table->string('company_logo');
            $table->string('company_website')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->dropColumn([ 'title', 'description',
                'salary', 'tags', 'type', 'remote',
                'requirements', 'benefits', 'city', 'state', 'zipcode',
                'contact_email', 'contact_phone', 'company_name', 'company_description',
                'company_logo', 'company_website'
                ]);
        });
    }
};
