import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Menu } from '../menu/menu';
import { Ubicacion } from '../ubicacion/ubicacion';
import { Reservacion } from '../reservacion/reservacion';
import { ServicesServicios } from '../../providers/servicios.service';
@Component({
  selector: 'page-servicios',
  templateUrl: 'servicios.html',
})
export class Servicios {
  servicios:Array<any>;
  pedido:Array<any>;
  inforest;
  user;
  constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesServicios) {
    this.inforest=navParams.data.inforest;
    this.user = navParams.data.user;
  }
  ionViewDidLoad() {
   this.data.servicios(this.inforest.idrestaurante).subscribe(
       data => {
         this.servicios = data;
         console.log(data);
         //    loadingCtrl.loader.dismiss();
       },
       err => {
         console.log(err);
       },
       () => console.log('Movie Search Complete')
       );
  }
  goToMenuPage(inforest,user){
    this.data.generaPedido(this.inforest.idrestaurante,user.idusuario).subscribe(
       data => {
         this.pedido = data;
         this.navCtrl.push(Menu,{inforest:inforest,user:user,pedido:this.pedido[0]});
       },
       err => {
         console.log(err);
       },
       () => console.log('Movie Search Complete')
       );
 
  }
  goToUbicacionPage(inforest,user){
  	this.navCtrl.push(Ubicacion,{inforest:inforest,user:user});
  }
  goToReservacionPage(inforest,user){
    this.navCtrl.push(Reservacion,{inforest:inforest,user:user});
  }
}
