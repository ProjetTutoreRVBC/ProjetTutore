function readURL(input,n) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var obj = document.getElementById('display-parent-'+n);
            obj.innerHTML = '<img id="displayImg'+n+'" src="#" alt="content" >';
            reader.onload = function (e) {
                $('#displayImg'+n)
                    .attr('src', e.target.result)
                    .width(60)
                    .height(60);
            };
          
            reader.readAsDataURL(input.files[0]);
        }
    }