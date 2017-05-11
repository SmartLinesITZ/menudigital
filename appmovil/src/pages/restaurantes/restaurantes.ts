import { Component, OnInit } from '@angular/core';
import { NavController, NavParams, LoadingController} from 'ionic-angular';
import { Infores } from '../infores/infores';
import { ServicesRestaurante } from '../../providers/restaurante.service';
/**
 * Generated class for the Lists page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
 //@IonicPage()
 @Component({
   selector: 'page-restaurantes',
   templateUrl: 'restaurantes.html',
 })
 export class Restaurantes implements OnInit{
   restaurantes: Array<any>;
   loader: any;
   opcion:string;
   // restaurantes:any []=[];
   //restaurante:IRestaurante = {nombrerest:"", horarios:"",logo:""};
   constructor(public navCtrl: NavController, public navParams: NavParams, public data:ServicesRestaurante, public loadingCtrl:LoadingController) {
     this.opcion = navParams.data.opcion;  
   }
   ngOnInit() {

     //loadingCtrl.presentLoading();
     this.data.LoadRestaurantes(this.opcion).subscribe(
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
   mostrarRestaurantes()
   {

   }
   search(event, key)
   {
     if(event.target.value.length > 0) {
       this.data.searchRestaurante(event.target.value).subscribe(
         data => {
           this.restaurantes = data; //duda
           console.log(data);
         },
         err => {
           console.log(err);
         },
         () => console.log('Movie Search Complete')
         );
     }
   }
   Refresh()
   {
     //this.presentLoading();
     this.data.LoadRestaurantes(this.opcion).subscribe(
       data => {
         this.restaurantes = data;
         console.log(data);
         this.loader.dismiss();
       },
       err => {
         console.log(err);
       },
       () => console.log('Movie Search Complete')
       );
   }
   ionViewDidLoad() {
     console.log('ionViewDidLoad Lists');
   }
   goToInforesPage(restaurante){
     this.navCtrl.push(Infores,{restaurante:restaurante});
   }
 }
/*
  interface IRestaurante{
    nombrerest:string,
    horarios:string,
    logo:string;
  }
  */
/*
  ngOnInit() {
    this.restService.getRest().subscribe((data)=>{
      console.log(data.json());
      this.restaurantes=data.json();
      this.restaurante=this.restaurantes[1];
    })*/

    /*this.restaurantes.push({
      name:'Wings',
      description:'Las mejores alitas',
      horario:'10:00 am - 11:00 pm',
      imgUrl:'http://parabien.com.mx/img/slides/01.png'
    });
    this.restaurantes.push({
      name:'Vancouber',
      description:'Promo los martes',
      horario:'1:00 pm - 11:00 pm',
      imgUrl:'http://www.vancouverwings.com/img/logo_vancouverwings.png'

    });
    this.restaurantes.push({
      name:'KFC',
      description:'Somos carerillos',
      horario:'10:00 am - 8:00 pm',
      imgUrl:'http://image.vanguardia.com.mx/sites/default/files/kfc-2.jpg'
    });*/