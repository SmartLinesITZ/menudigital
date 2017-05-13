import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Servicios } from '../servicios/servicios';
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
  goToServiciosPage(inforest){
  this.navCtrl.push(Servicios,{inforest:inforest});
   // this.navCtrl.push(Servicios);
  }

}
