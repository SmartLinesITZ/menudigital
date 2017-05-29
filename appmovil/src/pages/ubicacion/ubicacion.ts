import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
//import { GoogleMaps, GoogleMap, GoogleMapsEvent, LatLng, CameraPosition, MarkerOptions, Marker } from '@ionic-native/google-maps';
import { Menu } from '../menu/menu';
import { ServicesServicios } from '../../providers/servicios.service';
import { AlertController } from 'ionic-angular';
@Component({
  selector: 'page-ubicacion',
  templateUrl: 'ubicacion.html',
})
export class Ubicacion {
   pedido:Array<any>;
   inforest;
   user;
   constructor(public navCtrl: NavController, public navParams: NavParams,  public data: ServicesServicios, public alertCtrl: AlertController) {
     this.inforest=navParams.data.inforest;
     this.user=navParams.data.user;
   }
   ionViewDidLoad() {
     console.log('ionViewDidLoad Reservacion');
   }
   mandarSolicitud(inforest,user,destino)
   {
     //this.presentLoading();
     this.data.pdomicilio(inforest.idrestaurante,user.idusuario,destino).subscribe(
       data => {
         this.pedido=data;
         //console.log(data);
         if(this.pedido[0].mensaje == "success")
         {
          this.navCtrl.push(Menu,{inforest:inforest,user:user,pedido:this.pedido[0]});
         }else if(this.pedido[0].mensaje == "fail")
         {
           let alert = this.alertCtrl.create({
             title: 'Algo salio mal',
             subTitle: 'Intentalo de nuevo',
             buttons: ['OK']
           });
           alert.present();
         }else{
           let alert = this.alertCtrl.create({
             title: 'Algo salio mal',
             subTitle: 'Intentalo de nuevo',
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
