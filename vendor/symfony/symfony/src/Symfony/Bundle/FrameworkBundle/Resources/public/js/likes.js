
function likes(){
        var idVideo = $("video").attr('id');
        var nbLikes = $("button[name='likes'] #content").html();
        var nbDislikes = $("button[name='dislikes'] #content").html();
        nbLikes++;
        nbDislikes--;
        $("button[name='likes'] #content").html(nbLikes);
        $("button[name='dislikes'] #content").html(nbDislikes);
        $("button[name='likes']").prop('disabled', true);
        $("button[name='dislikes']").removeAttr("disabled");
        $("#icon0").attr('onmouseover','');
        $("#icon0").attr('onmouseout','');
        $("#icon1").attr('onmouseover','resetIconDown("icon1");');
        $("#icon1").attr('onmouseout','changeIconDown("icon1");');
        $("#icon0").attr('src','/web/bundles/framework/images/thumbs-up-hand-symbol.png');
        $("#icon1").attr('src','/web/bundles/framework/images/thumb-down.png');
        
        var like = 1;
        var dislike = 0;
        $.post("/web/bundles/framework/php/likes.php", {like : 1, dislike : 0, idVideo : idVideo}, function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
          });
    }
    function dislikes(){  
        var idVideo = $("video").attr('id');
        var nbLikes = $("button[name='likes'] #content").html();
        var nbDislikes = $("button[name='dislikes'] #content").html();
        nbLikes--;
        nbDislikes++;
        $("button[name='likes'] #content").html(nbLikes);
        $("button[name='dislikes'] #content").html(nbDislikes);
        $("button[name='dislikes']").prop('disabled', true);
        $("button[name='likes']").removeAttr("disabled");
        $("#icon1").attr('onmouseover','');
        $("#icon1").attr('onmouseout','');
        $("#icon0").attr('onmouseover','resetIconDown("icon0");');
        $("#icon0").attr('onmouseout','changeIconDown("icon0");');
        $("#icon0").attr('src','/web/bundles/framework/images/thumbs-up.png');
        $("#icon1").attr('src','/web/bundles/framework/images/thumbs-down-silhouette.png');
        var like = 0;
        var dislike = 1;
        $.post("/web/bundles/framework/php/likes.php", {dislike : 1, like : 0, idVideo : idVideo}, function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
    }