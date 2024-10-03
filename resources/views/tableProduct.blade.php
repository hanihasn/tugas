<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            width: 80%;
            max-width: 1000px;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #060606;
            padding: 6px;
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
         .pagination {
            justify-content: center;
            display: flex;
            margin: 20px 0;
        }
        .pagination .page-link {
            background-color: #f8d2e3;
            color: #000;
        }
        .pagination .page-link:hover {
            background-color: #e0a3b4;
            color: #fff;
        }
        .pagination .active .page-link {
            background-color: #e0a3b4;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table>
        <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Products as $index => $Product)
                <tr>
                     <td>{{ $index + $Products->firstItem() }}</td>
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

    <div class="pagination">
        {{ $Products->links() }}
    </div>
</body>

</html>
