<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Poetas extends Migration
{
   
    public function up()
    {
        if (Schema::hasTable('poetas')){
            Schema::Table('poetas', function (Blueprint $table) {
                if(!Schema::hasColumn('poetas', 'poet_code')){
                    $table->Int('poet_code', 30);
                }

                if(!Schema::hasColumn('poetas', 'first_name')){
                    $table->Char('first_name', 30);
                }

                if(!Schema::hasColumn('poetas', 'surname')){
                    $table->Char('surname', 40);
                }

                if(!Schema::hasColumn('poetas', 'address')){
                    $table->Char('address', 100);
                }

                if(!Schema::hasColumn('poetas', 'postcode')){
                    $table->Char('post_code', 20);
                }

                if(!Schema::hasColumn('poetas', 'telephone_number')){
                    $table->Char('telephone_number', 30);
                }
            });
        }else{
            Schema::Table('poetas', function (Blueprint $table) {
                $table->Int('poet_code', 30);
                $table->Char('first_name', 30);
                $table->Char('surname', 40);
                $table->Char('address', 100);
                $table->Char('postcode', 20);
                $table->Char('telephone_number', 30);
        });
        }
    }

    public function down()
    {
        Schema::table('poetas', function (Blueprint $table) {
            Schema::dropIfExists('poetas');
        });

    }
}
