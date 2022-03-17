$(document).ready(function () {
    $.getJSON("api/employee/read.php", function (json) {
        var tr;              
        for (var i = 0; i < json.length; i++) {
            tr = $('<tr/>');
            tr.append("<td class='id'>" + json[i].id + "</td>");
            tr.append("<td>" + json[i].name + "</td>");
            tr.append("<td>" + json[i].username + "</td>");
            tr.append("<td>" + json[i].department + "</td>");
            $('#emp-table').append(tr);
        }
    });
});

$(document).ready(function(){
    $('#add_emp').click(function(e){
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
            url: "api/employee/create.php",
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


$(document).on('click', '.delete_btn', function(){
    var row_index = $(this).parents('tr').prevAll().length;
    var id = $(this).parents('tr').children()[0].innerText;
   
    $.ajax({
        type:"DELETE",
        url: "api/employee/delete.php",
        data: {"id":id},
        ContentType:"application/json",

        success:function(){
            alert('successfully deleted');
        },
        error:function(){
            alert('Could not be deleted');
        }

    });
   document.getElementById('emp-table').deleteRow(row_index);
});