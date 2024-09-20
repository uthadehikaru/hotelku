<div>
    <!-- mulai berlangganan -->
    <section class="text-gray-600 body-font bg-gray-100">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h2 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Berlangganan Promo Hotel</h2>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Dapatkan penawaran eksklusif dan diskon spesial
                    langsung ke email Anda. Jangan lewatkan kesempatan untuk menikmati pengalaman menginap terbaik
                    dengan harga terbaik!</p>
            </div>
            <div
                class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                <div class="relative flex-grow w-full">
                    <label for="full-name" class="leading-7 text-sm text-gray-600">Nama Lengkap</label>
                    <input type="text" id="full-name" name="full-name" wire:model="name"
                        class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative flex-grow w-full">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" wire:model="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button wire:click="subscribe"
                    class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Berlangganan</button>
            </div>
        </div>
    </section>
    <!-- akhir berlangganan -->
</div>
