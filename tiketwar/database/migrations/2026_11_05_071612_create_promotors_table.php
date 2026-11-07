<?php 
  
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
  
return new class extends Migration 
{ 
    public function up(): void 
    { 
        Schema::create('promotors', function (Blueprint $table) { 
            $table->id();                // DIUBAH: kunci utama 
            $table->string('nama');        // BARU 
            $table->string('kontak');      // BARU
            $table->timestamps(); 
        }); 
    } 
  
    public function down(): void 
    { 
        Schema::dropIfExists('promotors'); 
    } 
}; 