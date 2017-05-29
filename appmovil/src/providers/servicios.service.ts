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
  domicilio(idrest) {
    var url = 'http://smartlines.hol.es/interactividad/servicios/servicios.php?idrest='+idrest;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  anticipado(idrest) {
    var url = 'http://smartlines.hol.es/interactividad/servicios/servicios.php?idrest='+idrest;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  reservacion(nombre,nopersonas,time,fecha,idrest,iduser) {
    var url = 'http://smartlines.hol.es/interactividad/reservaciones/create.php?idrest='+idrest+'&iduser='+iduser+'&nopersonas='+nopersonas+'&horallegada='+time+'&nombre='+nombre+'&fecha='+fecha;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  generaPedido(idrest,iduser) {
    var url = 'http://smartlines.hol.es/interactividad/pedidos/create.php?idrest='+idrest+'&iduser='+iduser+'&destino=null&tiposervicio=Pedido anticipado';
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  orden(idpedido,idplatillo) {
    var url = 'http://smartlines.hol.es/interactividad/orden/create.php?idpedido='+idpedido+'&idplatillo='+idplatillo;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }  
  pdomicilio(idrest,iduser,destino){
    var url = 'http://smartlines.hol.es/interactividad/pedidos/create.php?idrest='+idrest+'&iduser='+iduser+'&destino='+destino+'&tiposervicio=Pedido a domicilio';
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  dataorden(idpedido){
    var url = 'http://smartlines.hol.es/interactividad/orden/index.php?idpedido='+idpedido;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  eliminaarticulo(idplatillo,idpedido){
    var url = 'http://smartlines.hol.es/interactividad/orden/delete.php?idpedido='+idpedido+'&idplatillo='+idplatillo;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  readpedidos(idusuario){
    var url = 'http://smartlines.hol.es/interactividad/solicitudes/pedidos.php?iduser='+idusuario;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  readreservaciones(idusuario){
    var url = 'http://smartlines.hol.es/interactividad/solicitudes/reservacion.php?iduser='+idusuario;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  cancelarPedido(idpedido){
    var url = 'http://smartlines.hol.es/interactividad/solicitudes/cancelarPedido.php?idpedido='+idpedido;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  cancelarReservacion(idreservacion){
    var url = 'http://smartlines.hol.es/interactividad/solicitudes/cancelarReservacion.php?idreservacion='+idreservacion;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
  enviarPedido(idpedido){
    var url = 'http://smartlines.hol.es/interactividad/pedidos/update.php?idpedido='+idpedido;
    var response = this.http.get(url).map(res => res.json());
    return response;
  }
}
