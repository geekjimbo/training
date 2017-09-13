<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleDenuncia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('denuncias', function (Blueprint $table) {
          // $table->dropColumn(['workflowState']);
          $table->json('workflowState')->nullable();
          $table->string('titulo');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('denuncias', function (Blueprint $table) {
          // $table->dropColumn(['workflowState']);
          $table->json('workflowState')->nullable();
          $table->string('titulo');
      });
    }
}
