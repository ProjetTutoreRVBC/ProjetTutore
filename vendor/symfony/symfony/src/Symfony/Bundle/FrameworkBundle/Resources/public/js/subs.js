$(document).ready(function(){
  
  $('#abonnement button').on('click',function(){
    var self = $(this);
    var idPage = $('input[name="abonnement"]').val();
    var nbAbonnes = $('#nb-abonnes').text();
    switch(self.attr('id')){
    case'button-ab':
        self.find('p').text('se désabonner');
        self.css('background-color','red');
        self.attr('id','button-des');
        nbAbonnes++;
        $('#nb-abonnes').text(nbAbonnes);
        $.post('/web/bundles/framework/php/abonne.php',{idPage: idPage});
        break;
    case'button-des':
        self.find('p').text("s'abonner");
        self.css('background-color','');
        self.attr('id','button-ab');
        nbAbonnes--;
        $('#nb-abonnes').text(nbAbonnes);
        $.post('/web/bundles/framework/php/desabonne.php',{idPage: idPage});
        break;
    }
  });
    //$.post('/web/bundles/framework/php/delete_comment.php',{idComment: idComment});
});