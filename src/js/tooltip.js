var LastBoxId = ""

function myFunction(e) {

    var boxId = e.target.id
    var boxEle = document.getElementById(boxId)

    //Si null se réfère au dernier ID enregistrés
    if(boxEle != null){
        var box = boxEle.getBoundingClientRect()
        LastBoxId = boxId
    }else{
        boxEle = document.getElementById(LastBoxId)
        var box = boxEle.getBoundingClientRect()
    }


    var toolEle = boxEle.childNodes[1]
    var tool = toolEle.getBoundingClientRect()
    var toolMargin = -30

    //position par rapport au pointeur
    var x = e.clientX - box.x - tool.width/2;
    var y = e.clientY - box.y + 15;

    //definition des limite
    //éditable via toolMargin
    if(x < 0 + toolMargin){
        x = 0 + toolMargin
    }
    if(x > (Math.round(box.width) - tool.width) - toolMargin){
        x = (Math.round(box.width) - tool.width) - toolMargin
    }
    if(y > (Math.round(box.height) - tool.height) - toolMargin){
        y = (Math.round(box.height) - tool.height) - toolMargin
    }

    //Applique les modification de position
    toolEle.style.left = x + "px";
    toolEle.style.top = y + "px";
}