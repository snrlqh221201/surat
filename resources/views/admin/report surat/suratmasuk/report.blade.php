@extends('admin.index')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, intialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf-token{} }}">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535
        }
    </style>
    <title>CETAK SURAT MASUK</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><h>Report Surat Masuk</h></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>No surat</th>
                <th>Sifat surat</th>
                <th>Perihal</th>
                <th>Pengirim</th>
                <th>Unit kerja</th>
                <th style="width: 5px">Action</th>
                <th style="width: 5px"></th>
            </tr>
            <tr>
                
            </tr>
        
        </table>
    </div>
</body>
</html>