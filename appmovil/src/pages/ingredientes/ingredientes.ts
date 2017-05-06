import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Menu } from '../menu/menu';
/**
 * Generated class for the Ingredientes page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-ingredientes',
  templateUrl: 'ingredientes.html',
})
export class Ingredientes {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Ingredientes');
  }
  goToMenuPage(){
  	this.navCtrl.push(Menu);
  }

}
