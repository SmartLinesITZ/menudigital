import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/**
 * Generated class for the Bienvenida page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-bienvenida',
  templateUrl: 'bienvenida.html',
})
export class Bienvenida {
	user;
  constructor(public navCtrl: NavController, public navParams: NavParams) {
  	this.user=navParams.data.user;
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Bienvenida');
  }

}
