import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Servicios } from '../servicios/servicios';
@Component({
  selector: 'page-infores',
  templateUrl: 'infores.html',
})
export class Infores {
  inforest;
  user;
  constructor(public navCtrl: NavController, public navParams: NavParams) {
    this.inforest = navParams.data.restaurante;
    this.user = navParams.data.user;
  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad Infores');
  }
  goToServiciosPage(inforest,user){
  this.navCtrl.push(Servicios,{inforest:inforest,user:user});
   // this.navCtrl.push(Servicios);
  }

}
