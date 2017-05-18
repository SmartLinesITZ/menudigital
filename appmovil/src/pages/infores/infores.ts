import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Servicios } from '../servicios/servicios';
@Component({
  selector: 'page-infores',
  templateUrl: 'infores.html',
})
export class Infores {
  inforest;
  iduser;
  constructor(public navCtrl: NavController, public navParams: NavParams) {
    this.inforest = navParams.data.restaurante;
    this.iduser = navParams.data.iduser;
  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad Infores');
  }
  goToServiciosPage(inforest,iduser){
  this.navCtrl.push(Servicios,{inforest:inforest,iduser:iduser});
   // this.navCtrl.push(Servicios);
  }

}
