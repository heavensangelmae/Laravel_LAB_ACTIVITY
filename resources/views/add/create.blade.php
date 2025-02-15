<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Elegant Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      /* Elegant Background */
      body {
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      /* Stylish Form Container */
      .form-container {
        max-width: 500px;
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0px 5px 15px rgba(255, 215, 0, 0.3);
        border: 2px solid #d4af37; /* Gold Border */
      }

      /* Form Header */
      .form-container h3 {
        color: #b8860b; /* Gold */
        font-weight: bold;
      }

      /* Input Field Styling */
      .form-control {
        border-radius: 8px;
        border: 1px solid #d4af37; /* Gold */
      }

      /* Buttons */
      .btn-primary {
        background-color: #8b0000; /* Deep Red */
        border-color: #8b0000;
        color: white;
      }
      .btn-primary:hover {
        background-color: #a52a2a; /* Lighter Red */
      }
      .btn-secondary {
        background-color: #d4af37; /* Gold */
        border-color: #d4af37;
        color: black;
      }
      .btn-secondary:hover {
        background-color: #b8860b; /* Darker Gold */
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <h3 class="text-center mb-4">Add Items Form</h3>
      <div class="mb-3">
        <label class="form-label">Categories:</label>
        <select class="form-select">
          <option>Select Category</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Item Name:</label>
        <input type="text" class="form-control" placeholder="Enter item name" />
      </div>
      <div class="mb-3">
        <label class="form-label">Price:</label>
        <input type="number" class="form-control" placeholder="Enter price" />
      </div>
      <div class="mb-3">
        <label class="form-label">Qty:</label>
        <input
          type="number"
          class="form-control"
          placeholder="Enter quantity"
        />
      </div>
      <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-secondary">Cancel</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
