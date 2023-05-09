<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>
</head>
<style>

</style>
<body>
    <div class="form-group">
        <p align="center" ><b>Data Laporan Ticket</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No.</th>
                <th>Keluhan</th>
                <th>Keterangan</th>
                <th>Tingkat Kesulitan</th>
                <th>Status Ticket</th>
                <th>Tanggal</th>
            </tr>
            @foreach ($cetak_data as $Ticket)
            <tr>
                <td style="text-align: center;">{{$Ticket->id}}</td>
                <td>{{$Ticket->keluhan}}</td>
                <td>{{$Ticket->keterangan}}</td>
                <td style="text-align: center;">{{$Ticket->tingkat_kesulitan}}</td>
                <td style="text-align: center;">{{$Ticket->status_ticket}}</td>
                <td style="text-align: center;">{{$Ticket->created_at}}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
    
</body>
</html>