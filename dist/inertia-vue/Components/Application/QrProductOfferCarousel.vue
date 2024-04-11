<script setup>
import {onMounted, ref} from 'vue'

const props = defineProps({
    pictures: {
        type: Array,
        default() {
            return [
                {
                    'src': 'https://flowbite.com/docs/images/carousel/carousel-1.svg',
                    'alt': 'Picture 1',
                },
                {
                    'src': 'https://flowbite.com/docs/images/carousel/carousel-2.svg',
                    'alt': 'Picture 2',
                },
                {
                    'src': 'https://flowbite.com/docs/images/carousel/carousel-3.svg',
                    'alt': 'Picture 3',
                },
                {
                    'src': 'https://flowbite.com/docs/images/carousel/carousel-3.svg',
                    'alt': 'Picture 3',
                },
                {
                    'src': 'https://flowbite.com/docs/images/carousel/carousel-3.svg',
                    'alt': 'Picture 3',
                },
            ]
        },
    },
    indicators: {
        type: Boolean,
        default: true,
    },
    controls: {
        type: Boolean,
        default: true,
    },
    slide: {
        type: Boolean,
        default: false,
    },
    slideInterval: {
        type: Number,
        default: 3000,
    },
    animation: {
        type: Boolean,
        default: false,
    },
})

const currentPicture = ref(0)
const direction = ref('')
const interval = ref()

const automaticSlide = () => {
    interval.value = setInterval(function () {
        nextPicture()
    }, props.slideInterval)
}

const resetInterval = () => {
    clearInterval(interval.value)
    automaticSlide()
}

const slideTo = (index) => {
    currentPicture.value = index
    resetInterval()
}

const nextPicture = () => {
    if (currentPicture.value !== props.pictures.length - 1) {
        currentPicture.value++
    } else {
        currentPicture.value = 0
    }
    direction.value = 'right'
    resetInterval()
}

const previousPicture = () => {
    if (currentPicture.value !== 0) {
        currentPicture.value--
    } else {
        currentPicture.value = props.pictures.length - 1
    }
    direction.value = 'left'
    resetInterval()
}

onMounted(() => {
    if (props.slide) {
        automaticSlide()
    }
})
</script>

<template>
    <div class="relative">
        <!-- Carousel wrapper -->
        <div class="relative rounded-lg overflow-y-scroll">
            <!-- Item 1 -->
            <!-- duration-700 ease-in-out-->
            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-4">
                <div v-for="(picture, index) in pictures" :key="index" class="bg-white border shadow p-3">
                    <img :alt="picture.alt" :src="picture.src">
                    <div class="text-center">
                        <p class="text-base font-bold leading-5 mb-2 mt-2 px-2 line-clamp-3">60% off</p>
                        <p class="text-sm font-normal leading-4 mb-2 opacity-100 text-[#818181]">Min. order - 499</p>
                        <p class="text-sm leading-4 cursor-pointer">Know more</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider controls -->
        <button v-if="controls"
                class="flex absolute top-0 left-0 z-30 justify-center items-center h-full cursor-pointer group focus:outline-none"
                data-carousel-prev
                type="button"
                @click.prevent="previousPicture">
              <span
                  class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 19l-7-7 7-7" stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"></path>
                </svg>
                <span class="hidden">Previous</span>
              </span>
        </button>
        <button v-if="controls"
                class="flex absolute top-0 right-0 z-30 justify-center items-center h-full cursor-pointer group focus:outline-none"
                data-carousel-next
                type="button"
                @click.prevent="nextPicture">
              <span
                  class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 5l7 7-7 7" stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"></path>
                </svg>
                <span class="hidden">Next</span>
              </span>
        </button>
    </div>
</template>
