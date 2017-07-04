

function elim()
{
    return confirm("Realmente desea editar "+ name);
}

function editar(id,controller,name)
{

    if (confirm("Realmente desea editar "+ name))
    {
        window.location = ""+controller+"/id/" + id;
    }

}
function eliminar(id, controller,name)
{

    if (confirm("Realmente desea eliminar a " +name))
    {
        window.location = ""+controller+"/id/" + id;
    }

}
//Funcion para validar por bootstrap
$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );

//Funcion para imprimir
function imprSelec(impresion)
{var ficha=document.getElementById(impresion);
    var ventimp=window.open(' ','popimpr');
    ventimp.document.write(ficha.innerHTML);
    ventimp.document.close();ventimp.print();
    ventimp.close();
}
//Funcion para pdf
function descargarPdf(contenidoID,nombre)
{
    var pdf = new jsPDF('p','pt','letter');
    html= $('#'+contenidoID).html();
    specialElementHandlers={};
    margins = {top:10 , botton :20, left :20 ,width: 700};
    pdf.fromHTML(html,margins.left,margins.top,{'width':margins.width},function(dispose){pdf.save(nombre+'.pdf');},margins);
}