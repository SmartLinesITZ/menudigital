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
  inforest;
  constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesServicios) {
    this.inforest=navParams.data.inforest;
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
  goToMenuPage(inforest){
  	this.navCtrl.push(Menu,{inforest:inforest});
  }
  goToUbicacionPage(){
  	this.navCtrl.push(Ubicacion);
  }
  goToReservacionPage(){
    this.navCtrl.push(Reservacion);
  }
}
