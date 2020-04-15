<template>
    <nuxt-link :to="'/recipies/' + id">
        <article class="recipie">
            <div class="thumbnail">
                <img :src="'/images/' + img" :alt="title + 'image'" />
            </div>
            <h1>{{ title }}</h1>
            <p class="lead" v-html="text"></p>
        </article>
    </nuxt-link>
</template>

<script>
export default {
    props: ["img", "title", "text", "id"]
};
</script>
<style scoped>
a {
    text-decoration: none;
    color: #35495e;
}
.recipie {
    margin: 0 auto;
    min-width: 320px;
    max-width: 400px;
    width: auto;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 2px 2px #ccc;
    margin: 0.5em;
}
.thumbnail img {
    height: 170px;
    width: 100%;
    object-fit: cover;
}
.recipie h1 {
    color: #35495e;
    font-size: 18px;
    line-height: 34px;
}
.recipie p {
    font-size: 14px;
    line-height: 16px;
    color: #35495e;
}
</style>
