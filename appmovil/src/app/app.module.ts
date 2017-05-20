import { NgModule, ErrorHandler } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { IonicApp, IonicModule, IonicErrorHandler } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { HttpModule } from '@angular/http';
import { MyApp } from './app.component';
import { IonicStorageModule } from '@ionic/storage';

import { HomePage } from '../pages/home/home';
import { Menu } from '../pages/menu/menu';
import { Users } from '../pages/users/users';
import { Restaurantes } from '../pages/restaurantes/restaurantes';
import { Login } from '../pages/login/login';
import { Registro } from '../pages/registro/registro';
import { Opciones } from '../pages/opciones/opciones';
import { Infores } from '../pages/infores/infores';
import { Ingredientes } from '../pages/ingredientes/ingredientes';
import { Orden } from '../pages/orden/orden';
import { Pagos } from '../pages/pagos/pagos';
import { Ubicacion } from '../pages/ubicacion/ubicacion';
import { Servicios } from '../pages/servicios/servicios';
import { Panticipado } from '../pages/panticipado/panticipado';
import { Reservacion } from '../pages/reservacion/reservacion';
import { Tabs } from '../pages/tabs/tabs';
import { About } from '../pages/about/about';
import { Pruebajson } from '../pages/pruebajson/pruebajson';
import { Bienvenida } from '../pages/bienvenida/bienvenida';
import { Solicitudes } from '../pages/solicitudes/solicitudes';


//import { GeolocationService } from '../services/geolocation.service';
//import { Geolocation } from '@ionic-native/geolocation';
import { ServicePrueba } from '../providers/pruebaservicios.service';
import { ServicesRestaurante } from '../providers/restaurante.service';
import { ServicesUsuarios } from '../providers/usuarios.service';
import { ServicesServicios } from '../providers/servicios.service';

@NgModule({
  declarations: [
     MyApp,
    HomePage,
    Menu,
    Users,
    Restaurantes,
    Login,
    Registro,
    Opciones,
    Infores,
    Ingredientes,
    Orden,
    Pagos,
    Ubicacion,
    Servicios,
    Panticipado,
    Reservacion,
    Tabs,
    About,
    Solicitudes,
    Pruebajson,
    Bienvenida
  ],
  imports: [
   HttpModule,
    BrowserModule,
    IonicModule.forRoot(MyApp),
     IonicStorageModule.forRoot()
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    Menu,
    Users,
    Restaurantes,
    Login,
    Registro,
    Opciones,
    Infores,
    Ingredientes,
    Orden,
    Pagos,
    //Ubicacion,
    Servicios,
    Panticipado,
    Reservacion,
    Tabs,
    About,
    Solicitudes,
    Pruebajson,
    Bienvenida
  ],
  providers: [
    ServicesUsuarios,
    ServicesRestaurante,
    ServicePrueba,
    ServicesServicios,
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}
