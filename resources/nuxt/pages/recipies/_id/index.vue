<template>
    <div class="recipe-component">
        <div class="header-img">
            <img :src="'/images/' + recipe.img" alt="" />
        </div>
        <div class="title">
            <h1 class="bg-text" v-if="recipe.title">
                {{ recipe.title.split(" ")[0] }}
            </h1>
            <h1 class="title-text">{{ recipe.title }}</h1>
        </div>
        <p class="text lead" v-html="recipe.text"></p>
        <div class="desc">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Excepturi doloribus magni, tempora, maxime quasi incidunt iste
                unde eos aspernatur repellendus officiis, numquam iure! Rerum
                voluptas, facilis eveniet, illum distinctio veritatis mollitia
                ipsum maiores in pariatur rem sapiente recusandae nesciunt,
                quasi ea voluptatibus reiciendis? Recusandae aperiam est
                tempora, cumque exercitationem, natus minus cum veritatis qui
                nostrum, accusamus distinctio quis totam iure? Rem assumenda
                aspernatur omnis ipsum neque animi! Maiores porro consequuntur
                quaerat aperiam dolore voluptate ipsam error autem, commodi est
                nemo ea quibusdam sunt veniam quia? Omnis dolores provident non
                laboriosam quae assumenda beatae fugit, ducimus accusantium
                corrupti hic! Doloribus, ipsam.
            </p>
            <br /><br />
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Excepturi doloribus magni, tempora, maxime quasi incidunt iste
                unde eos aspernatur repellendus officiis, numquam iure! Rerum
                voluptas, facilis eveniet, illum distinctio veritatis mollitia
                ipsum maiores in pariatur rem sapiente recusandae nesciunt,
                quasi ea voluptatibus reiciendis? Recusandae aperiam est
                tempora, cumque exercitationem, natus minus cum veritatis qui
                nostrum, accusamus distinctio quis totam iure? Rem assumenda
                aspernatur omnis ipsum neque animi! Maiores porro consequuntur
                quaerat aperiam dolore voluptate ipsam error autem, commodi est
                nemo ea quibusdam sunt veniam quia? Omnis dolores provident non
                laboriosam quae assumenda beatae fugit, ducimus accusantium
                corrupti hic! Doloribus, ipsam.
            </p>
            <br /><br />
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Excepturi doloribus magni, tempora, maxime quasi incidunt iste
                unde eos aspernatur repellendus officiis, numquam iure! Rerum
                voluptas, facilis eveniet, illum distinctio veritatis mollitia
                ipsum maiores in pariatur rem sapiente recusandae nesciunt,
                quasi ea voluptatibus reiciendis? Recusandae aperiam est
                tempora, cumque exercitationem, natus minus cum veritatis qui
                nostrum, accusamus distinctio quis totam iure? Rem assumenda
                aspernatur omnis ipsum neque animi! Maiores porro consequuntur
                quaerat aperiam dolore voluptate ipsam error autem, commodi est
                nemo ea quibusdam sunt veniam quia? Omnis dolores provident non
                laboriosam quae assumenda beatae fugit, ducimus accusantium
                corrupti hic! Doloribus, ipsam.
            </p>
            <br /><br />
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Excepturi doloribus magni, tempora, maxime quasi incidunt iste
                unde eos aspernatur repellendus officiis, numquam iure! Rerum
                voluptas, facilis eveniet, illum distinctio veritatis mollitia
                ipsum maiores in pariatur rem sapiente recusandae nesciunt,
                quasi ea voluptatibus reiciendis? Recusandae aperiam est
                tempora, cumque exercitationem, natus minus cum veritatis qui
                nostrum, accusamus distinctio quis totam iure? Rem assumenda
                aspernatur omnis ipsum neque animi! Maiores porro consequuntur
                quaerat aperiam dolore voluptate ipsam error autem, commodi est
                nemo ea quibusdam sunt veniam quia? Omnis dolores provident non
                laboriosam quae assumenda beatae fugit, ducimus accusantium
                corrupti hic! Doloribus, ipsam.
            </p>
            <br /><br />
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    // data() {
    //     return {
    //         recipe: ""
    //     };
    // },
    // created() {
    //     let uri = "/api/ahmadraosanawarali/recipe/" + this.$route.params.id;
    //     axios.get(uri).then(response => {
    //         // console.log(response.data);

    //         this.recipe = response.data;
    //     });
    // },

    asyncData(context) {
        return new Promise((resolve, reject) => {
            resolve({
                recipe: axios
                    .get("/api/ahmadraosanawarali/recipe/" + context.params.id)
                    .then(response => response.data)
            });
        });
    }
};
</script>
<style scoped>
.recipe-component {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.header-img {
    width: 70%;
    height: 50vh;
}
.header-img .Masthead {
    height: 50vh !important;
}
.header-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
}
.title {
    width: 100%;
    position: relative;
}
.title .bg-text {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}
.title .title-text {
    text-align: center;
    font-size: 38px;
    padding-top: 20px;
    padding-bottom: 0px;
    margin-top: 10px;
    line-height: 53px;
    letter-spacing: 4px;
}
.bg-text {
    font-weight: 900;
    text-transform: uppercase;
    font-size: 60px;
    color: #98b5d1e5;
    z-index: -1;
}
.text {
    font-size: 16px;
    line-height: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
}
.desc {
    width: 65%;
    margin-top: 45px;
    font-size: 16px;
    line-height: 28px;
}
</style>
