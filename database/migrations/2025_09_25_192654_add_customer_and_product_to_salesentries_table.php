<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('salesentries', function (Blueprint $table) {
        $table->unsignedBigInteger('customer_id')->after('id');
        $table->unsignedBigInteger('product_id')->after('customer_id');

        $table->foreign('customer_id')->references('id')->on('students')->onDelete('cascade');
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('salesentries', function (Blueprint $table) {
        $table->dropForeign(['customer_id']);
        $table->dropForeign(['product_id']);
        $table->dropColumn(['customer_id','product_id']);
    });
}
};
