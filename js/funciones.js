function cargarModificadores(primeravez){
    if(primeravez== true){
        document.getElementById("cerrar").style.display="block";
        document.getElementById("modificadores").style.display="block";
    }else{
        document.getElementById("cerrar").style.display="none";
        document.getElementById("modificadores").style.display="none";
    }
    return;
}