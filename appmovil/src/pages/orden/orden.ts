import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Pagos } from '../pagos/pagos';
import { ServicesServicios } from '../../providers/servicios.service';

@Component({
  selector: 'page-orden',
  templateUrl: 'orden.html',
})
export class Orden {
  orden: Array<any>;
  pedido;
  user;
  inforest;
  constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesServicios) {
  this.pedido=navParams.data.pedido;
  this.user=navParams.data.user;
  this.inforest=navParams.data.inforest;
  }
  ionViewDidLoad(){
   this.data.dataorden(this.pedido.idpedido).subscribe(
      data => {
        this.orden = data; //duda
        console.log(data);
      },
      err => {
        console.log(err);
      },
      () => console.log('Movie Search Complete')
      );
  }
  goToPagosPage(pedido,user,inforest){
  	this.navCtrl.push(Pagos,{pedido:pedido,user:user,inforest:inforest});
  }
  eliminarArticulo(idplatillo,idpedido){
    this.data.eliminaarticulo(idplatillo,idpedido).subscribe(
      data => {
        this.orden = data; //duda
        console.log(data);
      },
      err => {
        console.log(err);
      },
      () => console.log('Movie Search Complete')
      );
  }

}
