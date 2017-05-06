import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Registro } from '../registro/registro';
import { Opciones } from '../opciones/opciones';
//import { NgForm } from '@angular/forms';

/**
 * Generated class for the Login page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-login',
  templateUrl: 'login.html',
})
export class Login {
   login: {username?: string, password?: string} = {};
  submitted = false;
  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Login');
  }
  goToOpcionesPage(){
  	this.navCtrl.push(Opciones);
  }
  goToRegistroPage(){
  	this.navCtrl.push(Registro);
  }
}
