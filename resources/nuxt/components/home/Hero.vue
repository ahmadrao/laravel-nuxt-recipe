<template>
   <div class="hero-sec">
  <Parallax
  speedFactor=0.4
  >
    <img :src="require('@/assets/hero-bg.jpg')">

  </Parallax>
  <div class="overlay">
    <h3>What Will <br> you make today?</h3>
    <p>Whatever you make, make with us, make that tast!</p>
    <nuxt-link class="main-btn" to="recipies">Get Started</nuxt-link>
  </div>
  </div>
</template>
<script>
import Parallax from "vue-parallaxy";


export default {
  components: {
    Parallax
  }
}
</script>
<style scoped>
.container {
  margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.Masthead{
  height: 90vh !important;
  min-height: unset;
}

.hero-sec{
  height: 90vh;
  position: relative;
}
.overlay{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateY(-50%);
}
.overlay h3{
  font-family: 'Quicksand', 'Source Sans Pro', -apple-system, BlinkMacSystemFont,
    'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  display: block;
  font-weight: 900;
  font-size: 54px;
  color: #ffffff;
  letter-spacing: 1px;
}
.overlay p{
    font-family: 'Quicksand', 'Source Sans Pro', -apple-system, BlinkMacSystemFont,
    'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  display: block;
  font-weight: 400;
  font-size: 24px;
  color: #ffffff;
  letter-spacing: 1px;
}
.main-btn{
  background-color: #fff;
  border-radius: 2px;
  color: rgb(57, 72, 80);
  font-size: 16px;
  padding: 10px 15px;
  border: #fff 1px solid;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  margin: 10px 0;
}

</style>
