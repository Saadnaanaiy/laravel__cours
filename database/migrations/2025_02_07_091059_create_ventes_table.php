<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {


    public function up(): void {
        
        Schema::create('ventes', function (Blueprint $table) {
            //idvente int primary key
            $table->id('idvente');
            //idclient int
            $table->bigInteger("idclient")->unsigned();
            //idproduit int
            $table->bigInteger("idproduit")->unsigned();
            //constraint foreign key(idclient) references client(idclient)
            $table->foreign('idclient')->references('idclient')->on('clients'); //#idcient
            //constraint foreign key(idproduit) references produit(idproduit)
            $table->foreign('idproduit')->references('idproduit')->on('produits'); //#idproduit
            $table->integer('quantite');
            $table->date('datevente');
            $table->timestamps();
        });
    }


    public function down() {
        Schema::dropIfExists('ventes');
    }
};
