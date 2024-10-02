<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #060606;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f8d2e3;
             text-align: center;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        h1 {
            text-align: center;
        }
        .button-container {
            display: flex;
            gap: 10px;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table>
        <thead>
            <tr>
              <th>Nama</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Products as $Product)
                <tr>
                    <td>{{ $Product->nama}}</td>
                    <td>{{ $Product->harga}}</td>
                    <td>{{ $Product->stok}}</td>
                    <td>{{ $Product->deskripsi}}</td>
                    <td>

                <div class="button-container">
                    <form action="/Products/{{ $Product->id }}/edit" method="GET">
                        <button type="submit">Edit</button>
                    </form>

                    <form action="/Products/{{ $Product->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </div>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
