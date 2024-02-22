<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaksi POS</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    
    .container {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      width: 800px;
    }
    
    .table {
      width: 100%;
      border-collapse: collapse;
    }
    
    .table th, .table td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    .table th {
      text-align: center;
    }
    
    .total {
      font-weight: bold;
    }
    
    .button {
      background-color: #000;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Transaksi POS</h1>
  <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" name="nama_barang"></td>
            <td><input type="number" name="harga"></td>
            <td><input type="number" name="jumlah"></td>
            <td><input type="number" name="subtotal"></td>
          </tr>
          <tr>
            <td colspan="3" class="total">Total</td>
            <td><input type="number" name="total"></td>
          </tr>
        </tbody>
      </table>
      <br>
      <button type="submit" class="button">Simpan Transaksi</button>
  </div>
</body>
</html>
