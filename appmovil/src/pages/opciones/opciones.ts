import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Restaurantes } from '../restaurantes/restaurantes';

@Component({
  selector: 'page-opciones',
  templateUrl: 'opciones.html',
})
export class Opciones {
  respuesta: Array<any>;
  user;
  constructor(public navCtrl: NavController, public navParams: NavParams) {
     this.user = navParams.data.user;  
  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad Opciones');
  }
 goToRestaurantesPage(opcion:number, user:number){
  	this.navCtrl.push(Restaurantes,{opcion:opcion, user:user});
  }
}
