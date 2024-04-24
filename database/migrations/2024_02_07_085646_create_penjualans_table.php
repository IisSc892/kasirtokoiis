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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->noActionOnUpdate();
            $table->foreignId('pelanggan_id')->nullable()->constrained()->onDelete('set null')->onUpdate('cascade');
            $table->string('nomor_transaksi')->unique();
            $table->dateTime('tanggal');
            $table->unsignedInteger('subtotal');
            $table->unsignedInteger('pajak');
            $table->unsignedInteger('diskon')->default(0);
            $table->unsignedInteger('total');
            $table->unsignedInteger('tunai');
            $table->unsignedInteger('kembalian');
            $table->enum('status', ['selesai', 'batal'])->default('selesai');

            // Tambahkan indeks pada kolom 'tanggal'
            $table->index('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus tabel 'penjualans'
        Schema::dropIfExists('penjualans');
    }
};
