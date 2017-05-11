import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Login } from '../login/login';
import { ServicesUsuarios } from '../../providers/usuarios.service';
import { AlertController } from 'ionic-angular';
/**
 * Generated class for the Registro page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
 //@IonicPage()
 @Component({
   selector: 'page-registro',
   templateUrl: 'registro.html',
 })
 export class Registro {
   respuesta: Array<any>;
   constructor(public navCtrl: NavController, public navParams: NavParams,  public data: ServicesUsuarios, public alertCtrl: AlertController) {
   }

   ionViewDidLoad() {
     console.log('ionViewDidLoad Registro');
   }
   goToLoginPage(){
     this.navCtrl.push(Login);
   }
   public Insert(nombre:string, correo:string, telefono:string, usuario: string, password:string)
   {
     //this.presentLoading();
     this.data.InsertUser(nombre,correo,telefono,usuario,password).subscribe(
       data => {
         this.respuesta=data;
         //console.log(data);
         if(this.respuesta[0].mensaje == "success")
         {
           let alert = this.alertCtrl.create({
             title: 'Registro con éxito',
             subTitle: 'Ahora puedes disfrutar de nuestra app, ¡Bienvenido!',
             buttons: ['OK']
           });
           alert.present();
           this.navCtrl.popTo(Login);
         
         }else if(this.respuesta[0].mensaje == "error"){
            let alert = this.alertCtrl.create({
             title: 'Error',
             subTitle: 'Algo salio mal',
             buttons: ['OK']
           });
           alert.present();
         }else{
            let alert = this.alertCtrl.create({
             title: 'El usuario ya existe',
             subTitle: 'Intenta con otro',
             buttons: ['OK']
           });
           alert.present();
         }
       },
       err => {
         console.log(err);
       },
       () => console.log('Movie Search Complete')
       );
   }
   exito(){

   }
 }
