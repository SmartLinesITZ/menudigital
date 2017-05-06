import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/**
 * Generated class for the Lists page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-lists',
  templateUrl: 'lists.html',
})
export class Lists {
lists:any []=[];
  constructor(public navCtrl: NavController, public navParams: NavParams) {
  	this.lists.push({
  		name:'Wings'
  	});
  	this.lists.push({
  		name:'Vancouber'
  	});
  	this.lists.push({
  		name:'KFC'
  	});
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lists');
  }

}
