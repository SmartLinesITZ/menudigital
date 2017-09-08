import { Component, ViewChild } from '@angular/core';
import { Events, MenuController,  Platform } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { Storage } from '@ionic/storage';
import { UserData } from '../providers/user-data';
import { Tabs } from '../pages/tabs/tabs';
import { Login } from '../pages/login/login';
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
        this.platformReady()
      });

    // decide which menu items should be hidden by current login status stored in local storage
/*    this.userData.hasLoggedIn().then((hasLoggedIn) => {
      this.enableMenu(hasLoggedIn === true);
    });
    this.enableMenu(true);

    this.listenToLoginEvents()¨*/
  }
  platformReady() {
    // Call any initial plugins when ready
    this.platform.ready().then(() => {
      this.splashScreen.hide();
    });
  }

}
