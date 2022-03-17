$(document).ready(function(){
    $('#register-btn').click(function(e){
        e.preventDefault();

        var url = $('form').serialize();

        function getUrlVars(url) {                  //YOUTUBE'DA OLAN BİR DERS ANLATIM VİDEOSUNDAN
            var hash;
            var myJson = {};
            var hashes = url.slice(url.indexOf('?') + 1).split('&');
            for (var i = 0; i < hashes.length; i++) {
                hash = hashes[i].split('=');
                myJson[hash[0]] = hash[1];
            }
            return JSON.stringify(myJson);
        }

        var test = getUrlVars(url);

        $.ajax({
            type:"POST",
            url: "api/user/create.php",
            data: test,
            ContentType:"application/json",

            success:function(){
                alert('successfully posted');
            },
            error:function(){
                alert('Could not be posted');
            }

        });
    });
});
