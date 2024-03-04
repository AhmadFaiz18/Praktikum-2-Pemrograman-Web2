<!DOCTYPE html>
<html>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        form {
            background-color: #fff;
            width: 500px;
            margin: 50px auto;
            padding: 50px;
            border-radius: 150px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-top: 30px solid #000000;
        }
        h2 {
            text-align: center;
            color: #4CAF50;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color: #555;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 15px;
            margin: 6px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
            font-size: 15px;
        }
        input[type="submit"] {
            background-color: #000000;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        ::placeholder {
            color: #aaa;
        }
    </style>
<body>

<form method="POST" action="form_nilai.php"`>
    Nama : <input type="text" name="nama" value="" size="30"/><br/>
    Mata Kuliah : 
    <select name ="matkul">
        <option value="DDP">Dasar dasar Pemrograman</option>
        <option value="BDI">Basis data I</option>
        <option value="Web1">Pemrograman Web</option>
    <select><br>
    Nilai UTS : <input type="text" name="nilai uts" value="" size="6"/><br/>
    Nilai UAS : <input type="text" name="nilai uas" value="" size="6"/><br/>
    Nilai tugas/praktikum: 
        <input type="text" name="nilai_tugas" value="" size="6"/><br/>
        <input type="submit" value="simpan" name="proses"/>
</form>
</body>
</html>
