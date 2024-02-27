// Obtenha os elementos
var modalPresenca = document.getElementById("modalPresenca");
var modalPresentes = document.getElementById("modalPresentes");
var modalLocal = document.getElementById("modalLocal");
var modalObservacoes = document.getElementById("modalObservacoes");

var ancoraPresenca = document.getElementById("ancoraPresenca");
var ancoraPresentes = document.getElementById("ancoraPresentes");
var ancoraLocal = document.getElementById("ancoraLocal");
var ancoraObservacoes = document.getElementById("ancoraObservacoes");

var closePresenca = document.getElementsByClassName("closePresenca")[0];
var closePresentes = document.getElementsByClassName("closePresentes")[0];
var closeLocal = document.getElementsByClassName("closeLocal")[0];
var closeObservacoes = document.getElementsByClassName("closeObservacoes")[0];

modalPresenca.style.display = "none";
modalPresentes.style.display = "none";
modalLocal.style.display = "none";
modalObservacoes.style.display = "none";

// Ao clicar no link, abra o modal
ancoraPresenca.onclick = function() {
    modalPresenca.style.display = "block";
}

ancoraPresentes.onclick = function() {
    modalPresentes.style.display = "block";
}

ancoraLocal.onclick = function() {
    modalLocal.style.display = "block";
}

ancoraObservacoes.onclick = function() {
    modalObservacoes.style.display = "block";
}

// Ao clicar no botão de fechar, feche o modal
closePresenca.onclick = function() {
    modalPresenca.style.display = "none";
}
closePresentes.onclick = function() {
    modalPresentes.style.display = "none";
    location.reload();
}
closeLocal.onclick = function() {
    modalLocal.style.display = "none";
}
closeObservacoes.onclick = function() {
    modalObservacoes.style.display = "none";
}

// Ao clicar fora do modal, feche-o
window.onclick = function(event) {
    if (event.target == modalPresenca) {
        modalPresenca.style.display = "none";
    }
    if (event.target == modalPresentes) {
        modalPresentes.style.display = "none";
        location.reload();
    }
    if (event.target == modalLocal) {
        modalLocal.style.display = "none";
    }
    if (event.target == modalObservacoes) {
        modalObservacoes.style.display = "none";
    }
}

function confirmarPresenca(){

    var nome = document.getElementById("nome").value;

    if(nome == ''){
        alert('Necessário preencher o nome completo.');
        return
    }

    $.ajax({
        type: 'post',
        url: base_url + 'Home/confirmarPresenca',
        data: {nome},
        
        success: function(result){
            
            var options  = JSON.parse(result);
            alert(options.msg);
                
            var formulario = document.getElementById("formulario");
            formulario.reset();    

      },
      error: function(xhr, status, error) {
        console.error("Erro na solicitação AJAX: " + status + " " + error);
        alert('Ocorreu um erro ao confirmar sua prensença, tente novamente mais tarde!');
      }
    
    });
}

function validarRG(rg) {
    // Verificar se o RG tem o formato correto
    var rgRegex = /^\d{2}\.\d{3}\.\d{3}-\d{1}$/;
  
    if (!rgRegex.test(rg)) {
      return false;
    } else {
    return true;
    }
}

function formatarRG(input) {
    // Remove todos os caracteres não numéricos
    var rg = input.value.replace(/\D/g, '');

    // Verifica se o RG possui 9 dígitos, caso contrário, não formata
    if (rg.length === 9) {
        rg = rg.replace(/^(\d{2})(\d{3})(\d{3})(\d{1})$/, '$1.$2.$3-$4');
    }

    input.value = rg;
}

function copiarMensagem() {
    // Mensagem que será copiada
    var mensagem = "16997898544";
  
    // Cria um elemento de texto temporário
    var inputTemporario = document.createElement("textarea");
    inputTemporario.value = mensagem;
  
    // Adiciona o elemento temporário ao corpo do documento
    document.body.appendChild(inputTemporario);
  
    // Seleciona o texto dentro do elemento de texto temporário
    inputTemporario.select();
  
    // Copia o texto selecionado para a área de transferência
    document.execCommand("copy");
  
    // Remove o elemento de texto temporário
    document.body.removeChild(inputTemporario);
  
    // Mensagem de confirmação opcional
    alert("Chave PIX copiada para a área de transferência!");
  }