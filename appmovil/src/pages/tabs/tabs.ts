import { Component } from '@angular/core';

import { NavParams } from 'ionic-angular';
//import { About} from '../about/about';
import { Solicitudes } from '../solicitudes/solicitudes';
import { Infores } from '../infores/infores';

//import { Servicios } from '../servicios/servicios';
import { Opciones } from '../opciones/opciones';
//import { Pruebajson } from '../pruebajson/pruebajson';

@Component({
  templateUrl: 'tabs.html'
})
export class Tabs {
  tab1Root:any = Opciones;
  tab2Root:any = Solicitudes;
  tab3Root:any = Infores;
  mySelectedIndex: number;
  constructor(navParams: NavParams) {
	this.mySelectedIndex = navParams.data.tabIndex || 0;
  }
}
