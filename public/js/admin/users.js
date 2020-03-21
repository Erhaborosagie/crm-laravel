document.body.onload = () => {
    // console.log("Loaded")
    let showFormButton = document.getElementById("show-new-user-form");
    let newUserForm = document.getElementById("newUserForm");
    newUserForm.style.display="none";
    let usersTable = document.getElementById("usersTable");

    showFormButton.onclick=()=>{
        if(newUserForm.style.display==="none"){
            newUserForm.style.display="block";
            usersTable.classList.add("col-sm-8");
            usersTable.classList.remove("col-sm-12");
        }else {
            newUserForm.style.display="none";
            usersTable.classList.add("col-sm-12");
            usersTable.classList.remove("col-sm-8");
        }
    }
}
