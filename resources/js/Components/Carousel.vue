<template>
    <div id="animation-carousel" class="relative w-full" data-carousel="static">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Carousel items -->
        <div v-for="(item, index) in carouselItems" :key="index" :class="{ 'hidden': index !== activeIndex, 'duration-200 ease-linear': index === activeIndex }" data-carousel-item>
          <img :src="item.src" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" :alt="'Carousel Image ' + (index + 1)">
        </div>
      </div>
      <!-- Slider controls -->
      <button @click="prevSlide" type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button @click="nextSlide" type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const carouselItems = [
    { src: '/images/graduation-7287004_1280.jpg' },
    { src: '/images/education-4796952_1280.jpg' },
    { src: '/images/cat-5331883_1280.jpg' },
    { src: '/images/study-1635250_1280.jpg' },
    { src: '/images/people-2557396_1280.jpg' }
  ];
  const activeIndex = ref(0);
  
  const prevSlide = () => {
    activeIndex.value = (activeIndex.value - 1 + carouselItems.length) % carouselItems.length;
  };
  
  const nextSlide = () => {
    activeIndex.value = (activeIndex.value + 1) % carouselItems.length;
  };
  </script>
  