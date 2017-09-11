import { Component } from '@angular/core';
import { NavController, Platform, NavParams, ActionSheetController, ToastController, LoadingController, Loading } from 'ionic-angular';
import { UserData } from '../../providers/user-data';
import { File } from '@ionic-native/file';
import { Transfer, TransferObject } from '@ionic-native/transfer';
import { FilePath } from '@ionic-native/file-path';
import { Camera } from '@ionic-native/camera';
declare var cordova: any;
/**
 * Generated class for the PerfilPage page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */
 //@IonicPage()
 @Component({
 	selector: 'page-perfil',
 	templateUrl: 'perfil.html',
 })
 export class Perfil {
 	username: string;
 	currentName;
 	correctPath;
 	correo;
 	telefono;
 	nombre;
 	lastImage: string = null;
 	loading: Loading;
 	cambios:boolean=false;
 	editarusername:boolean=false;
 	editarnombre:boolean=false;
 	editartelefono:boolean=false;
 	editarcorreo:boolean=false;

 	constructor(
 		public navCtrl: NavController, 
 		public navParams: NavParams, 
 		public userData: UserData, 
 		private camera: Camera, 
 		private transfer: Transfer, 
 		private file: File, 
 		private filePath: FilePath, 
 		public actionSheetCtrl: ActionSheetController, 
 		public toastCtrl: ToastController, 
 		public platform: Platform, 
 		public loadingCtrl: LoadingController
 		) { }
 	ionViewDidLoad() {
 		this.getDatosUsuario();
 	}

 	getDatosUsuario() {
 		this.userData.getUsername().then((username) => {
 		this.username = username;
 		});
 		this.userData.getCorreo().then((correo) => {
 		this.correo = correo;
 		});
 		this.userData.getTelefono().then((telefono) => {
 		this.telefono = telefono;
 		});
 		this.userData.getNombre().then((nombre) => {
 		this.nombre = nombre;
 		});
 	}
 	public presentActionSheet() { //Menú que se desprende
 		let actionSheet = this.actionSheetCtrl.create({
 			//title: 'Select Image Source',
 			buttons: [
 			{
 				text: 'Subir foto de galería',
 				handler: () => {
 					this.takePicture(this.camera.PictureSourceType.PHOTOLIBRARY);
 				}
 			},
 			{
 				text: 'Tomar una foto',
 				handler: () => {
 					this.takePicture(this.camera.PictureSourceType.CAMERA);
 				}
 			},
 			{
 				text: 'Cancelar',
 				role: 'cancel'
 			}
 			]
 		});
 		actionSheet.present();
 	}
 	public takePicture(sourceType) { //Tomar la foto
 		// Create options for the Camera Dialog
 		var options = {
 			quality: 100,
 			sourceType: sourceType,
 			saveToPhotoAlbum: false,
 			correctOrientation: true
 		};

 		// Get the data of an image
 		this.camera.getPicture(options).then((imagePath) => {
 			// Special handling for Android library
 			if (this.platform.is('android') && sourceType === this.camera.PictureSourceType.PHOTOLIBRARY) {
 				this.filePath.resolveNativePath(imagePath).then(filePath => {
 					//this.presentToast('Entro2');
 					this.correctPath = filePath.substr(0, filePath.lastIndexOf('/') + 1);
 					this.currentName = imagePath.substring(imagePath.lastIndexOf('/') + 1, imagePath.lastIndexOf('?'));
 					this.copyFileToLocalDir(this.correctPath, this.currentName, this.createFileName());
 					//this.presentToast('Ya se obtuvo a correctPaht '+this.correctPath+'y currentName'+this.currentName);
 				});
 			} else {
 				this.currentName = imagePath.substr(imagePath.lastIndexOf('/') + 1);
 				this.correctPath = imagePath.substr(0, imagePath.lastIndexOf('/') + 1);
 				this.copyFileToLocalDir(this.correctPath, this.currentName, this.createFileName());
 				//this.presentToast('correctPaht= '+this.correctPath);         
 			}
 		}, (err) => {
 			this.presentToast('Error al seleccionar imagen');
 		});
 	}
 	// Create a new name for the image
 	private createFileName() {
 		var d = new Date(),
 		n = d.getTime(),
 		newFileName =  n + ".jpg";
 		return newFileName;
 	}

 	// Copy the image to a local folder
 	private copyFileToLocalDir(namePath, currentName, newFileName) {
 		this.file.copyFile(namePath, currentName, cordova.file.dataDirectory, newFileName).then(success => {
 		this.lastImage = newFileName;
 		}, error => {
 			this.presentToast('Error while storing file.');
 		});
 	}

 	private presentToast(text) {
 		let toast = this.toastCtrl.create({
 			message: text,
 			duration: 12000,
 			position: 'top'
 		});
 		toast.present();
 	}

 	// Always get the accurate path to your apps folder
 	public pathForImage(img) {
 		if (img === null) {
 			return '';
 		} else {
 			return cordova.file.dataDirectory + img;
 		}
 	}
 	public uploadImage() {
 		// Destination URL
 		var url = "http://smartlines.hol.es/interactividad/usuarios/upload.php";

 		// File for Upload
 		var targetPath = this.pathForImage(this.lastImage);

 		// File name only
 		var filename = this.lastImage;

 		var options = {
 			fileKey: "file",
 			fileName: filename,
 			chunkedMode: false,
 			mimeType: "multipart/form-data",
 			params : {'fileName': filename}
 		};

 		const fileTransfer: TransferObject = this.transfer.create();

 		this.loading = this.loadingCtrl.create({
 			content: 'Guardando cambios',
 		});
 		this.loading.present();

 		// Use the FileTransfer to upload the image
 		fileTransfer.upload(targetPath, url, options).then(data => {
 			this.loading.dismissAll()
 			this.presentToast('Se ha actualizado su foto de perfil correctamente');
 		}, err => {
 			this.loading.dismissAll()
 			this.presentToast('Error al subir foto');
 		});
 	}
 }
