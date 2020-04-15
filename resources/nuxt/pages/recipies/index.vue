<template>
  <section class="recipies">
    <Recipe
      v-for="recipe in recipes"
      :key="recipe.id"
      :img="recipe.img"
      :title="recipe.title"
      :text="recipe.text"
      :id="recipe.id"
    />
  </section>
</template>

<script>
import axios from 'axios';
import Recipe from "@/components/recipe/Recipe";
export default {
  data() {
    return {
      recipes: ""
    };
  },
  created() {
    let uri = "/api/ahmadraosanawarali/recipes";
    axios.get(uri).then(response => {
      // console.log(response.data);

      this.recipes = response.data;
    });
  },
  //   asyncData() {
  //     return new Promise((resolve, reject)=>{
  //       // setTimeout(()=>{
  //         resolve({
  //           recipes: [
  //             {
  //               id: 1,
  //               title: 'Delicious Pizza',
  //               text: 'Awesome piza special',
  //               img: require('@/assets/1.jpg'),
  //             },
  //             {
  //               id: 2,
  //               title: 'Delicious Pizza',
  //               text: 'Awesome piza special',
  //               img: require('@/assets/2.jpg'),
  //             },
  //             {
  //               id: 3,
  //               title: 'Delicious Pizza',
  //               text: 'Awesome piza special',
  //               img: require('@/assets/3.jpg'),
  //             },
  //             {
  //               id: 4,
  //               title: 'Delicious Pizza',
  //               text: 'Awesome piza special',
  //               img: require('@/assets/4.jpg'),
  //             },
  //             {
  //               id: 5,
  //               title: 'Delicious Pizza',
  //               text: 'Awesome piza special',
  //               img: require('@/assets/5.jpg'),
  //             }
  //           ]
  //         })
  //       // }, 1500)
  //     })

  //   },
  components: {
    Recipe
  }
};
</script>
<style scoped>
.recipies {
  display: flex;
  flex-flow: row wrap;
  padding: 20px;
}
</style>
