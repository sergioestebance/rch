function HON(){
$("#Procesogasto_nombre").val("Honorarios");
}
function VIAT(){
$("#Procesogasto_nombre").val("Viaticos");
}
function SARC(){
$("#Procesogasto_nombre").val("Suma a Rendir Cuentas");
}
function CONT(){
$("#Procesogasto_nombre").val("Contancias");
}
function CargarPG(tipo_pc){
window[tipo_pc]();
$("#Procesogasto_nombre").attr("readonly", true);
}
