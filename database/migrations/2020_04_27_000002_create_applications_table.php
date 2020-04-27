<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('server_id')->unsigned()->index();
            $table->string('username');
            $table->string('password');
            $table->string('dbpass');
            $table->string('appcode')->index();
            $table->text('nginx')->nullable();
            $table->string('basepath')->nullable();
            $table->timestamps();
        });

        Schema::table('applications', function (Blueprint $table) {
            $table->foreign('server_id', 'applications_server_id_foreign')
                ->references('id')
                ->on('servers')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}