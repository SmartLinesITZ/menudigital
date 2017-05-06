import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Ingredientes } from '../ingredientes/ingredientes'
import { Orden } from '../orden/orden';
/**
 * Generated class for the Menu page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-menu',
  templateUrl: 'menu.html',
})
export class Menu {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  	
  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad Menu');
  }
  goToIngredientesPage(){
  	this.navCtrl.push(Ingredientes);
  }
  goToOrdenPage(){
  	this.navCtrl.push( Orden );
  }
}
