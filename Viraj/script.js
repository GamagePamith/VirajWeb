function searchbtn(){
    const search_result = document.getElementById("noteSearch");
     var form = new FormData;
     form.append("rs",search_result.value);

     var request = new XMLHttpRequest();

     request.onreadystatechange = function (){
        if(request.status == 200 & request.readyState == 4){
            var response = request.responseText;
            document.getElementById("basicSearchResult").innerHTML = response;
        }
     }
     request.open("POST","basicSearchProcess.php",true);
     request.send(form);
}
function adminSignUp(){
    const email = document.getElementById("admin-mail");
    const password = document.getElementById("admin-mail");
}
