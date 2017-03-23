$(document).ready(function(){
  $('#comment').on('submit',function(ev){
    ev.preventDefault();
    var comment = $(this).find('textarea[name="comment"]').val();
    var idVideo =  $("video").attr('id');
    var idChannel = $('a[name="channel"]').attr('id');
    alert(idVideo+' - '+idChannel);
    $.post('/web/bundles/framework/php/comments.php',{comment : comment, idChannel : idChannel, idVideo : idVideo},function(data, success){ 
      $('#comment').after(data);
    });
   });
   $('button[name="delete_comment"]').on('click',function(){
    var idComment = $(this).prev().val();
    $('#'+idComment).remove();
    $.post('/web/bundles/framework/php/delete_comment.php',{idComment: idComment});
   }); 
});

