<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body style="background-color: #e8ecef;">
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-4 mb-4">
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div class="alert alert-success mb-2">
                    {{\Illuminate\Support\Facades\Session::get('success')}}
                </div>
            @endif

            <div class="card">
                <?php
                    $Url = route('firebase.firestore.users.store');
                ?>
                <div class="card-header d-flex align-items-center">
                    <h4 class="mb-0">
                        Users
                    </h4>
                    <button type="button" class="btn btn-primary ml-auto" onclick="window.location.href='{{$Url}}';">Import</button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>Username</td>
                            <td>Display Name</td>
                            <td>Gender</td>
                            <td>Location</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($snapshot as $index => $data){
                        ?>
                        <tr>
                            <td><?php echo $index+1; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['displayName']; ?></td>
                            <?php
                            if($data['gender'] == '0'){
                            ?>
                            <td>Male</td>
                            <?php
                            } else {
                            ?>
                            <td>Female</td>
                            <?php
                            }
                            ?>
                            <td><?php echo $data['location']; ?></td>
                            <td></td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<script src="{{ mix('js/app.js') }}" defer></script>

</body>
</html>