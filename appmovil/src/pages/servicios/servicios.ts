import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Menu } from '../menu/menu';
import { Ubicacion } from '../ubicacion/ubicacion';
import { Reservacion } from '../reservacion/reservacion';
import { ServicesServicios } from '../../providers/servicios.service';
import { UserData } from '../../providers/user-data';

@Component({
  selector: 'page-servicios',
  templateUrl: 'servicios.html',
})

export class Servicios {

  username;
  servicios:Array<any>;
  pedido:Array<any>;
  inforest;
  idUser;

  constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesServicios, public userData:UserData) {
    this.inforest=navParams.data.inforest;
  }

  ionViewDidLoad() {
    this.getIdUser();
    this.data.servicios(this.inforest.idrestaurante).subscribe(
      data => {
        this.servicios = data;
        console.log(data);
        //    loadingCtrl.loader.dismiss();
      },
      err => {
        console.log(err);
      },
      () => console.log('Movie Search Complete')
      );
  }

  goToMenuPage(inforest){
    this.userData.getUsername().then((username) => {
      this.username = username;
    });
    this.data.generaPedido(this.inforest.idrestaurante,this.idUser).subscribe(
      data => {
        this.pedido = data;
        this.navCtrl.push(Menu,{inforest:inforest,user:this.idUser,pedido:this.pedido[0]});
      },
      err => {
        console.log(err);
      },
      () => console.log('Movie Search Complete')
      );
  }

  goToUbicacionPage(inforest,user){
  	this.navCtrl.push(Ubicacion,{inforest:inforest});
  }

  goToReservacionPage(inforest,user){
    this.navCtrl.push(Reservacion,{inforest:inforest});
  }

  getIdUser(){
    this.userData.getIdUser().then((idUser) => {
      this.idUser = idUser;
    });
  }
}
