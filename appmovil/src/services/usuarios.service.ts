import { Injectable } from '@angular/core';
import {Http} from '@angular/http';
import 'rxjs/add/operator/map';
@Injectable()
export class ServicesUsuarios {
  //BaseUrl: string="https://api.github.com";
  //username: string="codigofacilito";
  constructor(private http: Http) { }
 /* getRest(){
  	return this.http.get("http://localhost:8000/api/restaurante");
  }*/
   InsertUser(nombre,correo,telefono,usuario,password)
  {
    var url = 'http://smartlines.hol.es/interactividad/usuarios/create.php?nombre='+nombre+'&correo='+correo+'&telefono='+telefono+'&usuario='+usuario+'&password='+password;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
}
