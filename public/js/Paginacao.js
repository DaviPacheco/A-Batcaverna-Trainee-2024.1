/* Paginaçao pra tabela */

function troca_list (num_pag){
    listas = document.querySelectorAll("table")
    listas.forEach(lista => {
        lista.style.display = "none"
    });
    listas [num_pag].style.display = "table"
}
window.addEventListener('hashchange', function() {
    var hashValue = window.location.hash.substr(1);
    troca_list(Number(hashValue)-1)
});
troca_list(0);

/* botoes pra paginação */
function troca_relativa (valor){
    pagina = Number(window.location.hash.substr(1));
    if (pagina+valor >=1 && pagina+valor <= 2){  
        location.href="#"+(pagina+valor)
    }
}