function VerProducto(indice) {
	catalogo = window.open("","catalogo","toolbar=no,directories=no,menubar=0,width=400,height=400");
	catalogo.document.open();
	catalogo.document.writeln("<HTML><HEAD><TITLE>" + Productos[indice].Descripcion + "</TITLE></HEAD>");
	catalogo.document.writeln("<BODY><TABLE ALIGN=\"CENTER\"><TR><TD><FONT FACE=\"Arial\">");
	catalogo.document.writeln(Productos[indice].Imprimir());
	catalogo.document.writeln("</FONT></TD><TD>");
	catalogo.document.writeln(Productos[indice].VerImagen());
	catalogo.document.writeln("</TD></TR></TABLE></BODY></HTML>");
	catalogo.document.close();
	catalogo.focus();	
}