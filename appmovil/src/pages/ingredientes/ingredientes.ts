import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Menu } from '../menu/menu';
import { ServicesServicios } from '../../providers/servicios.service';
/**
 * Generated class for the Ingredientes page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
 //@IonicPage()
 @Component({
   selector: 'page-ingredientes',
   templateUrl: 'ingredientes.html',
 })
 export class Ingredientes {
   platillo;
   iduser;
   pedidor:Array<any>;
   pedido;
   inforest;
   mensaje;
   constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesServicios) {
     this.platillo=navParams.data.platillo;
     this.iduser = navParams.data.iduser;
     this.pedido = navParams.data.pedido;
     this.inforest = navParams.data.inforest;
   }
   ionViewDidLoad() {
     console.log('ionViewDidLoad Ingredientes');
   }
   goToMenuPage(inforest,iduser,idpedido,idplatillo){
     this.data.orden(idpedido,idplatillo).subscribe(
      data => {
        this.pedidor = data; //duda
        console.log(data);
      },
      err => {
        console.log(err);
      },
      () => console.log('Movie Search Complete')
      );
     this.navCtrl.push(Menu,{inforest:inforest,iduser:iduser,pedido:this.pedidor[0]});
   }

 }
