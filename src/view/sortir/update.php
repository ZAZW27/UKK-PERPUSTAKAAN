<?php include '../partials/_header.php' ?>
    <?php
    $id_buku = $_GET['buku'];
    $getBuku = mysqli_query($con, "SELECT * FROM tbl_buku WHERE id_buku = '$id_buku'");
    $f = mysqli_fetch_array($getBuku);
    ?>
    <main class="relative top-16 z-[10] px-0 md:px-3 py-4 flex flex-col justify-center items-center">
        <form action="crud/aksi-update.php" enctype="multipart/form-data" method="post" class="bg-base-200 w-full md:w-[40rem] rounded-md px-4 md:px-12 py-4  flex flex-col justify-center items-center">
            <h1 class="text-2xl font-semibold">Update buku | <?= $f['judul'] ?></h1>
            <input type="text" value="<?=$f['id_buku']?>" name='id_buku' hidden>
            <div class="flex flex-col py-2 items-start self-start w-full">
                <label class="font-semibold" for="">Judul buku</label>
                <input name="judul" value="<?=$f['judul']?>" class="border-b-2 border-neutral w-full bg-transparent" type="text">
            </div>
            <div class="flex flex-col py-2 items-start self-start w-full">
                <label class="font-semibold" for="">penulis buku</label>
                <input name="penulis" value="<?=$f['penulis']?>" class="border-b-2 border-neutral w-full bg-transparent" type="text">
            </div>
            <div class="flex flex-col py-2 items-start self-start w-full">
                <label class="font-semibold" for="">penerbit buku</label>
                <input name="penerbit" value="<?=$f['penerbit']?>" class="border-b-2 border-neutral w-full bg-transparent" type="text">
            </div>
            <div class="flex flex-col py-2 items-start self-start w-full">
                <label class="font-semibold" for="">tahun terbit buku</label>
                <input name="tahun_terbit" value="<?=$f['tahun_terbit']?>" class="border-b-2 border-neutral w-full bg-transparent" type="date">
            </div>
            <div class="flex flex-col py-2 items-start self-start w-full">
                <label class="font-semibold" for="">Gambar buku</label>
                <input name="gambar" class="border-b-2 border-neutral w-full bg-transparent" type="file">
            </div>
            <button class="btn btn-success text-base-100 mt-3">Submit</button>
        </form>
    </main>
<?php include '../partials/_footer.php' ?>