import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Menu } from '../menu/menu';
import { Ubicacion } from '../ubicacion/ubicacion';
import { Reservacion } from '../reservacion/reservacion';
/**
 * Generated class for the Servicios page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-servicios',
  templateUrl: 'servicios.html',
})
export class Servicios {
  restaurante;
  constructor(public navCtrl: NavController, public navParams: NavParams) {
    //this.restaurante=navParams.data.restaurante;
  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad Servicios');
  }
  goToMenuPage(){
  	this.navCtrl.push(Menu);
  }
  goToUbicacionPage(){
  	this.navCtrl.push(Ubicacion);
  }
  goToReservacionPage(){
    this.navCtrl.push(Reservacion);
  }
}
