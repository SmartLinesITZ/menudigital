import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
//import { GoogleMaps, GoogleMap, GoogleMapsEvent, LatLng, CameraPosition, MarkerOptions, Marker } from '@ionic-native/google-maps';
import { GeolocationService } from '../../providers/geolocation.service';
/**
 * Generated class for the Ubicacion page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
//@IonicPage()
@Component({
  selector: 'page-ubicacion',
  templateUrl: 'ubicacion.html',
})
export class Ubicacion {
inforest;
iduser;
//map : GoogleMap=null;
  constructor(public navCtrl: NavController, public navParams: NavParams, public geolocator:GeolocationService) {
    this.inforest=navParams.data.inforest;
    this.iduser = navParams.data.iduser;
  }

/*  ionViewDidLoad() {
    console.log('ionViewDidLoad Ubicacion');
    //Obtener ubicación del usuario para centrar ahí el mapa
    this.geolocator.get().then((result)=>{
    	//Cargar mapa
    	this.loadMap(result.coords.latitude, result.coords.longitude);
    }).catch((err)=>console.log(err));
  }
loadMap(lat,lng){
  	let location: LatLng = new LatLng(lat,lng);
  	this.map = new GoogleMap("map",{
  		'controls':{
  			'compass':true,
  			'myLocationButton':true,
  			'indoorPicker':true,
  			'zoom':true
  		},
  		'gestures':{
  			'scroll':true,
  			'tilt':true,
  			'rotate':true,
  			'zoom':true
   		},
   		'camera':{
   			'latLng':location,
   			'tilt':30,
   			'zoom':15,
   			'bearing':50
   		}
  	});
  	//this.map.on(GoogleMapsEvent.MAP_READY).subscribe(()=>this.loadMarkers())
  }*/
}
