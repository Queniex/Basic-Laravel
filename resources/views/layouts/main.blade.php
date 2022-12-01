<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quenie Blog | {{ $title }}</title>
    <!-- Link daisyui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.2/dist/full.css" rel="stylesheet" type="text/css" />
    <!-- Link tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
          theme: {
            container: {
              center: true,
              padding: '16px'
            },
            extend: {
              colors: {
                primary: '#14b8a6',
              },
              screens: {
                '2xl': '1320px',
              }
            }
          }
        }
      </script>

      <style type="text/tailwindcss">
        /* import font */
        @import url('https://fonts.googleapis.com/css2?family=Comic+Neue&family=Dosis:wght@500&family=Luckiest+Guy&family=Poppins:ital,wght@0,300;0,500;0,600;0,800;0,900;1,600&display=swap');

        @layer utilities {
         @layer base {
          *{
            font-family: 'Poppins', sans-serif;
            color: black;
          }
         }

        *{
          color: pink;
          border: 1px solid blue
         }

        }
      </style>
</head>
<body>
  {{-- directive thingy --}}
    @include('partials.navbar') 

    <div class="isi h-[81vh] bg-[#FFDDD2]">
        <div class="container mt-7">
          <div class="border-black border-2 border-solid text-black">
            @yield('container')
          </div>
        </div>
    </div>

    <div class="footer h-[10vh] bg-[#FF8DC7]">
        <div class="container">
            <h1>Bagian Footer</h1>
        </div>
    </div>

<script src="js/script.js"></script>
</body>
</html>