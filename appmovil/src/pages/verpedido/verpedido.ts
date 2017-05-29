import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { ServicesServicios } from '../../providers/servicios.service';

/**
 * Generated class for the Verpedido page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-verpedido',
  templateUrl: 'verpedido.html',
})
export class Verpedido {
  orden: Array<any>;
  pedido;
  constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesServicios) {
  this.pedido=navParams.data.pedido;
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