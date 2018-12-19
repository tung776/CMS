<template>
  <nav class="bg-grey-darkest">
    <div class="container flex items-center justify-between flex-wrap bg-grey-darkest p-6">
      <div class="flex items-center flex-no-shrink text-white mr-6">
        <span class="font-bold text-xl tracking-tight text-red">Son</span><span class = "font-semibold text-xl tracking-tight text-yellow">CatTuong</span>
      </div>

      <div class="block lg:hidden">
        <button
          class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white"
        >
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>

            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg>
        </button>
      </div>

      <div class="ml-auto">
        <div class="text-lg lg:flex-grow">
          <router-link to="/" class="block mt-4 lg:inline-block lg:mt-0 text-pink no-underline hover:text-white mr-4">Home</router-link>|
          <router-link to="/about" class="block mt-4 lg:inline-block lg:mt-0 text-pink no-underline hover:text-white mr-4">About</router-link>
        </div>
      </div>
    </div>
  </nav>
</template>