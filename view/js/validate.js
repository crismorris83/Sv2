function validate(e){
    e.preventDefault();

    form = document.getElementById("formUsuario");
    nom = document.getElementById("txtName");
    lName = document.getElementById("txtLName");
    user = document.getElementById("txtUser");
    password = document.getElementById("txtPWord");


    lvali = true;

    if(nom.value==""){
        nom.style.borderColor="red";
        lvali = false;
        ohSnap('no pusiste el nombre pa', {color: 'red'});  // alert will have class 'alert-color'
    }

    if(lName.value==""){
        lName.style.borderColor="red";
        ohSnap('no pusiste el apellido pa', {color: 'red'});  // alert will have class 'alert-color
        lvali = false;
    }

    if(user.value==""){
        user.style.borderColor="red";
        ohSnap('no pusiste el usuario pa', {color: 'red'});  // alert will have class 'alert-color
        lvali = false;
    }

    if(password.value==""){
        password.style.borderColor="red";
        ohSnap('no pusiste tu contra pa', {color: 'red'});  // alert will have class 'alert-color
        lvali = false;
    }


    if(lvali == true ){
        form.submit();

    }
}

function validateM(e){
    e.preventDefault();

    formM = document.getElementById("formUsuarioM");
    nomM = document.getElementById("txtNameM");
    lNameM = document.getElementById("txtLNameM");
    userM = document.getElementById("txtUserM");
    passwordM = document.getElementById("txtPWordM");


    lvaliM = true;

    if(nomM.value==""){
        nomM.style.borderColor="red";
        lvaliM = false;
        ohSnap('no pusiste el nombre pa', {color: 'red'});  // alert will have class 'alert-color'
    }

    if(lNameM.value==""){
        lNameM.style.borderColor="red";
        ohSnap('no pusiste el apellido pa', {color: 'red'});  // alert will have class 'alert-color
        lvaliM = false;
    }

    if(userM.value==""){
        userM.style.borderColor="red";
        ohSnap('no pusiste el usuario pa', {color: 'red'});  // alert will have class 'alert-color
        lvaliM = false;
    }

    if(passwordM.value==""){
        passwordM.style.borderColor="red";
        ohSnap('no pusiste tu contra pa', {color: 'red'});  // alert will have class 'alert-color
        lvaliM = false;
    }


    if(lvaliM == true ){
        formM.submit();

    }
}