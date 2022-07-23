import {initializeApp} from "firebase/app";
import {getDatabase, ref, set} from "firebase/database";

const firebaseConfig = {
    apiKey: "AIzaSyBAcr4xnCVvUpREnnoYwZf0LPqY8MlVteY",
    authDomain: "first-project-9dd78.firebaseapp.com",
    projectId: "first-project-9dd78",
    storageBucket: "first-project-9dd78.appspot.com",
    messagingSenderId: "202189583336",
    appId: "1:202189583336:web:0d6bf46b0a63c695b52a5d",
    measurementId: "G-ZJSQN5NL70"
  };

const app = initializeApp(firebaseConfig);
const db = getDatabase();

const addSignUpForm = document.querySelector('.signup')
addSignUpForm.addEventListener('submit', (e) =>{
    e.preventDefault();

    const reference = ref(db, 'users/');

    set(reference, {
        owner_name: addSignUpForm.oName.value,
        phone: addSignUpForm.pNum.value,
        email: addSignUpForm.email.value,
        restaurant_addres: addSignUpForm.rAdd.value,
        password: addSignUpForm.pass.value
    })

    addSignUpForm.reset();
})