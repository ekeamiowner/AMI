@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submissions</title>
</head>
<style>
    .createSubmission {
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        border: 1px solid black;
        border-radius: 10px;
        padding: 10px;
    }
    .createSubmission input {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
    }
    .createSubmission button {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
    }
    .createSubmission label {
        font-size: 20px;
    }
    .createSubmission table {
        width: 100%;
    }
</style>
<body>
    <div class="createSubmission">
    <form method="POST" action="register.php">
        <table style="margin-left: auto; margin-right: auto;">
            <tr>
                <td style="background: #CECECE; height: 50px;"><label style="margin-left: 20px;">Create Article Form</label></td>
            </tr>
            <tr>
                <td><input type="text" name="name" id="name" placeholder="Name"></td>
            </tr>
            <tr>
                <td><input type="text" name="summary" id="summary" placeholder="Summary"></td>
            </tr>
            <tr>
                <td><input type="text" name="type" id="type" placeholder="Type"></td>
            </tr>
            <tr>
                <td><input type="text" name="note" id="note" placeholder="Note"></td>
            </tr>
            <tr>
                <td><input type="file" name="upload" id="upload"></td>
            </tr>
            <tr>
                <td><input type="file" name="upload2" id="upload2"></td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary">Submit</button></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
@endsection