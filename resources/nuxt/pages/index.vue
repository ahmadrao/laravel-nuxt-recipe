<template>
  <div class="home">
    <Hero/>
    <DayRecipe/>
  </div>
</template>

<script>
import Hero from '@/components/home/Hero.vue'
import DayRecipe from '@/components/home/DayRecipe.vue'


export default {
  components: {
    Hero,
    DayRecipe
  }
}
</script>

<style >
</style>
