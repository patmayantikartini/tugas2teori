<!DOCTYPE HTML>
<html>
<body>
    <h3>
        <table>
            <tr>
                <th>ISBN: </th>
                <td>{{ $book->isbn }}</td>
            </tr>       
            <tr>
                <th>Judul: </th>
                <td>{{ $book->judul }}</td>
            </tr>  
            <tr>
                <th>Author: </th>
                <td>{{ $book->author }}</td>
            </tr>   
            <tr>
                <th>Tahun: </th>
                <td>{{ $book->tahun }}</td>
            </tr>           
        </table>
    </h3>
</body>
</html>