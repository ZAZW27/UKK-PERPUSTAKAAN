<?php 
include '../../config.php';
?>

<!DOCTYPE html>
<html lang="en" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../public/output.css">
</head>
<body class="">
    <header class="fixed w-[100vw] z-[99]">
        <nav class="navbar bg-base-100 w-full shadow-lg">
            <div class="navbar-start">
                <div class="drawer"><font></font>
                    <div class="drawer-content"><font></font>
                        <!-- Page content here --><font></font>
                        <label for="my-drawer" tabindex="0" role="button" class="btn btn-ghost btn-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
                        </label>
                        <!-- <label for="my-drawer" class="btn btn-primary drawer-button">Open drawer</label><font></font> -->
                    </div> <font></font>
                </div>
                <!-- <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Homepage</a></li>
                        <li><a>Portfolio</a></li>
                        <li><a>About</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="navbar-center">
                <a class="btn btn-ghost text-xl">Perpustakaan</a>
            </div>
            <div class="navbar-end">
                <button class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>
                <button class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                        <span class="badge badge-xs badge-primary indicator-item"></span>
                    </div>
                </button>
            </div>
        </nav>
        
    </header>
    
    <main class="relative top-16 z-[10] px-0 md:px-3 py-4 flex justify-between items-start">
        <div class="grid w-full md:w-[40rem] h-20 px-4 fixed z-[11] md:sticky md:top-20 md:mt-20 flex-grow ">
            <div class="card place-items-center bg-base-300 rounded-box w-full h-full"></div>
        </div>
        <div class="w-full relative z-[10] flex flex-row flex-wrap gap-2 md:gap-4 justify-start items-start card rounded-box p-2">
            <?php 
            $getBook = mysqli_query($con, "SELECT * FROM tbl_buku");
            while($book = mysqli_fetch_array($getBook)){
            ?>
                <div class="w-[10rem] md:w-[14rem] h-[17rem] md:h-[20rem] place-items-center card bg-base-300 bg-cover bg-no-repeat bg-center" 
                style="background-image: url('../../../public/images/buku/<?=$book['image'] > 0 ? $book['image'] : 'notfound.jpeg' ?>');">
                    halo
                </div>
            <?php } ?>
        </div>
    </main>
    
</body>
</html>