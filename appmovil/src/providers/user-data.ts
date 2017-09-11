import { Injectable } from '@angular/core';

import { Events } from 'ionic-angular';
import { Storage } from '@ionic/storage';


@Injectable()
export class UserData {
  _favorites: string[] = [];
  HAS_LOGGED_IN = 'hasLoggedIn';
  HAS_SEEN_TUTORIAL = 'hasSeenTutorial';

  constructor(
    public events: Events,
    public storage: Storage
    ) {}

  hasFavorite(sessionName: string): boolean {
    return (this._favorites.indexOf(sessionName) > -1);
  };

  addFavorite(sessionName: string): void {
    this._favorites.push(sessionName);
  };

  removeFavorite(sessionName: string): void {
    let index = this._favorites.indexOf(sessionName);
    if (index > -1) {
      this._favorites.splice(index, 1);
    }
  };

  login(username: string, idUser, correo:string, telefono:string, nombre:string): void {
    this.storage.set(this.HAS_LOGGED_IN, true);
    this.setUsername(username,idUser,correo,telefono,nombre);
    this.events.publish('user:login');
  };

  signup(username: string,idUser: number, correo:string, telefono:string, nombre:string): void {
    this.storage.set(this.HAS_LOGGED_IN, true);
    this.setUsername(username,idUser,correo,telefono,nombre);
    this.events.publish('user:signup');
  };

  logout(): void {
    this.storage.remove(this.HAS_LOGGED_IN);
    this.storage.remove('username');
    this.events.publish('user:logout');
  };

  setUsername(username: string,idUser: number, correo:string, telefono:string, nombre:string): void {
    this.storage.set('username', username);
    this.storage.set('idUser', idUser);
    this.storage.set('correo', correo);
    this.storage.set('idtelefono', idUser);
    this.storage.set('nombre', nombre);
    this.hasLoggedIn();
  };

  getUsername(): Promise<string> {
    return this.storage.get('username').then((value) => {
      return value;
    });
  };

  getIdUser(): Promise<number> {
    return this.storage.get('idUser').then((value) => {
      return value;
    });
  };

  getCorreo(): Promise<string> {
    return this.storage.get('correo').then((value) => {
      return value;
    });
  };

  getTelefono(): Promise<string> {
    return this.storage.get('telefono').then((value) => {
      return value;
    });
  };

  getNombre(): Promise<string> {
    return this.storage.get('nombre').then((value) => {
      return value;
    });
  };


  hasLoggedIn(): Promise<boolean> {
    return this.storage.get(this.HAS_LOGGED_IN).then((value) => {
      return value === true;
    });
  };

  checkHasSeenTutorial(): Promise<string> {
    return this.storage.get(this.HAS_SEEN_TUTORIAL).then((value) => {
      return value;
    });
  };
}
