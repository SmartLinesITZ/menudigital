import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Ingredientes } from '../ingredientes/ingredientes'
import { Orden } from '../orden/orden';
import { ServicesRestaurante } from '../../providers/restaurante.service';
@Component({
  selector: 'page-menu',
  templateUrl: 'menu.html',
})
export class Menu {
  categorias: Array<any>;
  platillos: Array<any>;
  inforest;
  user;
  pedido;
  constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesRestaurante) {
    this.inforest = navParams.data.inforest;
    this.user = navParams.data.user;
    this.pedido = navParams.data.pedido;
  }
  ionViewDidLoad() 
  {
    this.data.getMenu(this.inforest.idrestaurante).subscribe(
      data => {
        this.categorias = data; //duda
        console.log(data);
      },
      err => {
        console.log(err);
      },
      () => console.log('Movie Search Complete')
      );
  }
  goToIngredientesPage(platillo,pedido,user,inforest){
    
    this.navCtrl.push(Ingredientes,{platillo:platillo, pedido:pedido, user:user, inforest:inforest});
  }
  goToOrdenPage(){
    this.navCtrl.push( Orden );
  }
}
