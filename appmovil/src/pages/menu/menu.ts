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
  constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesRestaurante) {
    this.inforest = navParams.data.inforest;
  }
  ionViewDidLoad() 
  {
    this.data.getcategorias(this.inforest.idrestaurante).subscribe(
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
  /*getplatillos(){
    this.data.getplatillos(this.inforest.idrestaurante).subscribe(
      data => {
        this.platillos = data; //duda
        console.log(data);
      },
      err => {
        console.log(err);
      },
      () => console.log('Movie Search Complete')
      );
  }*/
  goToIngredientesPage(){
    this.navCtrl.push(Ingredientes);
  }
  goToOrdenPage(){
    this.navCtrl.push( Orden );
  }
}
