
function checkData() {
   var production_line = document.getElementById("production_line").value;
   var id = document.getElementById("ID").value;
   var item_number = document.getElementById("item_number").value;
   var description = document.getElementById("description").value;
   var production_rate = document.getElementById("production_rate").value;
   var rate_hours = document.getElementById("rate_hours").value;
   var quality_ordered = document.getElementById("quality_ordered").value;
   var quality_complete = document.getElementById("quality_complete").value;
   var qty_open = document.getElementById("qty_open").value;
   var order_date = document.getElementById("order_date").value;
   var release_date = document.getElementById("release_date").value;
   var due_date = document.getElementById("due_date").value;
   var sales_job = document.getElementById("sales_job").value;
   var wo_stat = document.getElementById("wo_stat").value; 
   var user_id = document.getElementById("username").value;

    if (production_line == "") {
        document.getElementById("error_prdline").innerHTML = "Production Line is required!";
    }
    else  document.getElementById("error_prdline").innerHTML = "";

    if (id == "") {
        document.getElementById("error_IDline").innerHTML = "ID is required!";
        var check_id = false;
    }
    else if (!Number.isInteger(Number(id))) 
         {document.getElementById("error_IDline").innerHTML = "ID must be a valid number!";
          check_id = true;}
    else  document.getElementById("error_IDline").innerHTML = "";

    if (item_number == "") {
        document.getElementById("error_item_number").innerHTML = "Item Number is required!";
    
    }   else  document.getElementById("error_item_number").innerHTML = "";

    if (description == "") {
        document.getElementById("error_description").innerHTML = "Description is required!";
    
    }else  document.getElementById("error_description").innerHTML = "";

    if (production_rate == "") {
        document.getElementById("error_production_rate").innerHTML = "Production Rate is required!";
        var check_production_rate = false;
    }else if (!Number.isInteger(Number(production_rate))) 
    {document.getElementById("error_production_rate").innerHTML = "Production Rate must be a valid number!";
     check_production_rate = true;}
    else  document.getElementById("error_production_rate").innerHTML = "";

    if (rate_hours == "") {
        document.getElementById("error_rate_hours").innerHTML = "Rate Hours is required!";
        var check_rate_hours = false;
    }else if (isNaN(parseFloat(rate_hours))) 
    {document.getElementById("error_rate_hours").innerHTML = "Rate Hours must be a valid number!";
     check_rate_hours = true;}
    else  document.getElementById("error_rate_hours").innerHTML = "";

    if (quality_ordered == "") {
        document.getElementById("error_quality_ordered").innerHTML = "Quality Ordered is required!";
        var check_quality_ordered = false;
    }else if (!Number.isInteger(Number(quality_ordered))) 
   {document.getElementById("error_quality_ordered").innerHTML = "Quality Ordered must be a valid number!";
            check_quality_ordered =true;}
    else  document.getElementById("error_quality_ordered").innerHTML = "";

    if (quality_complete == "") {
        document.getElementById("error_quality_complete").innerHTML = "Quality Complete is required!";
        var check_quality_complete = false;
    }else if (!Number.isInteger(Number(quality_complete))) 
    {document.getElementById("error_quality_complete").innerHTML = "Quality Complete must be a valid number!";
        check_quality_complete=true;}
    else  document.getElementById("error_quality_complete").innerHTML = "";

    if (qty_open == "") {
        document.getElementById("error_qty_open").innerHTML = "QTY Open is required!";
        var check_qty_open = false;
    }else if (!Number.isInteger(Number(qty_open))) 
    {document.getElementById("error_qty_open").innerHTML = "QTY Open must be a valid number!";
    check_qty_open = true;}
    else  document.getElementById("error_qty_open").innerHTML = "";

    if (order_date == "") {
        document.getElementById("error_order_date").innerHTML = "Order Date is required!";
    }else  document.getElementById("error_order_date").innerHTML = "";

    if (release_date == "") {
        document.getElementById("error_release_date").innerHTML = "Release Date is required!";
    }else  document.getElementById("error_release_date").innerHTML = "";

    if (due_date == "") {
        document.getElementById("error_due_date").innerHTML = "Due Date is required!";
    }else  document.getElementById("error_due_date").innerHTML = "";

    if (sales_job == "") {
        document.getElementById("error_sales_job").innerHTML = "Sales/Job is required!";
    }else  document.getElementById("error_sales_job").innerHTML = "";

    if (wo_stat == "") {
        document.getElementById("error_wo_stat").innerHTML = "WO Stat is required!";
    }else  document.getElementById("error_wo_stat").innerHTML = "";
    if(user_id == "")
    {
        user_id =0;
    }
   
    if (production_line == "" || id == "" || item_number == ""||description == ""||production_rate == ""||rate_hours == ""||quality_ordered == ""
    ||release_date == ""||due_date==""||sales_job==""||wo_stat==""||check_id == true||check_production_rate == true||check_rate_hours == true
    ||check_quality_ordered ==true||check_quality_complete==true||check_qty_open == true) {
        return false;
    } 

    const formData = new FormData();
    formData.append("production_line",production_line);
    formData.append("id",id);
    formData.append("item_number",item_number);
    formData.append("description",description);
    formData.append("production_rate",production_rate);
    formData.append("rate_hours",rate_hours);
    formData.append("quality_ordered",quality_ordered);
    formData.append("quality_complete",quality_complete);
    formData.append("order_date",order_date);
    formData.append("qty_open",qty_open);
    formData.append("release_date",release_date);
    formData.append("due_date",due_date);
    formData.append("sales_job",sales_job );
    formData.append("wo_stat",wo_stat);
    formData.append("user_id", user_id);


    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_table_sql.php');
    xhr.send(formData);
    xhr.onreadystatechange=function(){
            console.log(xhr.readyState);
            console.log(xhr.status);
        }

    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            console.log("Update data success");
            document.getElementById("status").innerHTML="Update data success"
        } else {
            console.log("Error"+ xhr.responseText);
            document.getElementById("status").innerHTML="Error"+ xhr.responseText;
        }
    };
}
