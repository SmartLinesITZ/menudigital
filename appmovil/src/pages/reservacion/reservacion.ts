import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Servicios } from '../servicios/servicios';
import { ServicesServicios } from '../../providers/servicios.service';
import { AlertController } from 'ionic-angular';
/**
 * Generated class for the Reservacion page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
 //@IonicPage()
 @Component({
   selector: 'page-reservacion',
   templateUrl: 'reservacion.html',
 })
 export class Reservacion {
   respuesta:Array<any>;
   inforest;
   iduser;
   constructor(public navCtrl: NavController, public navParams: NavParams,  public data: ServicesServicios, public alertCtrl: AlertController) {
     this.inforest=navParams.data.inforest;
     this.iduser=navParams.data.iduser;
   }
   ionViewDidLoad() {
     console.log('ionViewDidLoad Reservacion');
   }
   goToServicios(){
     this.navCtrl.push(Servicios);
   }
   public mandarSolicitud(nopersonas,time,idrest,iduser)
   {
     //this.presentLoading();
     this.data.reservacion(nopersonas,time,idrest,iduser).subscribe(
       data => {
         this.respuesta=data;
         //console.log(data);
         if(this.respuesta[0].mensaje == "success")
         {
           let alert = this.alertCtrl.create({
             title: 'Solicitud éxitosa',
             subTitle: 'Tu reservación esta siendo atendida, en un momento te mandaremos un mensaje de confirmación',
             buttons: ['OK']
           });
           alert.present();
         }else if(this.respuesta[0].mensaje == "fail")
         {
           let alert = this.alertCtrl.create({
             title: 'Error',
             subTitle: 'Algo salio mal',
             buttons: ['OK']
           });
           alert.present();
         }else{
           let alert = this.alertCtrl.create({
             title: 'Error',
             subTitle: 'Algo salio mal',
             buttons: ['OK']
           });
           alert.present();
         }
       },
       err => {
         console.log(err);
       },
       () => console.log('Movie Search Complete')
       );
   }
 }
