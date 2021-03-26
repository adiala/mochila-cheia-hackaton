function InserirEstados(){
    //Faz a requisição do JSON com o nome dos estados
    var requestURL = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados';//Url do JSON com os estados
    var request = new XMLHttpRequest();//Requisição
    request.open('GET', requestURL);
    request.responseType = 'json';
    request.send();
	
    request.onload = function() {//Pega a resposta da requisição
        var estados = request.response;
        var conteudo = document.querySelector('.dropdown-menu')//Seleciona a Dropdown list
        for(let i=0;i<estados.length;i++){//Percorre o JSON
            var li = document.createElement('li')//Cria um novo <li>
            var link =  document.createElement('a')//Cria uma novo <a>
            link.setAttribute('class','dropdown-item')//Adiciona classe ao <a>
            link.setAttribute('href','#')//A onde o link vai
            link.innerHTML = estados[i].sigla
            li.appendChild(link)//Adiciona o <a> na <li>
            conteudo.appendChild(li)//Adiciona a <li> na <ul> 
        };
      }
    }