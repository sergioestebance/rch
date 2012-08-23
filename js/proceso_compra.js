function LE(){
//$("#pc-detail").dialog("open");
$("#Procesocompra_nombre").val("LICITACION");
$("#Procesocompra_caracteristicas").val("LICITACION PUBLICA 100 y 1000 UTM");
}

function L1(){
//$("#pc-detail").dialog("open");
$("#Procesocompra_nombre").val("LICITACION");
$("#Procesocompra_caracteristicas").val("LICITACION PUBLICA HASTA 100 UTM");

}

function LP(){
//$("#pc-detail").dialog("open");
$("#Procesocompra_nombre").val("LICITACION");
$("#Procesocompra_caracteristicas").val("LICITACION PUBLICA SUPERIOR 1000 UTM");
}

function TD(){
//$("#pc-detail-td").dialog("open");
$("#Procesocompra_nombre").val("TRATO DIRECTO");
$("#Procesocompra_caracteristicas").val("TRATO DIRECTO");
}

function CM(){
//$("#pc-detail-td").dialog("open");
$("#Procesocompra_nombre").val("CONVENIO MARCO");
$("#Procesocompra_caracteristicas").val("CONVENIO MARCO");
}

function ME(){
//$("#pc-detail-td").dialog("open");
$("#Procesocompra_nombre").val("COMPRA MENOR");
$("#Procesocompra_caracteristicas").val("COMPRA MENOR");
}

function CargarPC(tipo_pc){
window[tipo_pc]();
$("#Procesocompra_nombre").attr("readonly", true);
$("#Procesocompra_caracteristicas").attr("readonly", true);
}
