import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { AlertController } from 'ionic-angular';
import { ServicesServicios } from '../../providers/servicios.service';
import { Verpedido } from '../verpedido/verpedido';
 @Component({
 	selector: 'page-solicitudes',
 	templateUrl: 'solicitudes.html',
 })
 export class Solicitudes {
   pedidos: Array<any>;
   reservaciones: Array<any>;
   mensaje;
   constructor(public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController, public data: ServicesServicios) {
   }
   ionViewDidLoad() {
     this.verPedidos();
     this.verReservaciones();
   }
   verPedidos(){
     this.data.readpedidos(2).subscribe(
       data => {
         this.pedidos = data;
       },
       err => {
         let alert = this.alertCtrl.create({
           title: 'Algo salio mal',
           subTitle: 'Verifica que tengas internet y vuelve a intentarlo',
           buttons: ['OK']
         });
         alert.present();
       },
       () => console.log('Movie Search Complete')
       );
   }
   verReservaciones(){
     this.data.readreservaciones(2).subscribe(
       data => {
         this.reservaciones = data;
       },
       err => {
         let alert = this.alertCtrl.create({
           title: 'Algo salio mal',
           subTitle: 'Verifica que tengas internet y vuelve a intentarlo',
           buttons: ['OK']
         });
         alert.present();
       },
       () => console.log('Movie Search Complete')
       );
   }
   goToverPedidos(pedido){
     this.navCtrl.push( Verpedido,{pedido:pedido} );
   }
   Refresh(){
     this.verPedidos();
     this.verReservaciones();
   }
   cancelarPedido(idPedido){
     this.data.cancelarPedido(idPedido).subscribe(
     data => {
         this.mensaje = data;
         if(this.mensaje[0].mensaje=="success"){
           let alert = this.alertCtrl.create({
             title: 'Se ha cancelado su pedido',
             buttons: ['OK']
           });
           alert.present();
           this.verPedidos();
         }else{
           let alert = this.alertCtrl.create({
             title: 'No se ha podido cancelar su pedido',
             buttons: ['OK']
           });
           alert.present();
         }
       },
       err => {
         let alert = this.alertCtrl.create({
           title: 'Algo salio mal',
           subTitle: 'Verifica que tengas internet y vuelve a intentarlo',
           buttons: ['OK']
         });
         alert.present();
       },
       () => console.log('Movie Search Complete')
       );
   }
   cancelarReservacion(idreservacion){
     this.data.cancelarReservacion(idreservacion).subscribe(
       data => {
         this.mensaje = data;
         if(this.mensaje[0].mensaje=="success"){
           let alert = this.alertCtrl.create({
             title: 'Se ha cancelado su reservación',
             buttons: ['OK']
           });
           alert.present();
           this.verReservaciones();
         }else{
           let alert = this.alertCtrl.create({
             title: 'No se ha podido cancelar su reservación',
             buttons: ['OK']
           });
           alert.present();
         }
       },
       err => {
         let alert = this.alertCtrl.create({
           title: 'Algo salio mal',
           subTitle: 'Verifica que tengas internet y vuelve a intentarlo',
           buttons: ['OK']
         });
         alert.present();
       },
       () => console.log('Movie Search Complete')
       );
   }
 }
