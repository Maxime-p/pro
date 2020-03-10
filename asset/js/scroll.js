let button = document.querySelector("#gotop")

window.addEventListener('scroll', () => {
    if (document.documentElement.scrollTop > 100) {
        button.style.display = "block"
    } else {
        button.style.display = "none"
    }

    if(document.documentElement.scrollTop > window.innerHeight*2+2*window.innerHeight/3){
        document.querySelector('#sccontact').checked = true
    }else if(document.documentElement.scrollTop > window.innerHeight*1+2*window.innerHeight/3){
        document.querySelector('#scproject').checked = true
    }else if(document.documentElement.scrollTop > 2*window.innerHeight/3){
        document.querySelector('#scdiscover').checked = true
    }else{
        document.querySelector('#sctop').checked = true
    }
})