const avancar = document.getElementById('avancar')
const voltar = document.getElementById('voltar')

let marcador = document.getElementById('marcador')

avancar.addEventListener('click',trocarImagem)
voltar.addEventListener('click',voltarImagem)

let countArray = Number(document.getElementById('count').value)



let cont = 1
marcador.innerHTML = `${cont}/${countArray}`
function trocarImagem () {
    
    if(cont < countArray) {
    let imagem = document.getElementsByTagName('img')[`${cont}`]
    imagem.setAttribute('class','off')
    cont++

    marcador.innerHTML = `${cont}/${countArray}`

    let imagemNova = document.getElementsByTagName('img')[`${cont}`]
    imagemNova.removeAttribute('class','off')


    return cont

    }else{
        marcador.innerHTML = "Não há mais imagens!"
    }
    

    

}

function voltarImagem () {
    
    if(cont > 1) {
        let imagem = document.getElementsByTagName('img')[`${cont}`]
        imagem.setAttribute('class','off')
        cont--

        marcador.innerHTML = `${cont}/${countArray}`

        let imagemNova = document.getElementsByTagName('img')[`${cont}`]
        imagemNova.removeAttribute('class','off')

        

    }else{
        marcador.innerHTML = "Não há mais imagens!"
    }

}
