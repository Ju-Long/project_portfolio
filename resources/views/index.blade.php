<!DOCTYPE html>
<html lang="en">

<head>
    @include('header')
</head>

<body>
    <div class='overall'>
        <main>
            @include('nav')
            <div class="content">
                {{-- @include('home') --}}
                @include('apps')
            </div>
        </main>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>