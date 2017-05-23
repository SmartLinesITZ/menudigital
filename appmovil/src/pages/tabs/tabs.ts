import { Component } from '@angular/core';

import { About} from '../about/about';
import { Solicitudes } from '../solicitudes/solicitudes';

//import { Servicios } from '../servicios/servicios';
import { Login } from '../login/login';
//import { Pruebajson } from '../pruebajson/pruebajson';

@Component({
  templateUrl: 'tabs.html'
})
export class Tabs {
//	tab1Root=Pruebajson
  tab1Root = Login;
  tab2Root = Solicitudes;
  //tab2Root = Servicios;
  tab3Root = About;

  constructor() {

  }
}
