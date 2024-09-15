<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f5f5f5;
      color: #333;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    .notification {
      background-color: #dff0d8;
      color: #3c763d;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 20px;
      width: 50%;
      text-align: center;
      margin-left: auto;
      margin-right: auto;
    }

    .container {
      width: 80%;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }

    .create-btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #28a745;
      color: white;
      border-radius: 5px;
      text-decoration: none;
      margin-bottom: 20px;
      transition: background-color 0.3s ease;
    }

    .create-btn:hover {
      background-color: #218838;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th,
    td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f8f9fa;
      color: #333;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .edit-btn,
    .delete-btn {
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
      color: white;
      cursor: pointer;
    }

    .edit-btn {
      background-color: #007bff;
      margin-right: 5px;
    }

    .edit-btn:hover {
      background-color: #0056b3;
    }

    .delete-btn {
      background-color: #dc3545;
    }

    .delete-btn:hover {
      background-color: #c82333;
    }

    form {
      display: inline-block;
    }

    input[type="submit"] {
      background: none;
      border: none;
      padding: 0;
      color: inherit;
      cursor: pointer;
      font-size: 14px;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <h1>Product List</h1>

  <div class="container">
    @if(session()->has('success'))
    <div class="notification">
      {{ session('success') }}
    </div>
    @endif

    <a href="{{ route('product.create') }}" class="create-btn">Create a Product</a>

    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Qty</th>
          <th>Price</th>
          <th>Description</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->qty }}</td>
          <td>${{ $product->price }}</td>
          <td>{{ $product->description }}</td>
          <td>
            <a href="{{ route('product.edit', ['product' => $product]) }}" class="edit-btn">Edit</a>
          </td>
          <td>
            <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
              @csrf
              @method('delete')
              <input type="submit" class="delete-btn" value="Delete" />
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>
