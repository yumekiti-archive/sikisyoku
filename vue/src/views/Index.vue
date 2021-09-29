<template>
    <v-container v-if="this.data">

        <v-row>
            <v-col cols="12">
                <v-text-field
                    class="mt-3"
                    label="検索"
                    outlined
                    v-model="search"
                ></v-text-field>
            </v-col>
        </v-row>

        <FoodList :foods="this.searchData" />
        
    </v-container>
</template>

<script>
    import FoodList from '@/components/FoodList'

    export default {
        name: 'Index',
        components: {
            FoodList,
        },
        data: () => ({
            search: '',
        }),
        computed: {
            data() {
                return this.$store.state.data.food
            },
            searchData(){
                return this.data.filter(data => {
                    return data.name.includes(this.search);
                })
            }
        },
        created(){
            this.$store.dispatch('get', {url: 'food'});
        },
    }
</script>

<style>
.card{
    display: flex;
    justify-content: space-evenly;
    justify-content: left;
}
</style>