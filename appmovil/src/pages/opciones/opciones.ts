import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Restaurantes } from '../restaurantes/restaurantes';
import { UserData } from '../../providers/user-data';

@Component({
  selector: 'page-opciones',
  templateUrl: 'opciones.html',
})
export class Opciones {
  respuesta: Array<any>;
  username;
  constructor(public navCtrl: NavController, public navParams: NavParams, public userData:UserData) {
     
  }
  ionViewDidLoad() {
    this.userData.getUsername().then((usuario) => {
       this.username = usuario;
     });
  }
 goToRestaurantesPage(opcion:number, user:number){
  	this.navCtrl.push(Restaurantes,{opcion:opcion, user:user});
  }
  logout() {
    this.userData.logout();
    this.navCtrl.setRoot('Login');
  }
}
