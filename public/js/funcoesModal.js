function abrirModal(idModal,situacao){
    $ = document.querySelector.bind(document); 
$$ = document.querySelectorAll.bind(document); 
print = console.log.bind(console)
    let elemento = "body";

    let largura = $(elemento).clientWidth; 
        document.getElementById(idModal).style.display="flex";
        if(largura<=650){       
                     if(situacao==2)
                    {
                        document.getElementById(idModal).style.marginTop="120px";
                    }
                    if(situacao==3)
                    {
                        document.getElementById(idModal).style.marginTop="470px";
                    }
                    if(situacao==4)
                    {
                        document.getElementById(idModal).style.marginTop="880px";
                    }
                    if(situacao==5)
                    {
                        document.getElementById(idModal).style.marginTop="1180px";
                    }
                }
                document.getElementById("BlocoDaListaDePosts").style.opacity="0.5";
                document.getElementById("telaBloqueadora").style.display="block";  
                
    }
    function fecharModal(idModal){
        document.getElementById(idModal).style.display="none";
        document.getElementById(idModal).style.marginTop="0px";
        document.getElementById("BlocoDaListaDePosts").style.opacity="1";
        document.getElementById("telaBloqueadora").style.display="none"; 
    }

    
