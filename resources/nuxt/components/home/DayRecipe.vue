<template>
<div class="recipe-of-day">
  <h2 class="bg-heading">Wonderful</h2>
  <h2 class="heading">Recipe of the day</h2>
  <div class="day-recipe">
    <div class="day-recipe-card">
      <div class="left">
        <img :src="require('@/assets/day-recipe.jpg')" alt="">
      </div>
      <div class="right">
        <div class="title">Title of recipe</div>
        <div class="desc">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, non. Eum facilis facere magnam corporis ducimus est odit temporibus adipisci, quas vel neque doloribus libero impedit dicta blanditiis aliquid natus.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, non. Eum facilis facere magnam corporis ducimus est odit temporibus adipisci, quas vel neque doloribus libero impedit dicta blanditiis aliquid natus.</p>
        </div>
        <div class="foot">
          <nuxt-link class="btn-more" to="">Read More
          </nuxt-link>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {

}
</script>
<style scoped>
.recipe-of-the-day{
  position: relative;
}
.bg-heading{
  position: absolute;
  font-size: 66px;
  font-weight: 900;
  left: 50%;
  transform: translateX(-50%);
  color: #98b5d1e5;
  z-index: -1;
  text-transform: uppercase;
}
.day-recipe{
  padding: 40px 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.heading{
  padding: 20px;
  text-align: center;
  font-size: 32px;
  font-weight: 700;
  padding-top: 30px;
}
.day-recipe-card{
  width: 70%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
}
.day-recipe-card .left,
.day-recipe-card .right{
  width: 50%;
}
.day-recipe-card .right{
  background-color: #f1f1f1;
  padding: 30px ;
  transform: translateX(-20%);
}
.day-recipe-card img{
  width: 100%;
}
.title{
  font-weight: 700;
  font-size: 26px;
  line-height: 36px;
}
.desc p{
  font-size: 16px;
  line-height: 22px;
  font-weight: normal;
}
.btn-more{
  background-image: linear-gradient(to top, #a7a6cb 0%, #8989ba 52%, #8989ba 100%);
  padding: 10px 15px;
  border-radius: 2px;
  font-size: 16px;
  letter-spacing: 1px;
  font-weight: 500;
  color: #fff;
  display: inline-block;
  margin: 10px 0;
  transition: all 0.3s  ease-in-out;
  text-decoration: none;
}
.btn-more:hover{
  background-image:linear-gradient(to top, #9a99c7 0%, #8080bd 52%, #7f7fbb 100%);
}
</style>
