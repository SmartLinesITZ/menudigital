import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Restaurantes } from '../restaurantes/restaurantes';

@Component({
  selector: 'page-opciones',
  templateUrl: 'opciones.html',
})
export class Opciones {
  respuesta: Array<any>;
  iduser;
  constructor(public navCtrl: NavController, public navParams: NavParams) {
     this.iduser = navParams.data.user;  
  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad Opciones');
  }
 goToRestaurantesPage(opcion:number, iduser:number){
  	this.navCtrl.push(Restaurantes,{opcion:opcion, iduser:iduser});
  }
}
