import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Servicios } from '../servicios/servicios';
/**
 * Generated class for the Infores page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-infores',
  templateUrl: 'infores.html',
})
export class Infores {
  inforest;

  constructor(public navCtrl: NavController, public navParams: NavParams) {
    this.inforest = navParams.data.restaurante;

  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Infores');
  }
  goToServiciosPage(){
  	this.navCtrl.push(Servicios);
  }

}
