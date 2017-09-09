import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Tabs } from '../tabs/tabs';
import { UserData } from '../../providers/user-data';
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
   username;
   idUser;

   constructor(public navCtrl: NavController, public navParams: NavParams, public userData:UserData) {
   }

   ionViewDidLoad() {
    this.getUser();
   }

   startApp(){
     this.navCtrl.push(Tabs);
   }

   getUser(){
      this.userData.getUsername().then((username) => {
       this.username = username;
     });
   }
 }
