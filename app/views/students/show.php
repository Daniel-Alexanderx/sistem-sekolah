<div class="mt-8 space-y-2 ">

    <!-- Card Header Start -->
    <div class="p-4 shadow rounded-lg bg-white">
        <h1 class="text-2xl font-bold">Tambah siswa</h1>
        <p>Menambahkan siswa ke dalam sistem</p>
    </div>
    <!-- card Body start -->

    <div class="bg-white p-4 mt-4 shadow-md rounded-lg p-4">
        <form action="" class="grid grid-cols-2 gap-4">
            <div class="space-y-2">

                <label class="block font-bold" for="name">Name</label>
                <input value="<?= $student['name'] ?>" class="w-full px-4 py-2 border rounded-lg " type="text" id="name"
                    placeholder="Masukkan nama" name="name" readonly>
            </div>

            <div class="space-y-2">

                <label class="block font-bold" for="nis">Nis</label>
                <input value="<?= $student['nis'] ?>" class="w-full px-4 py-2 border rounded-lg " type="text" id="nis"
                    placeholder="Masukkan Nis" name="nis" readonly>
            </div>

            <div class="space-y-2">

                <label class="block font-bold" for="kelas">Kelas</label>
                <input value="<?= $student['class'] ?>" class="w-full px-4 py-2 border rounded-lg " type="text"
                    id="kelas" placeholder="Masukkan kelas" name="kelas" readonly>
            </div>

            <div class="space-y-2">

                <label class="block font-bold" for="telepon">Nomor Telepon</label>
                <input value="<?= $student['phone_number'] ?>" class="w-full px-4 py-2 border rounded-lg " type="text"
                    id="telepon" placeholder="Masukkan nomor telepon" name="telepon" readonly>
            </div>

            <div class="flex justify-end col-span-2 space-x-4 mt-4  ">

                <a href="/students" class="py-2 px-4 bg-gray-100  rounded-lg">Kembali</a>

            </div>
        </form>
    </div>

</div>



</div>
</main>