@extends('template')
@section('header')
@section('footer')

<section class="pt-16 pb-3 bg-white dark:bg-white-900 flex justify-center items-center min-h-screen">
    <div class="flex flex-col items-center w-full p-8 pt-0 lg:w-1/2 lg:px-12 xl:px-24">
        <h2 class="section-title text-center text-xl font-bold mb-6">Tinggalkan Pesan Untuk Shera!</h2> <!-- Heading yang dipusatkan -->
        
        @if (session('success'))
        <div class="alert alert-success text-green-500 pb-5">
            {{ session('success') }}
        </div>
        @endif

        <form action="/contact" method="POST" class="w-full">
            @csrf
            <!-- Full Name -->
            <div class="mb-4">
                <label class="block mb-2 text-sm text-black-600 dark:text-black-200">Masukkan Nama anda</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Shera" 
                    class="block w-full px-5 py-3 mt-2 text-black-700 placeholder-black-400 bg-white border border-black-200 rounded-md dark:placeholder-black-600 dark:bg-black-900 dark:text-black-300 dark:border-black-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 
                    @error('name') border-red-500 @enderror" />
                @error('name')
                <div class="mt-2">
                    <div class="flex items-center text-sm text-red-500" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div>
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                    </div>
                </div>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block mb-2 text-sm text-black-600 dark:text-black-200">Masukkan Email anda</label>
                <input type="text" name="email" value="{{ old('email') }}" placeholder="contoh@shera.com" 
                    class="block w-full px-5 py-3 mt-2 text-black-700 placeholder-black-400 bg-white border border-black-200 rounded-md dark:placeholder-black-600 dark:bg-black-900 dark:text-black-300 dark:border-black-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 
                    @error('email') border-red-500 @enderror" />
                @error('email')
                <div class="mt-2">
                    <div class="flex items-center text-sm text-red-500" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div>
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                    </div>
                </div>
                @enderror
            </div>

            <!-- Message -->
            <div class="w-full mt-4">
                <label class="block mb-2 text-sm text-black-600 dark:text-black-200">Pesan Anda</label>
                <textarea name="message" placeholder="ketik disini"
                    class="block w-full h-32 px-5 py-3 mt-2 text-black-700 placeholder-black-400 bg-white border border-black-200 rounded-md md:h-56 dark:placeholder-black-600 dark:bg-black-900 dark:text-black-300 dark:border-black-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 
                    @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                @error('message')
                <div class="mt-2">
                    <div class="flex items-center text-sm text-red-500" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div>
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                    </div>
                </div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-amber-700 rounded-md hover:bg-amber-600 focus:outline-none focus:ring focus:ring-amber-300 focus:ring-opacity-50">
                Kirim Pesan Anda
            </button>
        </form>
    </div>
</section>
