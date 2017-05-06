import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Pagos } from '../pagos/pagos';
/**
 * Generated class for the Orden page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-orden',
  templateUrl: 'orden.html',
})
export class Orden {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Orden');
  }
  goToPagosPage(){
  	this.navCtrl.push(Pagos);
  }
  

}
