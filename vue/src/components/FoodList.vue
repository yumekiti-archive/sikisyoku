<template>

    <v-row class="card">
        <v-col cols="6" md="3" v-for="(food, i) in this.foods" :key="i">
            <v-card :to="'/food/' + String(food.id)">
                <v-img max-height="300" :src="'/' + food.image" />
                <v-card-title>
                    {{food.name}}
                </v-card-title>
            </v-card>
        </v-col>
    </v-row>

</template>

<script>

export default {
    name: 'FoodList',
    props: {
        foods: Array
    }
}
</script>