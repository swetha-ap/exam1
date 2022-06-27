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
    <h1 align="center">Products Billing</h1>
    <br /><br /><br />
    <div class="row form-group">
        <div class="col-1"></div>
        <div class="col-1">
            <label for="search">Search</label>
        </div>
        <div class="col-8">
            <input type="search" name="" id="search" placeholder="Search" class="form-control">
        </div>
    </div>
    <br /><br /><br />
    <table border="3" class="table" id="pr3">

        <tr>
            <thead>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Sub Category</th>
                <th>Qty</th>
                <th>Purchase</th>

        </tr>
        </thead>
        <tbody id="pr3">

        </tbody>
        <script type="text/javascript" src="{{ asset ('js/js1.js') }}">
            const input = document.querySelector('input[type="search"]');
            input.onsearch = () => {
                if(document.getElementById("search").value == retrievedproduct.pname ){
                    text = ""
    for (let i = 1; i <= retrievedproduct.length; i++) {
        text += "<tr>";
        text += "<td>" + i + "</td>";
        text += "<td>" + retrievedproduct[i].pname + "</td>";
        text += "<td>" + retrievedproduct[i].pdesc + "</td>";
        text += "<td>" + retrievedproduct[i].pcat + "</td>";
        text += "<td>" + retrievedproduct[i].psubcat + "</td>";
        // text += "<td>" + retrievedproduct[i].pweight + "</td>";
        // text += "<td>" + retrievedproduct[i].pqty+ "</td>";
        text += "<td>" + retrievedproduct[i].pqty + "</td></tr>";
    }
    document.getElementById("pr3").innerHTML = text;

                }
            }
        </script>
</body>
</html>