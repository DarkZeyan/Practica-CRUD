<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Publicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('publicaciones')){
            Schema::Table('publicaciones', function (Blueprint $table) {
                if(!Schema::hasColumn('publicaciones', 'publication_code')){
                    $table->Int('publication_code', 30);
                }

                if(!Schema::hasColumn('publicaciones', 'title')){
                    $table->Char('title', 100);
                }

                if(!Schema::hasColumn('publicaciones', 'price')){
                    $table->Decimal('price', 5,2);
                }
            });
        }else{
            Schema::Table('publicaciones', function (Blueprint $table) {
                $table->Int('publication_code', 30);
                $table->Char('title', 100);
                $table->Decimal('price', 5,2);
        });
        }
    }

    public function down()
    {
        Schema::table('publicaciones', function (Blueprint $table) {
            Schema::dropIfExists('publicaciones');
        });
    }
}
