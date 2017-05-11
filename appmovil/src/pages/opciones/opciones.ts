import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Restaurantes } from '../restaurantes/restaurantes';

@Component({
  selector: 'page-opciones',
  templateUrl: 'opciones.html',
})
export class Opciones {
  respuesta: Array<any>;
  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad Opciones');
  }
 goToRestaurantesPage(opcion:number){
  	this.navCtrl.push(Restaurantes,{opcion:opcion});
  }
}
