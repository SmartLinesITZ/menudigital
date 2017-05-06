import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Servicios } from '../servicios/servicios';
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

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Reservacion');
  }
  goToServicios(){
  	this.navCtrl.push(Servicios);
  }
}
