$(document).ready(function(){
var path='/web/bundles/framework/images/';
var src ={
  "likes":{
    "on":path+'thumbs-up-hand-symbol.png',
    "off":path+'thumbs-up.png'  
  },
  "dislikes":{
    "on":path+'thumbs-down-silhouette.png',
    "off":path+'thumb-down.png'
  }
  }; 
$('button[name="likes"]').on('click',function(){
        var idVideo = $("video").attr('id');
        var nbLikes = $("button[name='likes'] #content").html();
        var nbDislikes = $("button[name='dislikes'] #content").html();
        var like;
        var dislike;
        if($("#icon0").attr('src') != src.likes.on){
          if($("#icon1").attr('src') == src.dislikes.on){
            nbLikes++; 
            nbDislikes--;
            like = 1;
            dislike = 0;
          }
          else {
            nbLikes++;
            like = 1;
            dislike = 0;
          }
          $("#icon0").attr('onmouseover','');
          $("#icon0").attr('onmouseout','');
          $("#icon1").attr('onmouseout','resetIconDown("icon1");');
          $("#icon0").attr('src',src.likes.on);
          $("#icon1").attr('src',src.dislikes.off);
        }
        else{ 
          nbLikes--;
          like = 0;
          dislike = 0;
          $("#icon0").attr('onmouseout','resetIconUp("icon0");');
          $("#icon0").attr('src',src.likes.off);
        }

        $("button[name='likes'] #content").html(nbLikes);
        $("button[name='dislikes'] #content").html(nbDislikes);
        $.post("/web/bundles/framework/php/likes.php", {likes : like, dislikes : dislike, idVideo : idVideo});
    });
    $('button[name="dislikes"]').on('click',function(){ 
        var idVideo = $("video").attr('id');
        var nbLikes = $("button[name='likes'] #content").html();
        var nbDislikes = $("button[name='dislikes'] #content").html();
        var like;
        var dislike;
        if($("#icon1").attr('src') != src.dislikes.on){
          if($("#icon0").attr('src') == src.likes.on){
            nbLikes--; 
            nbDislikes++;
            like = 0;
            dislike = 1;
          }
          else {
            nbDislikes++;
            like = 0;
            dislike = 1;
          }
          $("#icon1").attr('onmouseover','');
          $("#icon1").attr('onmouseout','');
          $("#icon0").attr('onmouseout','resetIconUp("icon0");');
          $("#icon0").attr('src',src.likes.off);
          $("#icon1").attr('src',src.dislikes.on);
        }
        else{
          like = 0;
          dislike = 0;
          nbDislikes--;
          $("#icon1").attr('onmouseout','resetIconDown("icon1");');
          $("#icon1").attr('src',src.dislikes.off);
        }

        $("button[name='likes'] #content").html(nbLikes);
        $("button[name='dislikes'] #content").html(nbDislikes);
        $.post("/web/bundles/framework/php/likes.php", {dislikes : dislike, likes : like, idVideo : idVideo});
    });
  
});