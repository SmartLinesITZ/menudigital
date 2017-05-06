import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Restaurantes } from '../restaurantes/restaurantes';

/**
 * Generated class for the Opciones page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-opciones',
  templateUrl: 'opciones.html',
})
export class Opciones {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Opciones');
  }
 goToRestaurantesPage(){
  	this.navCtrl.push(Restaurantes);
  }
}
