import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Servicios } from '../servicios/servicios';
import { ServicesServicios } from '../../providers/servicios.service';
import { AlertController } from 'ionic-angular';

/**
 * Generated class for the Pagos page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
 //@IonicPage()
 @Component({
 	selector: 'page-pagos',
 	templateUrl: 'pagos.html',
 })
 export class Pagos {
 	user;
 	pedido;
 	inforest;
 	respuesta:Array<any>;
 	constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesServicios, public alertCtrl: AlertController) {
 		this.pedido=navParams.data.pedido;
 		this.user=navParams.data.user;
 		this.inforest=navParams.data.inforest;
 	}
 	ionViewDidLoad(){
 	}
 	goToOpcionesPage(user,inforest,pedido){
 		this.data.enviarPedido(pedido.idpedido).subscribe(
 		 data => {
         this.respuesta = data;
         if(this.respuesta[0].mensaje == "success")
         {
         	 let alert = this.alertCtrl.create({
             title: 'Se ha realizado tu pago correctamente',
             subTitle: 'Tu pedido está siendo atendido',
             buttons: ['OK']
           });
           alert.present();
            this.navCtrl.push(Servicios,{user:user,inforest:inforest});
         }else{
           let alert = this.alertCtrl.create({
             title: 'No se ha podido realizar el pago',
             subTitle: 'Verifica tus datos',
             buttons: ['OK']
           });
           alert.present();
         }
       },
       err => {
         let alert = this.alertCtrl.create({
             title: 'Algo salio mal',
             subTitle: 'Verifica que tengas internet e intentalo otra vez',
             buttons: ['OK']
           });
           alert.present();
       },
       () => console.log('Movie Search Complete')
       );
 		
 	}
 }
