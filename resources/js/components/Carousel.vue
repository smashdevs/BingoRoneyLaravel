<template>
  <carousel :items-to-show="3" :autoplay="2000" :wrap-around="true">
    <slide v-for="slide in 10" :key="slide" >
      <div class="card card-chart">
                <div class="card-body">
                    <div class="chart-area">
                        {{ slide }}
                  </div>
                </div>
            </div>
    </slide>
    <template #addons>
      <navigation />
      <pagination />
    </template>
  </carousel>
</template>

<script>
// If you are using PurgeCSS, make sure to whitelist the carousel CSS classes
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';

export default {
  name: 'App',
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
};
</script>
