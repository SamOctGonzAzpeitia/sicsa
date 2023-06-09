function show(){
    const role = document.getElementById("role_id").value;
    const clientContainer = document.getElementById("clientContainer");

    if(role == 3){
        clientContainer.removeAttribute("hidden");
    }else{
        clientContainer.setAttribute("hidden", true);
    }
}