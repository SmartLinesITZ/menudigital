import { Injectable } from '@angular/core';
import {Http} from '@angular/http';
import 'rxjs/add/operator/map';
@Injectable()
export class ServicePrueba {
  //BaseUrl: string="https://api.github.com";
  //username: string="codigofacilito";
  constructor(private http: Http) { }
 /* getRest(){
  	return this.http.get("http://localhost:8000/api/restaurante");
  }*/
   LoadPrueba() {
    var url = 'https://isc570castro.github.io/Ejemplo/restaurantes.json';
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
   searchRest(rest) {
    //var url = 'http://nipc.esy.es/nip/backend/index.php?r=members/searchmembers&name='+rest ;
    var url = 'http://nipc.esy.es/nip/backend/index.php?r=members/searchmembers&name='+rest ;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  
}
