function deleteData() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                alert('Data Delete Success');
                window.location.href = 'display_table.php';
            } else {
                alert('Error: ' + xhr.statusText);
            }
        }
    };

    xhr.open('POST', 'delete_table.php?id=<?php echo $id; ?>', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send();
}