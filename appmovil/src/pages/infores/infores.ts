import { Component,ViewChild, ElementRef  } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Servicios } from '../servicios/servicios';
import { ConferenceData } from '../../providers/conference-data';
declare var google:any;
//declare var google: any;
@Component({
  selector: 'page-infores',
  templateUrl: 'infores.html',
})
export class Infores {
  inforest;
  user;
  
  @ViewChild('mapCanvas') mapElement: ElementRef;
  constructor(public confData: ConferenceData, public navCtrl: NavController, public navParams: NavParams) {
    this.inforest = navParams.data.restaurante;
    this.user = navParams.data.user;
  }
  ionViewDidLoad() {
    this.confData.getMap1().subscribe((mapData: any) => {
      let mapEle = this.mapElement.nativeElement;

      let map = new google.maps.Map(mapEle, {
        center: mapData.find((d: any) => d.center),
        zoom: 16
      });
      mapData.forEach((markerData: any) => {
        let infoWindow = new google.maps.InfoWindow({
          content: `<h5>${markerData.name}</h5>`
        });

        let marker = new google.maps.Marker({
          position: markerData,
          map: map,
          title: markerData.name
        });

        marker.addListener('click', () => {
          infoWindow.open(map, marker);
        });
      });
      google.maps.event.addListenerOnce(map, 'idle', () => {
        mapEle.classList.add('show-map');
      });
    });
  }
 
  /*goToServiciosPage(inforest,user){
    this.navCtrl.push(Servicios,{inforest:inforest,user:user});
  }*/
}
