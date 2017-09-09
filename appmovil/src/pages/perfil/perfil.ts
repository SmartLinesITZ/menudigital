import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { UserData } from '../../providers/user-data';
/**
 * Generated class for the PerfilPage page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
 //@IonicPage()
 @Component({
 	selector: 'page-perfil',
 	templateUrl: 'perfil.html',
 })
 export class Perfil {
 	username: string;
 	constructor(public navCtrl: NavController, public navParams: NavParams, public userData: UserData) {
 	}

 	ngAfterViewInit() {
 		this.getUsername();
 	}

 	ionViewDidLoad() {
 		console.log('ionViewDidLoad PerfilPage');
 	}
 	
 	getUsername() {
 		this.userData.getUsername().then((username) => {
 			this.username = username;
 		});
 	}
 }
