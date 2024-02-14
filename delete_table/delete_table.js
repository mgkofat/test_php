function deleteData() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log("delete data success");
            } else {
                alert('Error: ' + xhr.statusText);
            }
        }
    };

    xhr.open('POST', 'delete_table_sql.php?id=<?php echo $id; ?>');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send();
}