@extends('layouts.web')
@section('content')
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
        <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero"
            src="{{ asset('hotelku.png') }}">
        <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Selamat Datang di Hotel Mewah
                Kami
            </h1>
            <p class="mb-8 leading-relaxed">Nikmati kenyamanan dan kemewahan tak tertandingi di Hotel Mewah Kami.
                Terletak di jantung kota, kami menawarkan fasilitas kelas dunia, hidangan lezat, dan layanan personal
                untuk membuat penginapan Anda tak terlupakan.</p>
            <div class="flex justify-center">
                <a href="#order-form"
                    class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Pesan
                    Sekarang</a>
                <a href="#contact"
                    class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Hubungi
                    Kami</a>
            </div>
        </div>
    </div>
</section>

<livewire:order-form />

<section class="py-16 bg-green-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-semibold text-gray-900">Dapatkan Kamar Impian Anda</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Kamar Standar -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('rooms/standard.jpg') }}" alt="Kamar Standar" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Kamar Standar</h3>
                    <p class="text-gray-600 mb-4">Kamar nyaman dengan fasilitas dasar untuk kenyamanan Anda.</p>
                    <ul class="list-disc list-inside mb-4 text-gray-600">
                        <li>Tempat tidur queen-size</li>
                        <li>TV layar datar</li>
                        <li>Kamar mandi pribadi</li>
                    </ul>
                    <a href="#order-form" class="w-full bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition duration-300">Pesan Sekarang</a>
                </div>
            </div>
            <!-- Kamar Deluxe -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('rooms/deluxe.jpg') }}" alt="Kamar Deluxe" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Kamar Deluxe</h3>
                    <p class="text-gray-600 mb-4">Nikmati kenyamanan ekstra dengan fasilitas premium kami.</p>
                    <ul class="list-disc list-inside mb-4 text-gray-600">
                        <li>Tempat tidur king-size</li>
                        <li>Ruang tamu terpisah</li>
                        <li>Jacuzzi pribadi</li>
                    </ul>
                    <a href="#order-form" class="w-full bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition duration-300">Pesan Sekarang</a>
                </div>
            </div>
            <!-- Suite Eksekutif -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('rooms/executive.jpg') }}" alt="Suite Eksekutif" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Suite Eksekutif</h3>
                    <p class="text-gray-600 mb-4">Kemewahan tak tertandingi untuk pengalaman menginap terbaik.</p>
                    <ul class="list-disc list-inside mb-4 text-gray-600">
                        <li>Kamar tidur terpisah</li>
                        <li>Ruang kerja pribadi</li>
                        <li>Pemandangan kota yang menakjubkan</li>
                    </ul>
                    <a href="#order-form" class="w-full bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition duration-300">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- mulai kontak -->
<section id="contact" class="text-gray-600 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="peta" scrolling="no"
            src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=grand+indonesia&ie=UTF8&t=&z=14&iwloc=B&output=embed"
            style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
        <div
            class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Hubungi Kami</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Jika Anda memiliki pertanyaan atau ingin membuat reservasi, silakan hubungi kami melalui informasi di bawah ini:</p>
            <div class="mb-4">
                <h3 class="text-gray-700 font-medium">Alamat:</h3>
                <p class="text-gray-600">Jl. Sudirman No. 123, Jakarta Pusat, 10220</p>
            </div>
            <div class="mb-4">
                <h3 class="text-gray-700 font-medium">Telepon:</h3>
                <p class="text-gray-600">+62 21 1234 5678</p>
            </div>
            <div class="mb-4">
                <h3 class="text-gray-700 font-medium">Email:</h3>
                <p class="text-gray-600">info@hotelmewah.com</p>
            </div>
            <div class="mb-4">
                <h3 class="text-gray-700 font-medium">Jam Operasional:</h3>
                <p class="text-gray-600">24 jam sehari, 7 hari seminggu</p>
            </div>
            <a href="#order-form"
                class="text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Reservasi Sekarang</a>
        </div>
    </div>
</section>
<!-- akhir kontak -->

<livewire:subcribe-form />
@endsection
