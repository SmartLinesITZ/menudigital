import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/**
 * Generated class for the Panticipado page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-panticipado',
  templateUrl: 'panticipado.html',
})
export class Panticipado {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Panticipado');
  }

}
