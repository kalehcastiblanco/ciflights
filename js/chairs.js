var selected = 0;
function setChair(chair, quantity){
    if(!chair.checked){
        selected--;
    }else{
        if(quantity>selected){
            selected++;
        }else{
            alert("Total de sillas seleccionadas");
            chair.checked = false;
        }
    }
}