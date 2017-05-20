import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { AlertController } from 'ionic-angular';
/**
 * Generated class for the Solicitudes page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
 @Component({
 	selector: 'page-solicitudes',
 	templateUrl: 'solicitudes.html',
 })
 export class Solicitudes {
 	Servicio1 : string = "1";
 	Servicio2 : string = "2";
 	Servicio3 : string = "Pedido a domicilio" ;
 	constructor(public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController) {
 	}
 	ionViewDidLoad() {
 		console.log('ionViewDidLoad Solicitudes');
 	}
 	verServicio(servicio){
 		if(servicio=="1"){
 			let alert = this.alertCtrl.create({
             title: 'Pedido anticipado',
             subTitle: 'Disfruta de la aplicación',
             buttons: ['OK']
           });
           alert.present();
 		}else if(servicio=="2"){
 			let alert = this.alertCtrl.create({
             title: 'Reservación',
             subTitle: 'Disfruta de la aplicación',
             buttons: ['OK']
           });
           alert.present();
 		}else{
 			let alert = this.alertCtrl.create({
             title: 'Pedido a domicilio',
             subTitle: 'Disfruta de la aplicación',
             buttons: ['OK']
           });
           alert.present();
 		}
 	}
  }
