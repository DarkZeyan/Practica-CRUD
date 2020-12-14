<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        if (Schema::hasTable('Clientes')){
            Schema::Table('Clientes', function (Blueprint $table) {
                if(!Schema::hasColumn('Clientes', 'customer_code')){
                    $table->Int('customer_code', 30);
                }

                if(!Schema::hasColumn('Clientes', 'first_name')){
                    $table->Char('first_name', 40);
                }

                if(!Schema::hasColumn('Clientes', 'surname')){
                    $table->Char('surname', 40);
                }

                if(!Schema::hasColumn('Clientes', 'address')){
                    $table->Char('address', 100);
                }

                if(!Schema::hasColumn('Clientes', 'postcode')){
                    $table->Char('postcode', 40);
                }

                if(!Schema::hasColumn('Clientes', 'telephone_number')){
                    $table->Char('telephone_number', 40);
                }
            });
        }else{
            Schema::Create('cliente', function (Blueprint $table) {
                $table->Int('customer_code');
                $table->Char('first_name', 40);
                $table->Char('surname', 40);
                $table->Char('address', 100);
                $table->Char('postcode', 40);
                $table->Char('telephone_number', 40);
            });
        }
    }
 
    public function down()
    {
        Schema::table('Clientes', function (Blueprint $table) {
            Schema::dropIfExists('Clientes');
        });
    }
}
