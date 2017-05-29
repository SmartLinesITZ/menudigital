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
   user;
   constructor(public navCtrl: NavController, public navParams: NavParams,  public data: ServicesServicios, public alertCtrl: AlertController) {
     this.inforest=navParams.data.inforest;
     this.user=navParams.data.user;
   }
   ionViewDidLoad() {
     console.log('ionViewDidLoad Reservacion');
   }
   goToServicios(){
     this.navCtrl.push(Servicios);
   }
   public mandarSolicitud(nombre,nopersonas,time,fecha,idrest,user,inforest)
   {
     if(nombre=="" || nopersonas=="" || time=="" || fecha==""){
       let alert = this.alertCtrl.create({
         title: 'Error',
         subTitle: 'Completa todos los datos para continuar',
         buttons: ['OK']
       });
       alert.present();
     }else{
       this.data.reservacion(nombre,nopersonas,time,fecha,idrest,user.idusuario).subscribe(
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
             this.navCtrl.push(Servicios,{inforest:inforest,user:user});
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
 }
