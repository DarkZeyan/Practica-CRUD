<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ventas extends Migration
{

    public function up()
    {
        if (Schema::hasTable('ventas')){
            Schema::Table('ventas', function (Blueprint $table) {
                if(!Schema::hasColumn('ventas', 'sale_code')){
                    $table->Int('sale_code', 30);
                }

                if(!Schema::hasColumn('ventas', 'date')){
                    $table->Date('date');
                }

                if(!Schema::hasColumn('ventas', 'amount')){
                    $table->Decimal('amount');
                }

                if(!Schema::hasColumn('ventas', 'customer_code')){
                    $table->Int('customer_code', 11);
                }
            });
        }else{
            Schema::Table('ventas', function (Blueprint $table) {
                $table->Int('sale_code', 30);
                $table->Date('date');
                $table->Decimal('amount');
                $table->Int('poet_code', 11);
        });
        }
    }

    public function down()
    {
        Schema::table('ventas', function (Blueprint $table) {
            Schema::dropIfExists('ventas');
        });
    }
}
