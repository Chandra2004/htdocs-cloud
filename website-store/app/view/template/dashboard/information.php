<?php
    $username_display = $_SESSION['username_display'];
?>
<div id="alert-1" class="flex items-center p-4 mb-4 text-white rounded-lg bg-blue-500" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div class="ml-3 text-sm md:text-base pr-2">
        Hai, <span class="font-bold"><?= $username_display ?></span> Harap melengkapi data diri untuk pendataan data karyawan KaryaMerapiIndonesia.
        <br>
        <a href="profile" class="bg-zinc-800 py-1 px-2 font-bold rounded-md inline-block">Isi Datadiri</a>
    </div>
    <button type="button" class="bg-white text-blue-500 hover:bg-white/60 hover:text-white ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2  p-1.5 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-1" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>