$(function(){
    $("#add").on("click",beolvas);
    $("#betolt").on("click",adatKuld);   

});
var teendo = [];

function adatKuld(){
    var todo = {
        todo : $("#todo").val(),
        datum : $("#datum").val()       
    };

    $.ajax({
        type: "POST",
        url: "beir.php",
        data: todo,
        success: function(ujTodo){
            teendok.push(JSON.parse(ujTodo));
            console.log(teendok);
            kiir();
        },
        error:function(){
            alert("Hiba az adatok mentésekor!");
        }
    });
}
function beolvas(){
    $.ajax({
       type:"GET",
       url: "feldolgoz.php",
       success: function(result){
             console.log(result);
            teendok = JSON.parse(result);
            console.log(teendok);
            kiir();
       },
       error:function(){
           alert("hiba szöveg")
       }
    });
}

function kiir(){
    $("ul").empty();
    for (var i = 0; i < teendok.length; i++) {
        
        var todo = teendok[i].todo;
        var datum = teendok[i].datum;
        
       var elem = "<li>" + todo + " " + todo.datum + "</li> ";

        $("ul").append(elem);
    }
}


