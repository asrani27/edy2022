<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="en-us" http-equiv="Content-Language" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Laporan</title>
    {{-- <style type="text/css">
        .auto-style1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: x-small;
        }
    </style> --}}
    <style>
        @page {
            margin-top: 80px;
            margin-left: 50px;
        }

        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            /** Extra personal styles **/
            /* background-color: #03a9f4;
            color: white;
            text-align: center; 
            line-height: 35px;*/
        }

        tr,
        th,
            {
            border: 2px solid #000;
            font-size: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }

        td {
            font-weight: bold;
            border: 2px solid #000;
            font-size: 10px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            font-size: 8px;
            font-family: Arial, Helvetica, sans-serif;
            /** Extra personal styles **/
            /* background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 35px; */
        }
    </style>
</head>

<body>
    <header>
        <table border="0" width="100%">
            <tr>
                <td style="border: 0px;" align="right" width="10%">
               
                </td>
                <td style="border: 0px;" valign="top" align="center" width="90%">
                    <span style="font-size: 18px;"><strong>STIKES INTAN MARTAPURA </strong></span><br />
                    {{-- <span style="font-size: 12px;"><strong>Jl. Jalan Banyu Tajun Pangkalan, Kec. Sungai Pandan,
                            Kabupaten Hulu Sungai Utara
                            (0511)3353586
                        </strong></span> --}}
                </td>
            </tr>
        </table>
        <hr>
        <p><span class="auto-style1"><strong>LAPORAN DATA PENDAFTAR MAHASISWA BARU </strong></span></p>
    </header>
    <footer>
        <hr>
        <p>Tanggal Cetak : {{\Carbon\Carbon::now()->format('d-m-Y H:i:s')}}
        </p>
    </footer>
    <br />
    <br />
    <br />
    <main>
        <table cellpadding="5" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jkel</th>
                    <th>Agama</th>
                    <th>Asal Sekolah</th>
                    <th>Jurusan Sekolah</th>
                    <th>Tahun Lulus</th>
                    <th>Telp</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->jurusan->nama}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->tempat_lahir}}</td>
                    <td>{{\Carbon\Carbon::parse($item->tanggal_lahir)->format('d-m-Y')}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->jkel}}</td>
                    <td>{{$item->agama}}</td>
                    <td>{{$item->asal_sekolah}}</td>
                    <td>{{$item->jurusan_sekolah}}</td>
                    <td>{{$item->tahun_lulus}}</td>
                    <td>{{$item->telp}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <br />
        <table width="100%" border="0">
            <tr style="border: 0px;">
                <td width="70%" style="border: 0px;"></td>
                <td width="30%" style="border: 0px;">
                    Martapura, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}},<br/>
                    Ketua<br/><br/><br/><br/>
                    ...............................

                </td>
            </tr>
        </table>

    </main>
</body>

</html>