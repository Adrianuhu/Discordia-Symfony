// load main page DONE
function load_Main() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.body.innerHTML = this.responseText;
        }
    };
    // xhttp.open("GET", "main", true);
    // xhttp.send();
    // return false;
    xhttp.open("POST", "main", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
    return false;
}


// create login form
function loadLogin() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.body.innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "login", true);
    xhttp.send();
    return false;
}


// load function to access the user account
function accessLogin() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.body.innerHTML = this.responseText;
            load_Main();
        }
    };
    var name = document.getElementById("user").value;
    var password = document.getElementById("password").value;
    xhttp.open("POST", "accessLogin", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("user=" + name + "&password=" + password);
    return false;
}


// show all friends and pending friend requests DONE
function showFriends() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contacts").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "friend", true);
    xhttp.send();
    return false;
}



// load a specific chat
function loadChat(codRoom, avatar_chat, name_chat) {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat1").innerHTML = this.responseText;
            var myDiv = document.getElementById("textChat");
            myDiv.scrollTop = myDiv.scrollHeight;
            showContacts();

        }
    };
    xhttp.open("POST", "chat_AJAX", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("codRoom=" + codRoom + "&avatar_chat=" + avatar_chat + "&name_chat=" + name_chat);
    return false;
}


// send a text menssage in a select chat
function sendMessage() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            showContacts();
            var var1 = document.getElementById("codRoomMessage").value;
            var var2 = document.getElementById("avatar_chat").value;
            var var3 = document.getElementById("name_chat").value;
            loadChat(var1, var2, var3);
        }
    };

    var num1 = document.getElementById("codRoomMessage").value;
    var num2 = document.getElementById("textMessage").value;

    xhttp.open("POST", "send_message_AJAX", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("codRoom=" + num1 + "&text=" + num2);
    return false;
}


// load a file as a url in a chat
async function uploadFile() {
    let formData = new FormData();
    formData.append("file", fileupload.files[0]);
    formData.append("code_room", document.getElementById("codRoomMessage").value);
    formData.append("code_my_usr", document.getElementById("code_my_usr").value);

    await fetch('upload_files', {
        method: "POST",
        body: formData
    });

    showContacts();
    var var1 = document.getElementById("codRoomMessage").value;
    var var2 = document.getElementById("avatar_chat").value;
    var var3 = document.getElementById("name_chat").value;
    loadChat(var1, var2, var3);
}


// send message to one or more users 
function sendNewMessage() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat1").innerHTML = this.responseText;
            showContacts();
        }
    };

    var num1 = document.getElementById("userTo").value;
    var num2 = document.getElementById("textMessage").value;
    xhttp.open("POST", "send_message_newMessage_AJAX", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("user=" + num1 + "&text=" + num2);
    return false;

}


// send a friendship request
function sendFriendRequest() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat1").innerHTML = this.responseText;
            showContacts();
        }
    };

    var num1 = document.getElementById("userTo").value;
    var num2 = document.getElementById("textMessage").value;
    xhttp.open("POST", "request_friend", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("user=" + num1 + "&text=" + num2);
    return false;

}


// load a form to send a message
function showSB() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat1").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "search_bar", true);
    xhttp.send();
    return false;
}


// load a form to send a friendship
function showSBF() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat1").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "search_bar_friend", true);
    xhttp.send();
    return false;
}


// show all chats actives
function showContacts() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contacts").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "contacts", true);
    xhttp.send();
    return false;
}




// function to admin users, show all registers users
function showAllUsers() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contacts").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "allUser", true);
    xhttp.send();
    return false;
}


// show a form to modify users profiles
function showModifyProfile() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat1").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "profile", true);
    xhttp.send();
    return false;
}


// show a form to create a new group
function showNewGroup() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat1").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "newGroup", true);
    xhttp.send();
    return false;
}


// function to create new group, not show anything 
function createNewGroup() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat1").innerHTML = this.responseText;
        }
    };
    var users = document.getElementById("userTo").value;
    var namegroup = document.getElementById("nameGroup").value;
    xhttp.open("POST", "createNewGroup", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("users=" + users + "&nameGroup=" + namegroup);
    return false;
}


// load the profile of a friend
function loadFriendProfile(codUser) {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat1").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "profFriend", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("codUser=" + codUser);
    return false;
}


// function to accept a friendship
function acceptFriend(codUser) {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            showFriends();
        }
    };

    xhttp.open("POST", "acceptFriend", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("codUser=" + codUser);
    return false;
}


// function to deny a friendship
function denyFriend(codUser) {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            showFriends();
        }
    };

    xhttp.open("POST", "denyFriend", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("codUser=" + codUser);
    return false;
}

// function to send a friendship
function sendFriendship() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //showContacts();                
            document.getElementById("chat1").innerHTML = this.responseText;
        }
    };
    var nameUser = document.getElementById("userTo").value;
    xhttp.open("POST", "sendFriendship", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("nameUser=" + nameUser);
    return false;
}


// function to logOut and delete session
function logOut() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.body.innerHTML = this.responseText;
            loadLogin();
        }
    };

    xhttp.open("POST", "logout", true);
    xhttp.send();
    return false;
}

window.onload = load_Main;