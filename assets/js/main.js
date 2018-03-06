$(document).ready(function(){
  //pagina facebook
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  //fim pagina
  
  //popover ingredientes
  $('[data-toggle="popover"]').popover();

  //mask
  $("#cpf").mask('000.000.000-00');
  $("#telefone").mask('(00) 0000-0000');

});