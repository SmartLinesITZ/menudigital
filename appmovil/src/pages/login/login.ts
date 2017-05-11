import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Registro } from '../registro/registro';
import { Opciones } from '../opciones/opciones';
import { ServicesUsuarios } from '../../providers/usuarios.service';
import { AlertController } from 'ionic-angular';
//import { NgForm } from '@angular/forms';
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
   login: {username?: string, password?: string} = {};
  submitted = false;
  constructor(public navCtrl: NavController, public navParams: NavParams, public data: ServicesUsuarios, public alertCtrl: AlertController) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Login');
  }
  goToOpcionesPage(){
  	this.navCtrl.push(Opciones);
  }
  goToRegistroPage(){
  	this.navCtrl.push(Registro);
  }
  public compruebaAcceso(usuario: string, password:string)
   {
     //this.presentLoading();
     this.data.consultaUsuario(usuario,password).subscribe(
       data => {
         this.respuesta=data;
         //console.log(data);
         if(this.respuesta[0].mensaje == "1")
         {
           let alert = this.alertCtrl.create({
             title: 'Acceso correcto',
             subTitle: '¡Bienvenido?',
             buttons: ['OK']
           });
           alert.present();
           this.navCtrl.push(Opciones);
         }else{
            let alert = this.alertCtrl.create({
             title: 'Acceso incorrecto',
             subTitle: 'Intentalo otra vez',
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
}
