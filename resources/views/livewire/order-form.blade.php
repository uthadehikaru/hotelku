<div id="order-form">
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font font-medium text-3xl text-gray-900">Pesan Kamar Impian Anda Sekarang</h1>
            <p class="leading-relaxed mt-4">Nikmati pengalaman menginap yang tak terlupakan di hotel kami. Dengan berbagai pilihan kamar yang nyaman dan fasilitas mewah, kami siap memberikan kenyamanan terbaik untuk Anda.</p>
            @if($errors->any())
                <div class="mt-4 p-4 bg-red-100 text-red-700">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Formulir Pemesanan</h2>
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Nama Lengkap</label>
                <input type="text" id="full-name" name="full-name" wire:model="name"
                    class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" wire:model="email"
                    class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="phone" class="leading-7 text-sm text-gray-600">Nomor Telepon</label>
                <input type="tel" id="phone" name="phone" wire:model="phone"
                    class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="room-type" class="leading-7 text-sm text-gray-600">Tipe Kamar</label>
                <select id="room-type" name="room-type" wire:model="room_type" class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    <option value="">Pilih Tipe Kamar</option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                    <option value="Suite">Suite</option>
                </select>
            </div>
            <div class="relative mb-4">
                <label for="check-in" class="leading-7 text-sm text-gray-600">Tanggal Check-in</label>
                <input type="date" id="check-in" name="check-in" wire:model="check_in"
                    class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="check-out" class="leading-7 text-sm text-gray-600">Tanggal Check-out</label>
                <input type="date" id="check-out" name="check-out" wire:model="check_out"
                    class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button wire:loading.attr="disabled" wire:loading.class="opacity-50 cursor-not-allowed"
                class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg"
                wire:click="submit">Pesan Sekarang</button>
            <p class="text-xs text-gray-500 mt-3">Kami akan menghubungi Anda untuk konfirmasi pemesanan.</p>
        </div>
    </div>
</section>
</div>
