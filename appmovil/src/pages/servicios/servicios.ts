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
  iduser;
  constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesServicios) {
    this.inforest=navParams.data.inforest;
    this.iduser = navParams.data.iduser;
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
  goToMenuPage(inforest,iduser){
    this.data.generaPedido(this.inforest.idrestaurante,iduser).subscribe(
       data => {
         this.pedido = data;
         this.navCtrl.push(Menu,{inforest:inforest,iduser:iduser,pedido:this.pedido[0]});
       },
       err => {
         console.log(err);
       },
       () => console.log('Movie Search Complete')
       );
 
  }
  goToUbicacionPage(){
  	this.navCtrl.push(Ubicacion);
  }
  goToReservacionPage(inforest,iduser,pedido){
    this.navCtrl.push(Reservacion,{inforest:inforest,iduser:iduser,pedido:pedido});
  }
}
