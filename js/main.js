function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

// TENTANDO ADICIONAR O FIREBASE 

(function () {


var firebaseConfig = {
  apiKey: "AIzaSyDDYfPmafmtdlqCZVrFW2HcsOHmjYsLs_8",
  authDomain: "mochila-cheia.firebaseapp.com",
  databaseURL: "https://mochila-cheia-default-rtdb.firebaseio.com",
  projectId: "mochila-cheia",
  storageBucket: "mochila-cheia.appspot.com",
  messagingSenderId: "618389896587",
  appId: "1:618389896587:web:e62708a820d57ade0fc38e"
};

 firebase.initializeApp(firebaseConfig);

})()

// Função de novo usuario

const person_database = {};

(function (){

  let person_id = false;

  function new_person(nome, email, whatsApp, escola) {
    const person_data = {
      nome: nome,
      email: email,
      whatsApp: whatsApp,
      escola: escola,
    };

    if (!person_id){
      person_id = firebase.database().ref().child('person').push().key;
    }

    let updates =   {};
    updates['/person/' + person_id] = person_data;

    let person_ref = firebase.database().ref();

    person_ref.update (updates)
      .then(function (){
        return { sucess: true, message: 'Cadastro Efetuado'};
      })
      .catch(function (error){
        return { sucess: false, message: 'Falha no Cadastro'};
      })
   }

  person_database.new = new_person;

})()