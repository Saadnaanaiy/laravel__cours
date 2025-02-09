<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        //create table produits
        Schema::create('produits', function (Blueprint $table) {
            //idproduit int primary key
            $table->id('idproduit');
            //idcategorie int
            $table->bigInteger('idcategorie')->unsigned(); //idcategorie int
            $table->foreign('idcategorie')->references('idcategorie')->on('categories');
            //alter table add foreign key(idcategorie) references categories(idcategorie)
            //nom varchar(25)
            $table->string('nom');
            //prix decimal(8,2)
            $table->decimal('prix', 8, 2);
            $table->integer('quantiteStock');
            //marque varchar(25) null
            $table->string('marque')->nullable();
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('produits');
    }
};
