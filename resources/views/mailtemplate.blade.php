<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>EnergyRe</title>
</head>
<body>
    <p>Hallo <b>{{$details['name']}}</b> berikut ini adalah komentar Anda:</p>
    <table>
      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td>{{$details['name']}}</td>
      </tr>
      <tr>
        <td>DARI</td>
        <td>:</td>
        <td>{{$details['email']}}</td>
      </tr>
      <tr>
        <td>PESAN</td>
        <td>:</td>
        <td>{{$details['message']}}</td>
      </tr>
    </table>
    <p>Terimakasih <b>{{$details['name']}}</b> telah memberi komentar.</p>
</body>
</html>