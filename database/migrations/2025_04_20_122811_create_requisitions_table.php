<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requisitions', function (Blueprint $table) {
            $table->id();
            $table->enum('fund_cluster',
            [
                'ADMIN 738766030225745104',
                'OPCEN 738766030358525000',
                'RD OFFICE 738766030358506000',
                'VEHICLE 738766030354808012',
                'QRF 738766030225688007',
                'QRF 738766030225805106',
                'QRF 738766030225804109'
            ]);
            $table->string('division');
            $table->string('agency_office');
            $table->string('unit');
            $table->enum('description',
        
            [
                'XCS',
                'XTRA',
                'DIESEL'
            ]);

            $table->decimal('quantity', 8, 2); // it accept 30, 30.11 so on but not 12345678.00
            $table->decimal('amount_utilized', 12, 2); //allows large values (e.g., millions)
            $table->decimal('balance', 12, 2); //allows large values (e.g., millions)
            $table->string('invoice_number'); //dynamic
            $table->string('plate_number');
            $table->string('car_type');
            $table->text('purpose');
            $table->string('requested_by');
            $table->string('received_by');
            $table->string('position_designation');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisitions');
    }
};
