function checkData() {
    
    var production_line = document.getElementById("production_line").value;
    if (production_line == "") {
        document.getElementById("error_prdline").innerHTML = "Production Line is required!";
    }
    else  document.getElementById("error_prdline").innerHTML = "";

    var id = document.getElementById("ID").value;
    if (id == "") {
        document.getElementById("error_IDline").innerHTML = "ID is required!";
        var check_id = false;
    }
    else if (!Number.isInteger(Number(id))) 
         {document.getElementById("error_IDline").innerHTML = "ID must be a valid number!";
          check_id = true;}
    else  document.getElementById("error_IDline").innerHTML = "";

    var item_number = document.getElementById("item_number").value;
    if (item_number == "") {
        document.getElementById("error_item_number").innerHTML = "Item Number is required!";
    
    }   else  document.getElementById("error_item_number").innerHTML = "";

    var description = document.getElementById("description").value;
    if (description == "") {
        document.getElementById("error_description").innerHTML = "Description is required!";
    
    }else  document.getElementById("error_description").innerHTML = "";

    var production_rate = document.getElementById("production_rate").value;
    if (production_rate == "") {
        document.getElementById("error_production_rate").innerHTML = "Production Rate is required!";
        var check_production_rate = false;
    }else if (!Number.isInteger(Number(production_rate))) 
    {document.getElementById("error_production_rate").innerHTML = "Production Rate must be a valid number!";
     check_production_rate = true;}
    else  document.getElementById("error_production_rate").innerHTML = "";

    var rate_hours = document.getElementById("rate_hours").value;
    if (rate_hours == "") {
        document.getElementById("error_rate_hours").innerHTML = "Rate Hours is required!";
        var check_rate_hours = false;
    }else if (isNaN(parseFloat(rate_hours))) 
    {document.getElementById("error_rate_hours").innerHTML = "Rate Hours must be a valid number!";
     check_rate_hours = true;}
    else  document.getElementById("error_rate_hours").innerHTML = "";

    var quality_ordered = document.getElementById("quality_ordered").value;
    if (quality_ordered == "") {
        document.getElementById("error_quality_ordered").innerHTML = "Quality Ordered is required!";
        var check_quality_ordered = false;
    }else if (!Number.isInteger(Number(quality_ordered))) 
   {document.getElementById("error_quality_ordered").innerHTML = "Quality Ordered must be a valid number!";
            check_quality_ordered =true;}
    else  document.getElementById("error_quality_ordered").innerHTML = "";

    var quality_complete = document.getElementById("quality_complete").value;
    if (quality_complete == "") {
        document.getElementById("error_quality_complete").innerHTML = "Quality Complete is required!";
        var check_quality_complete = false;
    }else if (!Number.isInteger(Number(quality_complete))) 
    {document.getElementById("error_quality_complete").innerHTML = "Quality Complete must be a valid number!";
        check_quality_complete=true;}
    else  document.getElementById("error_quality_complete").innerHTML = "";

    var qty_open = document.getElementById("qty_open").value;
    if (qty_open == "") {
        document.getElementById("error_qty_open").innerHTML = "QTY Open is required!";
        var check_qty_open = false;
    }else if (!Number.isInteger(Number(qty_open))) 
    {document.getElementById("error_qty_open").innerHTML = "QTY Open must be a valid number!";
    check_qty_open = true;}
    else  document.getElementById("error_qty_open").innerHTML = "";

    var order_date = document.getElementById("order_date").value;
    if (order_date == "") {
        document.getElementById("error_order_date").innerHTML = "Order Date is required!";
    }else  document.getElementById("error_order_date").innerHTML = "";

    var release_date = document.getElementById("release_date").value;
    if (release_date == "") {
        document.getElementById("error_release_date").innerHTML = "Release Date is required!";
    }else  document.getElementById("error_release_date").innerHTML = "";

    var due_date = document.getElementById("due_date").value;
    if (due_date == "") {
        document.getElementById("error_due_date").innerHTML = "Due Date is required!";
    }else  document.getElementById("error_due_date").innerHTML = "";

    var sales_job = document.getElementById("sales_job").value;
    if (sales_job == "") {
        document.getElementById("error_sales_job").innerHTML = "Sales/Job is required!";
    }else  document.getElementById("error_sales_job").innerHTML = "";

    var wo_stat = document.getElementById("wo_stat").value;
    if (wo_stat == "") {
        document.getElementById("error_wo_stat").innerHTML = "WO Stat is required!";
    }else  document.getElementById("error_wo_stat").innerHTML = "";

    if (production_line == "" || id == "" || item_number == ""||description == ""||production_rate == ""||rate_hours == ""||quality_ordered == ""
    ||release_date == ""||due_date==""||sales_job==""||wo_stat==""||check_id == true||check_production_rate == true||check_rate_hours == true
    ||check_quality_ordered ==true||check_quality_complete==true||check_qty_open == true) {
        return false;
    } else {
        if (confirm("Are you sure to add new data?")) {
            return true;
        } else {
            return false;
        }
    }
    
}


document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', this.action, true);
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            alert('Data Inserted Success');
            window.location.href = 'display_table.php';
        } else {
            alert('Error: Inserting' + xhr.responseText);
        }
    };

    xhr.onerror = function() {
        alert('Request failed');
    };

    xhr.send(formData);
});