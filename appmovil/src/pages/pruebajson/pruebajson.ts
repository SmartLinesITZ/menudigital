import { Component, OnInit } from '@angular/core';
import { NavController, NavParams,LoadingController} from 'ionic-angular';
import { ServicePrueba } from '../../services/pruebaservicios.service';
/**
 * Generated class for the Pruebajson page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-pruebajson',
  templateUrl: 'pruebajson.html',
})
export class Pruebajson implements OnInit{
   restaurantes: Array<any>;
    loader: any;
 // restaurantes:any []=[];
  //restaurante:IRestaurante = {nombrerest:"", horarios:"",logo:""};
  constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicePrueba, public loadingCtrl:LoadingController) { }
      ngOnInit()
  {
      //this.presentLoading();
      this.data.LoadPrueba().subscribe(
        data => {
          this.restaurantes = data;
          console.log(data);
        //    loadingCtrl.loader.dismiss();
        },
        err => {
          console.log(err);
        },
        () => console.log('Movie Search Complete')
    );
  
 }
 search(event, key)
  {
      if(event.target.value.length > 0) {
          this.data.searchRest(event.target.value).subscribe(
              data => {
                  this.restaurantes = data;
                  console.log(data);
              },
              err => {
                  console.log(err);
              },
              () => console.log('Movie Search Complete')
          );
      }
  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad Lists');
  }
}