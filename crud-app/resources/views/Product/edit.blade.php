<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit a Product</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 5px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"] {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      color: #333;
      width: 100%;
      box-sizing: border-box;
    }

    input[type="submit"] {
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    .form-group {
      margin-bottom: 15px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Edit a Product</h1>
    <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" value="{{ $product->name }}" />
      </div>
      <div class="form-group">
        <label for="qty">Qty</label>
        <input type="text" name="qty" id="qty" placeholder="Qty" value="{{ $product->qty }}" />
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" placeholder="Price" value="{{ $product->price }}" />
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Description"
          value="{{ $product->description }}" />
      </div>
      <div class="form-group">
        <input type="submit" value="Update" />
      </div>
    </form>
  </div>
</body>

</html>
