import firebase from 'firebase/app';
import "firebase/auth";
import "firebase/database";
import "firebase/storage";

var config = {
    apiKey: "AIzaSyBl3D-VdLqsU_Xsqkj2YnQIVcAPT09L4kg",
    authDomain: "react-slack-clone-4eaf1.firebaseapp.com",
    databaseURL: "https://react-slack-clone-4eaf1.firebaseio.com",
    projectId: "react-slack-clone-4eaf1",
    storageBucket: "react-slack-clone-4eaf1.appspot.com",
    messagingSenderId: "159711790911"
};
firebase.initializeApp(config);

export default firebase;