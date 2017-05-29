import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Menu } from '../menu/menu';
import { ServicesServicios } from '../../providers/servicios.service';
import { AlertController } from 'ionic-angular';
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
   user;
   pedidor:Array<any>;
   pedido;
   inforest;
   mensaje;
   constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesServicios,public alertCtrl: AlertController) {
     this.platillo=navParams.data.platillo;
     this.user = navParams.data.user;
     this.pedido = navParams.data.pedido;
     this.inforest = navParams.data.inforest;
   }
   ionViewDidLoad() {
     console.log('ionViewDidLoad Ingredientes');
   }
   goToMenuPage(inforest,user,idpedido,idplatillo){
     this.data.orden(idpedido,idplatillo).subscribe(
      data => {
        this.pedidor = data; //duda
        this.navCtrl.push(Menu,{inforest:inforest,user:user,pedido:this.pedidor[0]});
      },
      err => {
        let alert = this.alertCtrl.create({
             title: 'Algo salio mal',
             buttons: ['OK']
           });
           alert.present();
      },
      () => console.log('Movie Search Complete')
      );
     
   }

 }
