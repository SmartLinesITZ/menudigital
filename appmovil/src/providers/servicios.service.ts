import { Injectable } from '@angular/core';
import {Http} from '@angular/http';
import 'rxjs/add/operator/map';
@Injectable()
export class ServicesServicios {
  //BaseUrl: string="https://api.github.com";
  //username: string="codigofacilito";
  constructor(private http: Http) { }
 /* getRest(){
  	return this.http.get("http://localhost:8000/api/restaurante");
  }*/
   servicios(idrest) {
    var url = 'http://smartlines.hol.es/interactividad/servicios/servicios.php?idrest='+idrest;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  
}
