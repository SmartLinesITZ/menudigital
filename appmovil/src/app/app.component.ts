import { Component, ViewChild } from '@angular/core';
import { Events, MenuController, Platform, Nav } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { Storage } from '@ionic/storage';
import { UserData } from '../providers/user-data';
import { Tabs } from '../pages/tabs/tabs';
import { Login } from '../pages/login/login';
import { Perfil } from '../pages/perfil/perfil';

export interface PageInterface {
  title: string;
  name: string;
  component: any;
  icon: string;
  logsOut?: boolean;
  index?: number;
  tabName?: string;
  tabComponent?: any;
}
@Component({
  templateUrl: 'app.template.html'
})
export class MyApp {
  username: string;
  @ViewChild(Nav) nav: Nav;

  // List of pages that can be navigated to from the left menu
  // the left menu only works after login
  // the login page disables the left menu
  vistamenu: PageInterface[] = [
  { title: 'Perfil', name: 'Perfil', component: Perfil, icon: 'person' }
  ];
  
  rootPage:any = Tabs;

  constructor(
    public events: Events,
    public userData: UserData,
    public menu: MenuController,
    public platform: Platform,
    public storage: Storage,
    public splashScreen: SplashScreen
    ) {
    this.storage.get('hasLoggedIn')
    .then((hasLoggedIn) => {
      if (hasLoggedIn) {
        this.rootPage = Tabs;
      } else {
        this.rootPage = Login;
      }
      this.getUsername();
      this.platformReady();
    });
  }
  platformReady() {
    // Call any initial plugins when ready
    this.platform.ready().then(() => {
      this.splashScreen.hide();
    });
  }
  openPerfil(){
    this.nav.setRoot(Perfil);
  }
  getUsername() {
    this.userData.getUsername().then((username) => {
      this.username = username;
    });
  }
}
