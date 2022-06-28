<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>

    <h1 align="center">Add Product</h1>
    <br /><br /><br />
    <div class="row">
        <div class="col"></div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>
        <div class="col-1">
            <label for="pname">Product Name</label>
        </div>
        <div class="col-8">
            <input type="text" name="" id="pname" class="form-control" placeholder="Enter your product name">
            <p id="p1"></p>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>

        <div class="col-1">
            <label for="pdesc">Description</label>
        </div>
        <div class="col-8">
            <input type="text" name="" id="pdesc" class="form-control" placeholder="Type Here">
            <p id="p2"></p>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>

        <div class="col-1">
            <label for="category">Categories</label>
        </div>
        <div class="col-3">
            <select name="" id="category" class="form-control">
                <option value="">Select your category</option>
                <option value="Electronics">Electronics</option>
            </select>
            <p id="p3"></p>

        </div>
        <div class="col-1"></div>
        <div class="col-1">
            <label for="subcat">Sub Category</label>
        </div>
        <div class="col-3">
            <select name="" id="subcat" class="form-control">
                <option value="">Select your sub category</option>
                <option value="Computers">Computers</option>
                <option value="Mobile">Mobile</option>
            </select>
            <p id="p4"></p>

        </div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>

        <div class="col-1">
            <label for="weight">Weight</label>
        </div>
        <div class="col-3">
            <input type="text" name="" id="weight" class="form-control" placeholder="Weight">
            <p id="p5"></p>

        </div>
        <div class="col-1"></div>
        <div class="col-1">
            <label for="unit">Unit</label>
        </div>
        <div class="col-3">
            <select name="" id="unit" class="form-control">
                <option value="kg">Kg</option>
                <option value="g">g</option>
            </select>
            <p id="p6"></p>

        </div>
    </div>
    <div class="row form-group">
        <div class="col-1"></div>

        <div class="col-1">
            <label for="qty">Quantity</label>
        </div>
        <div class="col-3">
            <input type="text" name="" id="qty" placeholder="Qty">
            <p id="p7"></p>

        </div>
        <div class="col-1"></div>
        <div class="col-1">
            <label for="amount">Amount</label>
        </div>
        <div class="col-3">
            <span class="currencyinput">$<input type="text" name="" id="amount"></span>
            <p id="p8"></p>

        </div>
    </div>
    <div class="row">
        <div class="col-5"></div>
        <div class="col-1">
            <button type="submit" onclick="productvalidation()" class="btn btn-primary">Add Product</button>
        </div>
    </div>
    <script>
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
            for (let i = 0; i < retrievedproduct.length; i++) {
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
    </script>
    <table border="3" class="table">

        
            <thead>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Sub Category</th>
                <th>Weight</th>
                <th>Qty</th>
        
        </thead>
        <tbody id="pr1">

        </tbody>
    </table>
</body>

</html>