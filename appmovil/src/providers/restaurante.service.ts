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
   LoadRestaurantes(opcion) {
    var url = 'http://smartlines.hol.es/interactividad/restaurantes/restaurantes.php?opcion='+opcion;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
   searchRestaurante(name) {
    var url = 'http://smartlines.hol.es/pruebajson.php?nombrerest='+name ;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  getCategorias(idrest) {
    var url = 'http://smartlines.hol.es/interactividad/menu/categoria.php?idrest='+idrest ;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  getPlatillos(idcategoria,idrest) {
    var url = 'http://smartlines.hol.es/interactividad/menu/platillos.php?idcategoria='+idcategoria+'&idrest'+idrest ;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  getMenu(idrest) {
    var url = 'http://smartlines.hol.es/interactividad/menu/menu.php?idrest='+idrest ;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  readPedido(idpedido){
    var url = 'http://smartlines.hol.es/interactividad/pedidos/read.php?idpedido='+idpedido;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
}
