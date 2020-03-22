document.body.onload = () =>{
    // console.log("We won");
    let openEdit = document.getElementById("open_edit");
    let closeEdit = document.getElementById("close_edit");
    let userModal = document.getElementById("user-modal");
    let usersTable = document.getElementById("usersTable");

    openEdit.onclick=()=>{
        userModal.style.display="block";
    }
    closeEdit.onclick=()=>{
        userModal.style.display="none";
    }

}