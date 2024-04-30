function mostrarResposta() {
    let resposta = document.getElementById("resposta").value;
    let opcao = '';
    switch(resposta) {
        case 'A':
            opcao = document.getElementById("opcao-a");
            opcao.style.backgroundColor = "#00c851";
            break;
        case 'B':
            opcao = document.getElementById("opcao-b");
            opcao.style.backgroundColor = "#00c851";
            break;
        case 'C':
            opcao = document.getElementById("opcao-c");
            opcao.style.backgroundColor = "#00c851";
            break;
        case 'D':
            opcao = document.getElementById("opcao-d");
            opcao.style.backgroundColor = "#00c851";
            break;
        case 'E':
            opcao = document.getElementById("opcao-e");
            opcao.style.backgroundColor = "#00c851";
            break;
        default:
            alert(resposta);
    }
}

const botao = document.getElementById("enviar");
if (botao) {
    botao.addEventListener('click', mostrarResposta);
}