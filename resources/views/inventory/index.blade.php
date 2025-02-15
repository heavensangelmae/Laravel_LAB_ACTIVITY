<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inventory Management</title>
    <style>
      /* Background Styling */
      body {
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      /* Card Container */
      .card {
        background: #54101d; /* Dark Red */
        border: 2px solid #b18653; /* Gold */
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0px 5px 15px rgba(255, 215, 0, 0.3);
      }

      /* Table Styling */
      .table {
        color: #d5c5ae; /* Light Beige */
      }
      .table thead {
        background: #b18653; /* Gold */
        color: black;
      }
      .table tbody {
        background: #312229; /* Dark Brown */
      }

      /* Buttons */
      .btn-add {
        background-color: #b18653; /* Gold */
        color: black;
        border: none;
      }
      .btn-add:hover {
        background-color: #d5c5ae; /* Lighter Gold */
      }

      .btn-edit {
        background-color: #47596f; /* Blue */
        color: white;
      }
      .btn-edit:hover {
        background-color: #3a4c5e;
      }

      .btn-delete {
        background-color: #8b0000; /* Deep Red */
        color: white;
      }
      .btn-delete:hover {
        background-color: #a52a2a; /* Lighter Red */
      }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <button class="btn btn-add">Add Inventory</button>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Computer</td>
                                <td>Lenovo</td>
                                <td>80</td>
                                <td>50,000</td>
                                <td>
                                    <button class="btn btn-edit">Edit</button>
                                    <button class="btn btn-delete">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
       </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
