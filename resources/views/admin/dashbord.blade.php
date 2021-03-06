<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <x-admin_header />
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <center>
                    <div class="card btnc">
                        <h4 class="pt-4">Total Users</h4>
                        <h5 class="pb-3">{{ DB::table('users')->count(); }}</h5>
                    </div>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="card btnc">
                        <h4 class="pt-4">Total Category</h4>
                        <h5 class="pb-3">{{ DB::table('category')->count(); }}</h5>
                    </div>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="card btnc">
                        <h4 class="pt-4">Total Products</h4>
                        <h5 class="pb-3">{{ DB::table('products')->count(); }}</h5>
                    </div>
                </center>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8">
                <table class="table btnc">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user['id']}}</th>
                            <td>{{$user['name']}}</td>
                            <td>{{$user['phone']}}</td>
                            <td>{{$user['email']}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table btnc">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Notification</th>
                        </tr>
                    </thead>
                    <tbody class="bg-grey">
                        <tr>
                            <td class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci iusto recusandae qui, voluptatibus obcaecati optio voluptatem numquam pariatur eum id et, sapiente voluptas molestiae, doloremque aspernatur at veniam inventore fugit.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
