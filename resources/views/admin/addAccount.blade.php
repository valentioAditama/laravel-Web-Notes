<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/micromodal/dist/micromodal.min.js">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <title>Welcome admin - Home</title>
</head>

<body>
    <div class="grid grid-cols-4">
        <div class="w-full h-screen bg-blue-500">
            <div class="mx-auto">
                <img class="w-32 h-32 mx-auto p-1 pt-2" src="{{ asset("image/admin.svg")}}" alt="" srcset="">
                <h6 class="text-center pt-3 text-lg text-white">Welcome back!, <span
                        class="font-sans font-semibold text-xl">Valentio Aditama</span></h6>
                <h6 class="text-center text-white font-sans">Login Date: <span class="font-semibold text-lg">Selasa,
                        24/8/2021</span></h6>
            </div>
            <div class="p-3 bg-blue-600 mt-5 font-sans font-semibold text-lg text-white hover:bg-blue-700 transition">
                <a href="/homeAdmin">
                    <p>Dashboard</p>
                </a>
            </div>
        </div>
        <div class="col-span-3">
            <div class="h-screen bg-gray-200">
                <div class="row-span-2 bg-white p-2 shadow-lg">
                    <div class="grid grid-cols-2">
                        <div class="flex items-center">
                            <h6 class="font-sans font-normal text-lg">Welcome Back!, Valentio Aditama</h6>
                        </div>
                        <div class="flex justify-end">
                            <img class="h-10 w-10 mr-2" src="{{ asset("image/admin.svg")}}" alt="">
                            <h6 class="flex items-center font-sans font-normal text-lg">Valentio Aditama</h6>
                        </div>
                    </div>
                </div>
                <div class="w-full p-5 h-32">
                    <div class="bg-white p-5 shadow-md rounded-lg">
                        <h5 class="p-2 font-sans text-2xl font-normal mb-5">Add Account</h5>
                        <input type="text"
                            class="w-full bg-gray-200 p-3 rounded-lg font-sans focus:outline-none hover:bg-gray-100 transition mb-5"
                            placeholder="Email">
                        <input type="text"
                            class="w-full bg-gray-200 p-3 rounded-lg font-sans focus:outline-none hover:bg-gray-100 transition mb-5"
                            placeholder="Username">
                        <input type="password"
                            class="w-full bg-gray-200 p-3 rounded-lg font-sans focus:outline-none hover:bg-gray-100 transition"
                            placeholder="Password">
                        <button class="w-full mx-auto p-4 bg-green-500 mt-4 rounded-lg shadow-lg text-white hover:bg-green-600 transition">Add Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [4, 4, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

</script>

</html>
