// let btn = document.querySelector('.fa-eye')

// btn.addEventListener('click', ()=>{
//   let inputSenha = document.querySelector('#senha')

//   if(inputSenha.getAttribute('type') == 'password'){
//     inputSenha.setAttribute('type', 'text')
//   } else {
//     inputSenha.setAttribute('type', 'password')
//   }
// })

function verSenha() {
  var inputShow = document.getElementById('senha');
  var btnShow = document.getElementById('btn-show');

  // Verificando se a senha esta oculta ou a mostra
  if (inputShow.type === 'password') {
    inputShow.setAttribute('type', 'text');
    btnShow.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
  } else {
    inputShow.setAttribute('type', 'password');
    btnShow.classList.replace('bi-eye-slash-fill', 'bi-eye-fill');
  }
}

function verConfirmSenha() {
  var inputShow = document.getElementById('confirmSenha');
  var btnShow = document.getElementById('btn-confirm-show');

  // Verificando se a senha esta oculta ou a mostra
  if (inputShow.type === 'password') {
    inputShow.setAttribute('type', 'text');
    btnShow.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
  } else {
    inputShow.setAttribute('type', 'password');
    btnShow.classList.replace('bi-eye-slash-fill', 'bi-eye-fill');
  }
}

let btn = document.querySelector('#verSenha')
let btnConfirm = document.querySelector('#verConfirmSenha')


let nome = document.querySelector('#nome')
let labelNome = document.querySelector('#labelNome')
let validNome = false

let usuario = document.querySelector('#usuario')
let labelUsuario = document.querySelector('#labelUsuario')
let validUsuario = false

let cartao = document.querySelector('#cartao')
let labelCartao = document.querySelector('#labelCartao')
let validCartao = false

let senha = document.querySelector('#senha')
let labelSenha = document.querySelector('#labelSenha')
let validSenha = false

let confirmSenha = document.querySelector('#confirmSenha')
let labelConfirmSenha = document.querySelector('#labelConfirmSenha')
let validConfirmSenha = false

let msgError = document.querySelector('#msgError')
let msgSuccess = document.querySelector('#msgSuccess')



nome.addEventListener('keyup', () => {
  if (nome.value.length <= 2) {
    labelNome.setAttribute('style', 'color: red')
    labelNome.innerHTML = 'Nome *Insira no minimo 3 caracteres'
    nome.setAttribute('style', 'border-color: red')
    validNome = false
  } else {
    labelNome.setAttribute('style', 'color: green')
    labelNome.innerHTML = 'Nome'
    nome.setAttribute('style', 'border-color: green')
    validNome = true
  }
})

usuario.addEventListener('keyup', () => {
  if (usuario.value.length <= 10) {
    labelUsuario.setAttribute('style', 'color: red')
    labelUsuario.innerHTML = 'Usuário *Insira no minimo 11 caracteres'
    usuario.setAttribute('style', 'border-color: red')
    validUsuario = false
  } else {
    labelUsuario.setAttribute('style', 'color: green')
    labelUsuario.innerHTML = 'CPF'
    usuario.setAttribute('style', 'border-color: green')
    validUsuario = true
  }
})

cartao.addEventListener('keyup', () => {
  if (cartao.value.length <= 15) {
    labelCartao.setAttribute('style', 'color: red')
    labelCartao.innerHTML = 'Usuário *Insira no minimo 16 caracteres'
    cartao.setAttribute('style', 'border-color: red')
    validCartao = false
  } else {
    labelCartao.setAttribute('style', 'color: green')
    labelCartao.innerHTML = 'CPF'
    cartao.setAttribute('style', 'border-color: green')
    validCartao = true
  }
})

senha.addEventListener('keyup', () => {
  if (senha.value.length <= 5) {
    labelSenha.setAttribute('style', 'color: red')
    labelSenha.innerHTML = 'Senha *Insira no minimo 6 caracteres'
    senha.setAttribute('style', 'border-color: red')
    validSenha = false
  } else {
    labelSenha.setAttribute('style', 'color: green')
    senha.setAttribute('style', 'border-color: green')
    validSenha = true
  }
})

confirmSenha.addEventListener('keyup', () => {
  if (senha.value != confirmSenha.value) {
    labelConfirmSenha.setAttribute('style', 'color: red')
    labelConfirmSenha.innerHTML = 'Confirmar Senha *As senhas não conferem'
    confirmSenha.setAttribute('style', 'border-color: red')
    validConfirmSenha = false
  } else {
    labelConfirmSenha.setAttribute('style', 'color: green')
    labelConfirmSenha.innerHTML = 'As senhas conferem'
    confirmSenha.setAttribute('style', 'border-color: green')
    validConfirmSenha = true
  }
})

function validacao() {
  if (validNome && validUsuario && validSenha && validConfirmSenha) {
    let listaUser = JSON.parse(localStorage.getItem('listaUser') || '[]')

    listaUser.push(
      {
        nomeCad: nome.value,
        userCad: usuario.value,
        senhaCad: senha.value
      }
    )

    localStorage.setItem('listaUser', JSON.stringify(listaUser))


    msgSuccess.setAttribute('style', 'display: block')
    msgSuccess.setAttribute('style', 'color: green')
    msgSuccess.innerHTML = '<strong>Informações Validadas</strong>'
    msgError.setAttribute('style', 'display: none')
    msgError.innerHTML = ''
  } else {
    msgError.setAttribute('style', 'display: block')
    msgError.innerHTML = '<strong>Preencha todos os campos corretamente seguirmos com o pagamento</strong>'
    msgSuccess.innerHTML = ''
    msgSuccess.setAttribute('style', 'display: none')
  }
}

btn.addEventListener('click', () => {
  let inputSenha = document.querySelector('#senha')

  if (inputSenha.getAttribute('type') == 'password') {
    inputSenha.setAttribute('type', 'text')
  } else {
    inputSenha.setAttribute('type', 'password')
  }
})

btnConfirm.addEventListener('click', () => {
  let inputConfirmSenha = document.querySelector('#confirmSenha')

  if (inputConfirmSenha.getAttribute('type') == 'password') {
    inputConfirmSenha.setAttribute('type', 'text')
  } else {
    inputConfirmSenha.setAttribute('type', 'password')
  }
})





