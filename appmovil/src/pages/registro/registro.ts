import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Login } from '../login/login';
/**
 * Generated class for the Registro page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-registro',
  templateUrl: 'registro.html',
})
export class Registro {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Registro');
  }
  goToLoginPage(){
  	this.navCtrl.push(Login);
  }

}
