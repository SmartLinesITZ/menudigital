import { Component } from '@angular/core';
import { NavController, NavParams,  LoadingController,  AlertController } from 'ionic-angular';
import { Registro } from '../registro/registro';
import { Bienvenida } from '../bienvenida/bienvenida';
import { ServicesUsuarios } from '../../providers/usuarios.service';
import { NgForm } from '@angular/forms';
import { UserData } from '../../providers/user-data';
/**
 * Generated class for the Login page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
 //@IonicPage()
 @Component({
   selector: 'page-login',
   templateUrl: 'login.html',
 })
 export class Login {
   respuesta: Array<any>;
   loader:any;
   login: {usuario?: string, password?: string} = {};
   submitted = false;
   user;
   constructor(
     public userData: UserData, 
     public navCtrl: NavController, 
     public navParams: NavParams, 
     public data: ServicesUsuarios, 
     public alertCtrl: AlertController,
     public loadingCtrl:LoadingController) {
   }

   ionViewDidLoad() {
     console.log('ionViewDidLoad Login');
   }

   goToRegistroPage(){
     this.navCtrl.push(Registro);
   }
   public onLogin(form: NgForm){
     this.presentLoading();
     this.submitted = true;
     this.data.consultaUsuario(this.login.usuario,this.login.password).subscribe(
       data => {
         this.respuesta = data;
         if(this.respuesta[0].mensaje == "1"){
           this.submitted = true;
           if (form.valid) {
             this.userData.login(this.login.usuario, this.respuesta[0].mensaje.idusuario);
             this.loader.dismiss();
             this.navCtrl.push(Bienvenida);
           }
         }else{
           this.errorAcceso();
           this.loader.dismiss();
         }
       },
       err => {
         this.submitted = false;
         let alert = this.alertCtrl.create({
           title: 'Algo salio mal',
           subTitle: 'Verifica tu conexión a internet',
           buttons: ['OK']
         });
         this.loader.dismiss();
         alert.present();
       },
       () => console.log('Movie Search Complete')
       );
   }
   public errorAcceso(){
     this.submitted = false;
     let alert = this.alertCtrl.create({
       title: 'Acceso incorrecto',
       subTitle: 'Intentalo otra vez',
       buttons: ['OK']
     });
     alert.present();
   }
   public presentLoading() {
        this.loader = this.loadingCtrl.create({
         content:"Espere un momento"
        });
        this.loader.present();
    }
 }
