dataArray = []
function productvalidation() {
    p_name = document.getElementById("pname").value
    p_desc = document.getElementById("pdesc").value
    p_category = document.getElementById("category").value
    p_subcat = document.getElementById("subcat").value
    p_weight = document.getElementById("weight").value
    p_unit = document.getElementById("unit").value
    p_qty = document.getElementById("qty").value
    p_amt = document.getElementById("amount").value
    returnval = true
    if (p_name == "") {
        document.getElementById('p1').innerHTML = "Enter Name!!!"
        returnval = false
    }
    if (p_desc == "") {
        document.getElementById('p2').innerHTML = "Enter Description!!!"
        returnval = false
    }
    if (p_category == "") {
        document.getElementById('p3').innerHTML = "Enter Category!!!"
        returnval = false
    }
    if (p_subcat == "") {
        document.getElementById('p4').innerHTML = "Enter Sub Category!!!"
        returnval = false
    }
    if (p_weight == "") {
        document.getElementById('p5').innerHTML = "Enter Weight!!!"
        returnval = false
    }
    if (p_unit == "") {
        document.getElementById('p6').innerHTML = "Enter Unit!!!"
        returnval = false
    }
    if (p_qty == "") {
        document.getElementById('p7').innerHTML = "Enter Quantity!!!"
        returnval = false
    }
    if (p_amt == "") {
        document.getElementById('p8').innerHTML = "Enter Amount!!!"
        returnval = false
    }
    var product = { 'pname': p_name, 'pdesc': p_desc, 'pcat': p_category, 'psubcat': p_subcat, 'pweight': p_weight, 'punit': p_unit, 'pqty': p_qty, 'pamt': p_amt }
    dataArray.push(product)
    localStorage["product"] = JSON.stringify(dataArray);
    retrievedproduct = JSON.parse(localStorage["product"]);
    //    console.log(retrievedproduct)  
    text = ""
    for (let i = 1; i <= retrievedproduct.length; i++) {
        text += "<tr>";
        text += "<td>" + i + "</td>";
        text += "<td>" + retrievedproduct[i].pname + "</td>";
        text += "<td>" + retrievedproduct[i].pdesc + "</td>";
        text += "<td>" + retrievedproduct[i].pcat + "</td>";
        text += "<td>" + retrievedproduct[i].psubcat + "</td>";
        text += "<td>" + retrievedproduct[i].pweight + "</td>";
        // text += "<td>" + retrievedproduct[i].pqty+ "</td>";
        text += "<td>" + retrievedproduct[i].pqty + "</td></tr>";
    }
    document.getElementById("pr1").innerHTML = text;


    return returnval

}