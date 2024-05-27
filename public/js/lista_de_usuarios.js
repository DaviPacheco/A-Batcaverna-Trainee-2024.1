function abrirModal(idModal,situacao){
    $ = document.querySelector.bind(document); 
$$ = document.querySelectorAll.bind(document); 
print = console.log.bind(console)
    let elemento = "body";

    let largura = $(elemento).clientWidth; 
        document.getElementById(idModal).style.display="flex";
        if(largura<=650){
                if(situacao==1)
                 {
                    document.getElementById(idModal).style.marginTop="-2000px";
                 }
                     if(situacao==2)
                    {
                        document.getElementById(idModal).style.marginTop="-1600px";
                    }
                    if(situacao==3)
                    {
                        document.getElementById(idModal).style.marginTop="-1250px";
                    }
                    if(situacao==4)
                    {
                        document.getElementById(idModal).style.marginTop="-900px";
                    }
                    if(situacao==5)
                    {
                        document.getElementById(idModal).style.marginTop="-600px";
                    }
                }
                document.getElementById("BlocoDaListaDeUsuarios").style.opacity="0.5";
                document.getElementById("telaBloqueadora").style.display="block";

    }
    function fecharModal(idModal){
        document.getElementById(idModal).style.display="none";
        document.getElementById(idModal).style.marginTop="-615px";
        document.getElementById("BlocoDaListaDeUsuarios").style.opacity="1";
        document.getElementById("telaBloqueadora").style.display="none"; 
    }