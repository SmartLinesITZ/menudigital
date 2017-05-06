import { Injectable } from '@angular/core';
import {Http} from '@angular/http';
import 'rxjs/add/operator/map';
@Injectable()
export class ServicesRestaurante {
  //BaseUrl: string="https://api.github.com";
  //username: string="codigofacilito";
  constructor(private http: Http) { }
 /* getRest(){
  	return this.http.get("http://localhost:8000/api/restaurante");
  }*/
   LoadRestaurantes() {
    var url = 'http://smartlines.hol.es/pruebajson.php';
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
   searchRestaurante(name) {
    var url = 'http://smartlines.hol.es/pruebajson.php?nombrerest='+name ;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
}
