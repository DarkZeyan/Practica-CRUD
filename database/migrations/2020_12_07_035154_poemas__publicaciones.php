<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PoemasPublicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('poemas_publicaciones')){
            Schema::Table('poemas_publicaciones', function (Blueprint $table) {
                if(!Schema::hasColumn('poemas_publicaciones', 'poem_code')){
                    $table->Int('poem_code', 11);
                }

                if(!Schema::hasColumn('poemas_publicaciones', 'publication_code')){
                    $table->Int('publication_code', 11);
                }
            });
        }else{
            Schema::Table('poemas_publicaciones', function (Blueprint $table) {
                $table->Int('poem_code', 11);
                $table->Int('publication_code', 11);
        });
        }
    }
    public function down()
    {
        Schema::table('poemas_publicaciones', function (Blueprint $table) {
            Schema::dropIfExists('poemas_publicaciones');
        });
    }
}
