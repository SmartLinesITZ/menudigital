import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Lists } from '../lists/lists';
/**
 * Generated class for the Users page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-users',
  templateUrl: 'users.html',
})
export class Users {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Users');
  }
  goToListPage(){
  	this.navCtrl.push(Lists);
  }

}
