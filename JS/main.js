
//Criando evento de abrir e fechar menu mobile

// var btnMenuElement = document.querySelector('.menu-principal__btn');
// var menuPrincipalElement = document.querySelector('.menu-principal');

// btnMenuElement.addEventListener('click', abrirFecharMenu);

// function abrirFecharMenu(){
//     menuPrincipalElement.classList.toggle('menu-principal--fechar');
// }


//JQUERY

$('.menu-principal__btn').click(function(){
    $('.menu-principal').toggleClass('menu-principal--fechar');
});

//Seção depoimentos 

$('.depoimento__caixa').slick({
    autoplay:true,
    arrows: false,
    dots: true
});

$( '.formulario').validate({
    rules: {
        nome: 'required',
        mensagem: 'required',
        email:{
            required: true,
            email: true,
            }
    },
    messages:{
        nome: 'Por favor, preencha o campo',
        mensagem:'Por favor, preencha o campo',
        email:{
            required: 'Por favor, preencha o campo',
            email: 'Email inválido'
        }

    }
});