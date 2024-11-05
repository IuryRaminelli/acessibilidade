function lerNoticia(tituloId, noticiaId) {
    var titulo = document.getElementById(tituloId).textContent;
    var noticia = document.getElementById(noticiaId).textContent;
       
    var textoCompleto = titulo + ". " + noticia;
    
    var msg = new SpeechSynthesisUtterance(textoCompleto);
        
    msg.lang = 'pt-BR';
        
    window.speechSynthesis.speak(msg);
}