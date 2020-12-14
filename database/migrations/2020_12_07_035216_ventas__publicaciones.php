<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VentasPublicaciones extends Migration
{

    public function up()
    {
        if (Schema::hasTable('Ventas_Publicaciones')){
            Schema::Table('Ventas_Publicaciones', function (Blueprint $table) {
                if(!Schema::hasColumn('Ventas_Publicaciones', 'sale_code')){
                    $table->Int('sale_code', 11);
                }

                if(!Schema::hasColumn('Ventas_Publicaciones', 'publication_code')){
                    $table->Char('publication_code', 11);
                }
            });
        }else{
            Schema::Table('Ventas_Publicaciones', function (Blueprint $table) {
                $table->Int('sale_code', 11);
                $table->Char('publication_code', 11);
        });
        }
    }
    public function down()
    {
        Schema::table('Ventas_Publicaciones', function (Blueprint $table) {
            Schema::dropIfExists('Ventas_Publicaciones');
        });
    }
}
