function imprimeDiv(objeto) {
    var objetoSel = document.getElementById(objeto);
    var printDiv = window.open(' ', 'popimpr');
    printDiv.document.write(objetoSel.innerHTML);
    printDiv.document.close();
    printDiv.print();
    printDiv.close();
}