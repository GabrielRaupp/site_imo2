function show(){
    document.querySelector('ul.tabelad').classList.toggle('show')
    if (document.querySelector('ul.tabelad').classList.contains('show') == true) {
        document.getElementById('Produtos-up').innerHTML = '<i class="fa-solid fa-caret-up"></i>'
    }else {
        document.getElementById('Produtos-up').innerHTML = '<i class="fa-solid fa-caret-down"></i>'
    }
}

var abrircomprar = (imgurl, desc,preco) => {
    divboxcomprar = document.getElementById('box-compra');

    divboxcomprar.style.display = "block";
    document.getElementById('overlay-compra').style.display = 'block'

    document.getElementById('desc').innerText = desc;
    document.getElementById('preco').innerText = 'R$ '+preco+',00';
    document.getElementById('img').src = imgurl;
}


var fecharcompra = () => {
    divboxcomprar = document.getElementById('box-compra').style.display = 'none';
    document.getElementById('overlay-compra').style.display = 'none';
}
