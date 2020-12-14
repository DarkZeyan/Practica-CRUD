<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Poemas extends Migration
{
   
    public function up()
    {
        if (Schema::hasTable('Poemas')){
            Schema::Table('Poemas', function (Blueprint $table) {
                if(!Schema::hasColumn('Poemas', 'poem_code')){
                    $table->Int('poem_code', 30);
                }

                if(!Schema::hasColumn('Poemas', 'poem_title')){
                    $table->Char('poem_title', 50);
                }

                if(!Schema::hasColumn('Poemas', 'poem_contents')){
                    $table->Text('poem_contents');
                }

                if(!Schema::hasColumn('Poemas', 'poet_code')){
                    $table->Int('poet_code', 11);
                }

            });
        }else{
            Schema::Create('Poemas', function (Blueprint $table) {
                $table->Int('poem_code', 30);
                $table->Char('poem_title', 50);
                $table->Text('poem_Contents');
                $table->Int('poet_code', 11);
            });
        }
    }
    public function down()
    {
        Schema::table('Poemas', function (Blueprint $table) {
            Schema::dropIfExists('Poemas');
        });
    }
}
