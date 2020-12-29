/* PROCURAR PALAVRAS INDEVIDAS NO CAMPO DESCRIÇÃO */

/* DESCRICAO & TITULO */
function validacao(){
    var dic = [
       "senha",
       "email",
       "amor",
       "odio",
       "monkey",
       "hacker",
       "invadir",
       "script"
   ];
   var re = new RegExp(dic.join("|"), "i");	
   if(re.test(descricao.value))
   {
       descricao.value = "Você digitou algo indevido !";
       descricao.focus();
   }

   if(re.test(titulo.value))
   {
    titulo.value = "Você digitou algo indevido !";
    titulo.focus();    
   }

   
   
   /* VALIDAR PRIORIDADE */
	if(document.getElementById('prioridade').selectedIndex == 0)
	{
	alert("Selecione uma prioridade");
	return false;
    }
    
    /* VALIDAR STATUS */
    if(document.getElementById('status').selectedIndex == 0)
	{
	alert("Selecione um status");
	return false;
    }

    
	/* VALIDAR CHECKBOX*/	
	if(ck1.checked==false && ck2.checked==false && ck3.checked==false && ck4.checked==false)
    {
        alert("escolha o tipo do chamado !");
        return false;
    }

}




/* PAGINA CADASTRO */

/* Validar Email */
function validcad(){
if(email.value.length < 6 ||
    email.value.indexOf("@") <= 0 ||
    email.value.lastIndexOf(".") <= email.value.indexOf("@"))
    {
    alert("email invalido, verifique !")	;
    email.focus();
    return false;
    }

/* Validar Senha */
if(senha.value.length < 6 || senha.value.length>20
        || isNaN(senha.value)==false )
    {
        alert("A senha deve ter entre 6 e 20 caracteres")	;
        senha.focus();
        senha.value = "";
        return false;
    }
if (senha.value != confsenha.value){
    alert("Senhas diferentes,por favor digite novamente")
}
}
















