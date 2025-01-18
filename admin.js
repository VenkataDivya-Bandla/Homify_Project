function openTab(tabName) {
    var i;
    var tabContent = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
}

// Initially open the user management tab
//openTab('user');
function openTab(directory) {
    window.location.href = directory + '/index.html';
}
function executeAdminManagement() {
    // Make an AJAX request to the connect.php file
    var xhr = new XMLHttpRequest();
    xhr.open('GET', './service/connect.php', true);
    xhr.onload = function() {
        if (xhr.status == 200) {
            // Handle the response from the PHP file
            var response = xhr.responseText;
            // You can do something with the response here
            console.log(response);
        } else {
            // Handle errors
            console.error('Request failed. Status:', xhr.status);
        }
    };
    xhr.onerror = function() {
        // Handle network errors
        console.error('Request failed. Network error.');
    };
    xhr.send();
}

